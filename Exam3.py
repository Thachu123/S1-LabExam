#3. Create a class Publisher(name).Derive class Book(title,author) from Publisher.
#   Derive class Python(price,no of pages) from Book.
#   Write a program that displays information about a python Book.
#   Use base class constructor invocation and method overriding.

class Publisher:
    def __init__(self):
        self.name="Notion Press"
    def display(self):
        print("Publisher: ",self.name)
class Book(Publisher):
    def __init__(self):
        self.title="Python Programming"
        self.author="Nireekshan kasagani"
    def display(self):
        super().__init__()
        super().display()
        print("Title: ",self.title)
        print("Author: ",self.author)
class Python(Book):
    def __init__(self):
        self.price=548
        self.nop=362
    def display(self):
        super().__init__()
        super().display()
        print("Price: ",self.price)
        print("No_of_pages: ",self.nop)
b=Python()
print("\n\t\t.....Book Details.....\n")
b.display()