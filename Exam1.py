#1. Write a program that accepts a comma separated sequence of word as input
#   and print unique words in sorted order.

words=input("Enter sequence of words separated by coma :")
words=words.lower()
w=words.split(",")
s=set(w)
print("Unique word in list are :",sorted(s))