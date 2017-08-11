---
layout: post
title:  "The setup of my new laptop"
date:   2017-08-03 15:50:00
categories: martin
tags: [mac, laptop, setup]
permalink: blog/:title
---
Recently I started working for [Das Büro am Draht][LinkBAD]. That means new colleagues, new office, new challenges, and new computer. I love working with Mac. I want to share my initial setup routine to get started real quick.



    # install brew    /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
    # deactivate analytics and upgrade    brew analytics off    brew update    brew upgrade

    brew cask install java iterm2 vagrant virtualbox virtualbox-extension-pack skype diffmerge docker keepassx

    #configure java_home    echo "export JAVA_HOME=`/usr/libexec/java_home`" >> .bash_profile
    #configure git globals    git config --global user.name "my name"    git config --global user.email "some@email.address"

    # install zsh
    brew install zsh zsh-completions

    # maven
    brew install maven

    # install gem libraries - open    gem install bundler    echo "gem 'squall', git: 'http://github.com/suhailpatel/squall.git'" >> Gemfile    bundle install

After that I configured my iTerm2 following [these steps][LinkItermSetup],

Hope you find it useful.


[LinkBAD]: https://www.dasburo.com/home.html
[LinkItermSetup]: https://gist.github.com/kevin-smets/8568070
