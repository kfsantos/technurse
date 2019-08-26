<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1400 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
<br><br><br>

<p align="center"><h2>Guzzle Documentation</h2></p>


<div class="section" id="overview">
<h1>Overview<a class="headerlink" href="#overview" title="Permalink to this headline">¶</a></h1>
<div class="section" id="requirements">
<h2>Requirements<a class="headerlink" href="#requirements" title="Permalink to this headline">¶</a></h2>
<ol class="arabic simple">
<li>PHP 5.5.0</li>
<li>To use the PHP stream handler, <code class="docutils literal"><span class="pre">allow_url_fopen</span></code> must be enabled in your
system's php.ini.</li>
<li>To use the cURL handler, you must have a recent version of cURL &gt;= 7.19.4
compiled with OpenSSL and zlib.</li>
</ol>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p class="last">Guzzle no longer requires cURL in order to send HTTP requests. Guzzle will
use the PHP stream wrapper to send HTTP requests if cURL is not installed.
Alternatively, you can provide your own HTTP handler used to send requests.</p>
</div>
</div>
<div class="section" id="installation">
<span id="id1"></span><h2>Installation<a class="headerlink" href="#installation" title="Permalink to this headline">¶</a></h2>
<p>The recommended way to install Guzzle is with
<a class="reference external" href="http://getcomposer.org">Composer</a>. Composer is a dependency management tool
for PHP that allows you to declare the dependencies your project needs and
installs them into your project.</p>
<div class="highlight-bash"><div class="highlight"><pre><span></span><span class="c1"># Install Composer</span>
curl -sS https://getcomposer.org/installer <span class="p">|</span> php
</pre></div>
</div>
<p>You can add Guzzle as a dependency using the composer.phar CLI:</p>
<div class="highlight-bash"><div class="highlight"><pre><span></span>php composer.phar require guzzlehttp/guzzle:~6.0
</pre></div>
</div>
<p>Alternatively, you can specify Guzzle as a dependency in your project's
existing composer.json file:</p>
<div class="highlight-js"><div class="highlight"><pre><span></span> <span class="p">{</span>
   <span class="s2">"require"</span><span class="o">:</span> <span class="p">{</span>
      <span class="s2">"guzzlehttp/guzzle"</span><span class="o">:</span> <span class="s2">"~6.0"</span>
   <span class="p">}</span>
<span class="p">}</span>
</pre></div>
</div>
<p>After installing, you need to require Composer's autoloader:</p>
<div class="highlight-php"><div class="highlight"><pre><span></span><span class="k">require</span> <span class="s1">'vendor/autoload.php'</span><span class="p">;</span>
</pre></div>
</div>
<p>You can find out more on how to install Composer, configure autoloading, and
other best-practices for defining dependencies at <a class="reference external" href="http://getcomposer.org">getcomposer.org</a>.</p>
<div class="section" id="bleeding-edge">
<h3>Bleeding edge<a class="headerlink" href="#bleeding-edge" title="Permalink to this headline">¶</a></h3>
<p>During your development, you can keep up with the latest changes on the master
branch by setting the version requirement for Guzzle to <code class="docutils literal"><span class="pre">~6.0@dev</span></code>.</p>
<div class="highlight-js"><div class="highlight"><pre><span></span><span class="p">{</span>
   <span class="s2">"require"</span><span class="o">:</span> <span class="p">{</span>
      <span class="s2">"guzzlehttp/guzzle"</span><span class="o">:</span> <span class="s2">"~6.0@dev"</span>
   <span class="p">}</span>
<span class="p">}</span>
</pre></div>
</div>
</div>
</div>
<div class="section" id="license">
<h2>License<a class="headerlink" href="#license" title="Permalink to this headline">¶</a></h2>
<p>Licensed using the <a class="reference external" href="http://opensource.org/licenses/MIT">MIT license</a>.</p>
<blockquote>
<div><p>Copyright (c) 2015 Michael Dowling &lt;<a class="reference external" href="https://github.com/mtdowling">https://github.com/mtdowling</a>&gt;</p>
<p>Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:</p>
<p>The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.</p>
<p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.</p>
</div></blockquote>
</div>
<div class="section" id="contributing">
<h2>Contributing<a class="headerlink" href="#contributing" title="Permalink to this headline">¶</a></h2>
<div class="section" id="guidelines">
<h3>Guidelines<a class="headerlink" href="#guidelines" title="Permalink to this headline">¶</a></h3>
<ol class="arabic simple">
<li>Guzzle utilizes PSR-1, PSR-2, PSR-4, and PSR-7.</li>
<li>Guzzle is meant to be lean and fast with very few dependencies. This means
that not every feature request will be accepted.</li>
<li>Guzzle has a minimum PHP version requirement of PHP 5.5. Pull requests must
not require a PHP version greater than PHP 5.5 unless the feature is only
utilized conditionally.</li>
<li>All pull requests must include unit tests to ensure the change works as
expected and to prevent regressions.</li>
</ol>
</div>
<div class="section" id="running-the-tests">
<h3>Running the tests<a class="headerlink" href="#running-the-tests" title="Permalink to this headline">¶</a></h3>
<p>In order to contribute, you'll need to checkout the source from GitHub and
install Guzzle's dependencies using Composer:</p>
<div class="highlight-bash"><div class="highlight"><pre><span></span>git clone https://github.com/guzzle/guzzle.git
<span class="nb">cd</span> guzzle <span class="o">&amp;&amp;</span> curl -s http://getcomposer.org/installer <span class="p">|</span> php <span class="o">&amp;&amp;</span> ./composer.phar install --dev
</pre></div>
</div>
<p>Guzzle is unit tested with PHPUnit. Run the tests using the Makefile:</p>
<div class="highlight-bash"><div class="highlight"><pre><span></span>make <span class="nb">test</span>
</pre></div>
</div>
<div class="admonition note">
<p class="first admonition-title">Note</p>
<p class="last">You'll need to install node.js v0.5.0 or newer in order to perform
integration tests on Guzzle's HTTP handlers.</p>
</div>
</div>
</div>
<div class="section" id="reporting-a-security-vulnerability">
<h2>Reporting a security vulnerability<a class="headerlink" href="#reporting-a-security-vulnerability" title="Permalink to this headline">¶</a></h2>
<p>We want to ensure that Guzzle is a secure HTTP client library for everyone. If
you've discovered a security vulnerability in Guzzle, we appreciate your help
in disclosing it to us in a <a class="reference external" href="http://en.wikipedia.org/wiki/Responsible_disclosure">responsible manner</a>.</p>
<p>Publicly disclosing a vulnerability can put the entire community at risk. If
you've discovered a security concern, please email us at
<a class="reference external" href="mailto:security%40guzzlephp.org">security<span>@</span>guzzlephp<span>.</span>org</a>. We'll work with you to make sure that we understand the
scope of the issue, and that we fully address your concern. We consider
correspondence sent to <a class="reference external" href="mailto:security%40guzzlephp.org">security<span>@</span>guzzlephp<span>.</span>org</a> our highest priority, and work to
address any issues that arise as quickly as possible.</p>
<p>After a security vulnerability has been corrected, a security hotfix release will
be deployed as soon as possible.</p>
</div>
</div>
