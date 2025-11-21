import pandas as pd
import numpy as np

x = np.array(["a", "b", "c"])
y = np.array(["a", "b", "c"])

# Create a DataFrame where data is an array of shape (3, 3)
data = np.array([[1, 2, 3], [1, 2, 3], [1, 2, 3]])

# Create DataFrame with x as the index and y as the columns
df = pd.DataFrame(data=data, index=x, columns=y)

print(df)
