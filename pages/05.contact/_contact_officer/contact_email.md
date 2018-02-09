---
contacts:
    -
        position: Cow/Dude
        email: cow@cow.cow
    -
        position: test
        email: test@test.tes
title: contact_officer
form:
    name: contact
    classes: length
    fields:
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autocomplete: 'on'
            type: text
            classes: style
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            type: email
            classes: style
            validate:
                required: true
        -
            name: officer_dropdown
            size: long
            type: select
            classes: style
            label: Officer
            validate:
                required: true
        -
            name: message
            label: Message
            placeholder: 'Enter your message'
            type: textarea
            classes: style
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
            classes: pbutton
    process:
        -
            email:
                subject: '[Site Contact Form] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
                from: '{{ form.value.email }}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for getting in touch!'
        -
            display: thankyou
---

