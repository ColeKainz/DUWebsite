---
title: Login

login_redirect_here: false

form:
    name: login
    action:
    method: post

    fields:
        - name: username
          type: text
          id: username
          placeholder: Username
          label: PLUGIN_LOGIN.USERNAME_EMAIL
          labelclasses: text-label
          classes: text-style
          autofocus: true

        - name: password
          type: password
          id: password
          placeholder: Password
          label: PLUGIN_LOGIN.PASSWORD
          labelclasses: text-label
          classes: text-style
---

