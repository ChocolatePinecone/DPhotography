---
title: Contact
body_classes: contact-form
form:
    name: contact
    fields:
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            type: email
            validate:
                required: true
        -
            name: message
            label: Message
            placeholder: 'Enter your message'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
        -
            type: reset
            value: Reset
    process:
        -
            email:
                from: "{{ config.plugins.email.from }}"
                to: "{{ config.plugins.email.to }}"
                subject: '[Site Contact Form] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
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

###Contact information:
<p>
Phone:	+31 (0) 634436937 <br>
Email:	draganapictures@gmail.com <br>
</p>

###Send me a mail: