class Nurses:
    def __init__(self):
        print("Nurses")
        self.n_memid=int(input("Enter the ID:"))
        self.n_name=input("Enter the name:")
        self.n_salary=int(input("Enter the salary:"))
        self.n_qualif=input("Enter the Qualification:")
        self.n_dept=input("Enter the department:")
        self.n_covid=input("Are you in Covid Duty(Yes/No):")                        
    def display(self):
         print("Member ID:", self.n_memid)
         print("Name:",self.n_name)
         print("Salary:",self.n_salary)
         print("Qualification:",self.n_qualif)
         print("Department:",self.n_dept)
         print("On Duty:",self.n_covid)
class Doctor:        
    def __init__(self):      
        print("Doctor")
        self.d_name=input("Enter the name:")
        self.d_salary=int(input("Enter the salary:"))
        self.d_specif=input("Enter the Specialization:")
        self.d_dept=input("Enter the department:")
        self.d_covid=input("Are you in Covid Duty(Yes/No):")                          
    def display(self):       
         print("Name:",self.d_name)
         print("Salary:",self.d_salary)
         print("specialization:",self.d_specif)
         print("Department:",self.d_dept)
         print("On Duty:",self.d_covid)  
class hospital(Nurses,Doctor):  
    def __init__(self,id):
        Nurses.__init__(self)
        Doctor.__init__(self)
        self.h_id=id
    def display(self):
        if(self.d_covid=='Yes','yes'):
            print("Doctor Name:",self.d_name)
        if(self.n_covid=='Yes','yes'):
            print("Nurse Name:",self.n_name)
id1 =int(input("Enter the hospital ID:"))
s1=hospital(id1)
id2 =int(input("Enter the hospital ID:"))
s2=hospital(id2)
q=int(input("Enter the Hospital Id to check for Covid duty for staff:"))
if(q==id1):
    s1.display()
if(q==id2):
    s2.display()
