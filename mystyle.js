
function validateform(){  
    let name=document.myform.name.value; 
    let mail=document.myform.email.value; 
    let phone=document.myform.phone.value;
    let address=document.myform.address.value; 
    if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
    }
    else if(mail==null || mail==""){
       alert("Email address can't be blank");  
       return false;  
    }
    else if(phone==null || phone==""){
       alert("phone number can't be blank");  
       return false;  
    }
    else if(address==null || address==""){
        alert("home address can't be blank");  
        return false;  
    }
    else{  
        if(name[0]<'A' || name[0]>'Z'){
            alert("First Letter of name must be capital");  
            return false;  
        }
        let temp=0;
        let len=mail.length;
        for(var i=0; i<len; i++){
            if(mail[i]=='@'){
                temp=1;
            }
        }
        if(temp==0){
            alert("email must contain @");  
            return false;  
        }
        if(len<5 || mail[len-1] != 'm' || mail[len-2] != 'o' || mail[len-3] != 'c' || mail[len-4] != '.'){
            alert("last 3 charecter of email must be com");  
            return false; 
        }
        len = phone.length;
        if(len<14 || phone[0] != '+' || phone[1] != '8' || phone[2] != '8' || phone[3] != '0'){
            alert("phone number must be in form +880...");  
            return false; 
        }
        return true;
      }  
    } 
   