---
layout: default
title: aszel.com ash blog
permalink: /ash/
position: 4
---

<h1 class="post-title">ASH Crew</h1>

<p class="post-title-sub">Posts vom alten Blog</p>

<div class="posts">
<ul>
{% for post in site.posts %}
{% if post.categories contains 'writing' %}
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