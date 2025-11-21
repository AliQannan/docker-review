# Use an official Python runtime as the base image
FROM python:3.12

# Set the working directory in the container
WORKDIR .

# Copy the requirements.txt file into the container to install dependencies
COPY ./app/requirements.txt ./app/requirements.txt

# Install any dependencies specified in requirements.txt
RUN pip install --no-cache-dir -r ./app/requirements.txt

# Copy the rest of the application files into the container
COPY ./app .

# Run the Python script when the container starts
CMD ["python3", "./app/draw.py"]
