#Write a Python program to find set difference, union, intersection and symmetric difference.

set1 = set(input("Enter elements of set1 separated by spaces: ").split())
set2 = set(input("Enter elements of set2 separated by spaces: ").split())

print("Set 1:", set1)
print("Set 1:", set2)

print("Set Difference:", set1 - set2)
print("Set Union:", set1 | set2)
print("Set Intersection:", set1 & set2)
print("Set Symmetric Difference:", set1 ^ set2)
