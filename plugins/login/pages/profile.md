---
title: Profile
access:
    site.login: true
    
form:
  fields:
    avatar:
      type: avatar
      classes: "avatar"
      outerclasses: "avatarDis"
      dataclasses: "avatarData"
      destination: user/data/members
	  
    public:
      type: fieldset
      classes: public
	  legend: Public Information
      fields:

        fullname:
          type: text
          label: Full Name
          name: fullname
          placeholder: "John Smith"
          labelclasses: text-label
          classes: text-style

        major:
          type: text
          label: Major
          name: major
          placeholder: Computer Science
          labelclasses: text-label
          classes: text-style

        position:
          type: select
          size: short
          label: Position
          name: position
          labelclasses: text-label
          classes: select-style
          options:

        serviceHours:
          type: text
          label: Service Hours
          name: servicehours
          placeholder: 0
          labelclasses: text-label
          classes: text-style

        dateJoined:
          type: date
          label: Date Joined
          name: datejoined
          labelclasses: text-label
          classes: text-style
  
        ndsuYear:
          type: select
          size: short
          label: Year
          name: ndsuYear
          labelclasses: text-label
          classes: select-style
          options:
           freshman: Freshman
           sophmore: Sophmore
           junior: Junior
           senior: Senior
	  
    private:
      type: fieldset
      classes: private
	  legend: Private Information
      fields:
        
        phoneNumber:
          type: text
          label: Phone Number
          name: phoneNumber
          labelclasses: text-label
          classes: text-style

        email:
          type: email
          placeholder: "example@example.com"
          labelclasses: text-label
          classes: text-style
          validate:
            required: true
            message: PLUGIN_LOGIN.EMAIL_VALIDATION_MESSAGE

        address:
          type: text
          size: long
          label: Address
          name: address
          labelclasses: text-label
          classes: text-style
        
        inHouse:
          type: checkbox
          label: In house
          name: inHouse

        emergancyContact:
          type: text
          label: Emergancy Contant
          name: emergancyContact
          labelclasses: text-label
          classes: text-style

        emergancyPhoneNumber:
          type: text
          label: Contact's Phone Number
          name: emergancyPhoneNumber
          labelclasses: text-label
          classes: text-style

        emergancyAddress:
          type: text
          size: long
          label: Contanct's Address
          name: emergancyAddress
          labelclasses: text-label
          classes: text-style

        password:
          type: password
          label: New password
          labelclasses: text-label
          classes: text-style
          validate:
            message: PLUGIN_LOGIN.PASSWORD_VALIDATION_MESSAGE
            config-pattern@: system.pwd_regex
    bio:
      type: textarea
      label: Biography
      name: bio
      classes: "bioarea"
      outerclasses: "bio"
      labelclasses: text-label
      classes: text-style

  buttons:
      -
          type: reset
          value: Reset
          classes: primary
      -
          type: submit
          value: Submit
          classes: primary

  process:
      update_user: true
      message: "Your profile has been updated"
---