import os

files = [afile for afile in os.listdir('.') if afile.endswith('.rst')]
files.sort()

for afile in files:
    print afile
    data = file(afile, 'rb').read()
    f2 = file(afile, 'wb')
    f2.write('\n.. include:: ../../Includes.txt\n\n')
    f2.write(data)
    f2.close()

