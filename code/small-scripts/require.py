import os

os.system("locate -i requirements.txt > all.txt")
with open("all.txt") as file:
    for lines in file:
        lines = file.readline()
        os.system("pip install -r " + lines.__str__())
        os.system("pip3 install -r " + lines.__str__())
