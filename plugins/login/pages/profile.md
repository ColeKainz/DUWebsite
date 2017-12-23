---
title: Profile
access:
    site.login: true
    
form:
  fields:
    profile:
	  type: fieldset
      legend: Profile
      id: "profile"  

      fields:
        avatar:
          type: avatar
          classes: "avatar"
          destination: user/data/members

        fullname:
          type: text
          label: Full Name
          name: fullname
          placeholder: "John Smith"
          outerclasses: "public"
        
        major:
          type: text
          label: Major
          name: major
          placeholder: Computer Science
          outerclasses: "public"

        bio:
          type: textarea
          label: Biography
          name: bio
          classes: "bioarea"
          outerclasses: "bio"

        position:
          type: select
          size: short
          label: Position
          name: position
          outerclasses: "public"
          options:
            test: test

        serviceHours:
          type: text
          label: Service Hours
          name: servicehours
          placeholder: 0
          outerclasses: "public"

        dateJoined:
          type: date
          label: Date Joined
          name: datejoined
          outerclasses: "public"
  
        ndsuYear:
          type: select
          size: short
          label: Year
          name: ndsuYear
          outerclasses: "public"
          options:
            freshman: Freshman
            sophmore: Sophmore
            junior: Junior
            senior: Senior
	  
        phoneNumber:
          type: text
          label: Phone Number
          name: phoneNumber
          outerclasses: "private"

        email:
          type: email
          placeholder: "example@example.com"
          outerclasses: "private"
          validate:
            required: true
            message: PLUGIN_LOGIN.EMAIL_VALIDATION_MESSAGE

        address:
          type: text
          size: long
          label: Address
          name: address
          outerclasses: "private"
        
        inHouse:
          type: checkbox
          label: In house
          name: inHouse
          outerclasses: "private"

        emergancyContact:
          type: text
          label: Emergancy Contant
          name: emergancyContact
          outerclasses: "private"

        emergancyPhoneNumber:
          type: text
          label: Contact's Phone Number
          name: emergancyPhoneNumber
          outerclasses: "private"

        emergancyAddress:
          type: text
          size: long
          label: Contanct's Address
          name: emergancyAddress
          outerclasses: "private"

        password:
          type: password
          label: New password
          outerclasses: "private"
          validate:
            message: PLUGIN_LOGIN.PASSWORD_VALIDATION_MESSAGE
            config-pattern@: system.pwd_regex

  buttons:
      -
          type: submit
          value: Submit
      -
          type: reset
          value: Reset

  process:
      update_user: true
      message: "Your profile has been updated"
---