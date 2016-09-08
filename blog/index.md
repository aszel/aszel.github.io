---
layout: default
title: aszel.com blog
permalink: /blog/
---

<h1 class="post-title">Blog</h1>
<p class="post-title-sub">Just my 2 cents</p>

<div class="posts">
<ul>
{% for post in site.posts %}
{% if post.categories contains 'martin' %}
<li>
<a href="{{ post.url }}">
<span class="left">
<span class="date">{{ post.date | date: "%-d/%b" }}</span>
<span class="year">{{ post.date | date: "%Y" }}</span>
</span>
<span class="right">
<span class="title">{{ post.title }}</span>
{% if post.tags %}
{% for tag in post.tags %}
<span class="tags">#{{ tag }}</span>
{% endfor %}
{% endif %}
</span>
<span class="clear"></span>
</a>
</li>
{% endif %}
{% endfor %}
</ul>
</div>