## import statements
import pandas as pd
import sys
import pickle
import json


# get the input 
userInput = sys.argv[1:]
userInput = " ".join(userInput)
userInput= userInput.strip('{')
userInput = userInput.strip('}')

## open the pickle file and load the contents
with open('C:/Users/aliya/Desktop/LaibaProject/MarketBasketAnalysis/storage/app/MLmodel/model.pickle','rb') as f:
    model = pickle.load(f)

# change the pickle model to dataframe
data = pd.DataFrame.from_dict(model)

# remove frozenset from the columns of dataframe
data["variable1"] = data["variable1"].apply(lambda x: list(x)[0]).astype("unicode")
data["variable2"] = data["variable2"].apply(lambda x: list(x)[0]).astype("unicode")

# search the userInput in the data
retreived = data[data['variable1'] == userInput]

# get the max confidence row
#maxConfidence = retreived['variable4'].max()

# get the row with maxConfidence
#result = retreived[retreived['variable4'] == maxConfidence]

top_5_confidence_values = retreived['variable4'].nlargest(5)
result = retreived[retreived['variable4'].isin(top_5_confidence_values.values)]


# change result into a list
result = result.values.tolist()

# turn the result into json compatible format for php  
json_data = json.dumps(result)
print(json_data)

