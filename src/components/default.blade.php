<?php
$title = isset($layout['title']) ? $layout['title'] . ' - ' . SITE_NAME : SITE_TITLE;
if($title == 'Área Restrita - JS Peças'){
	$title =  'Prime Club Login Exclusivo - JS Peças';
}
$description = isset($layout['description']) ? htmlentities($layout['description']) : '';
$image = isset($layout['image']) ? $layout['image'] : '';
$body_class = isset($layout['body_class']) ? $layout['body_class'] : '';
if($body_class) $body_class = " class=\"{$body_class}\"";

$product_slug = Line::whereStats('active')->orderBy('id')->first();
$product_slug = $product_slug->slug;

if($image && !strstr($image, 'https://')) {
	$image = URL::asset($image);
}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-BR" itemscope itemtype="http://schema.org/WebPage">
<head>

	<base href="https://www.jspecas.com.br/">
	<meta charset="UTF-8" />
	<meta http-equiv="content-language" content="pt-BR" />
	<title>{{ $title }}</title>
	<meta name="title" content="{{ $title }}" />
	<meta name="description" content="{{ $description }}" />
	<meta name="author" content="Waister Nunes (waister.me)" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<meta property="og:title" content="{{ $title }}" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="{{ $image }}" />
	<meta property="og:site_name" content="{{ SITE_NAME }}" />
	<meta property="fb:admins" content="100000195697112" />
	<meta itemprop="name" content="{{ SITE_NAME }}" />
	<meta itemprop="description" content="{{ $description }}" />
	<meta itemprop="image" content="{{ $image }}" />
	<link href="{{ URL::to('favicon.ico') }}" type="image/x-icon" rel="icon" />
	<meta name="google-site-verification" content="pTuIdkSzXS-DKgO6yhtFTRckBXVXKsucs6CRbeVxah4" />
	@if(isset($visibility) && $visibility == 'private')
		<meta name="robots" content="noindex, nofollow" />
	@endif
	{{ Less::to('default'); }}
	{{ HTML::style('packages/fancybox/jquery.fancybox.css') }}
	@section('style')
	@show
	<style>
		.grecaptcha-badge {
			display:none !important;
		}
	</style>

	<!-- Webchat CSS -->
     <link href="https://4-app.pecazap.com.br/webchat/style.css" rel="stylesheet">
	<!-- End Webchat CSS -->

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	{{-- <script async>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-57107750-1', 'auto');
	ga('require', 'GTM-TV3RJ2D');
	ga('send', 'pageview');
	</script> --}}
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if gte IE 9]>
	<style type="text/css">.gradient{filter:none;}</style>
	<![endif]-->

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':	
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TJVNZZW');</script>
	<!-- End Google Tag Manager -->

	
	<script async>
		(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:409045,hjsv:5};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
		})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script>

<script async>
	var _ttq = _ttq || [];
	_ttq.push(["_setAccount", "TT-11955-5"]);
	(function() {
	var ts = document.createElement("script"); ts.type = "text/javascript"; ts.async = true;
	ts.src =  ("https:" == document.location.protocol ? "https://" : "http://") + "d.tailtarget.com/base.js";
	var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);
	})();
	</script>
	<!-- Facebook Pixel Code -->
	<script async>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1852548398333416');

		fbq('track', 'ViewContent');
		fbq('track', "PageView");

				var seconds = 10;
				setTimeout(function() {
					fbq('track', 'Lead');
				}, seconds * 1000);
	</script>
	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=1852548398333416&ev=PageView&noscript=1"
			/></noscript>
	<!-- End Facebook Pixel Code -->

	<script src="https://my.hellobar.com/238bbc5d90f15df69692a8a5c39345e7f3aad989.js" type="text/javascript" charset="utf-8" async="async"></script>
</head>


<body {{ $body_class }}>
	<div id="app">
		<header lang="{{ Lang::get('layout.language') }}">
			<div class="corpo">
				<!-- {{ HTML::link('/', 'Home', array('id' => 'logo', 'alt' => 'Logo JS Peças')) }} -->
				<a href="https://www.jspecas.com.br" id="logo">
						<svg xmlns="http://www.w3.org/2000/svg" width="186.758" height="70.063" viewBox="0 0 186.758 70.063"><defs><style>.a{fill:#f08100;}.b{fill:#fff;}</style></defs><g transform="translate(-89.676 -93.859)"><g transform="translate(89.676 93.859)"><g transform="translate(0 24.179)"><path fill="#f08100" d="M156.372,114.584l-16.836,2.993a2.387,2.387,0,0,0-1.914,2.255v13.7a2.392,2.392,0,0,1-1.51,2.138L91.184,153.4a2.394,2.394,0,0,0-1.508,2.139v3.295a1.559,1.559,0,0,0,1.914,1.574l15.239-2.709,17.152-3.049,15.239-2.709a2.387,2.387,0,0,0,1.914-2.255V136.021a2.4,2.4,0,0,1,1.545-2.153l14.063-5.269a2.4,2.4,0,0,0,1.545-2.153V116.158A1.559,1.559,0,0,0,156.372,114.584Z" transform="translate(-89.676 -114.554)"/></g><g transform="translate(20.529)"><path class="b" d="M173.943,93.889,158.7,96.6l-17.152,3.049-15.239,2.709a2.387,2.387,0,0,0-1.914,2.255v13.664a2.4,2.4,0,0,1-1.545,2.153L108.792,125.7a2.4,2.4,0,0,0-1.545,2.152v10.288a1.559,1.559,0,0,0,1.914,1.574L126,136.72a2.388,2.388,0,0,0,1.915-2.255v-13.7a2.391,2.391,0,0,1,1.508-2.138L174.349,100.9a2.394,2.394,0,0,0,1.508-2.139V95.463A1.559,1.559,0,0,0,173.943,93.889Z" transform="translate(-107.247 -93.859)"/></g></g><g transform="translate(165.01 118.166)"><path class="b" d="M160.735,122.287a6.993,6.993,0,0,1-.492,2.914q-.492,1.041-2.673,1.022h-3.415v2.3h3.995a12.4,12.4,0,0,0,2.364-.222,3.556,3.556,0,0,0,2.017-1.207,4.231,4.231,0,0,0,.888-1.562,7.653,7.653,0,0,0,.328-1.776c0-.141,0-.279.009-.415s.009-.28.009-.435v-8.24h-3.03Z" transform="translate(-154.155 -114.664)"/><g transform="translate(13.026)"><path class="b" d="M178.426,123.638a4.507,4.507,0,0,0-.29-1.235,2.859,2.859,0,0,0-1.852-1.688,6.234,6.234,0,0,0-1.332-.222c-.154-.013-.308-.02-.463-.02s-.3-.006-.444-.019l-3.86.019a2.354,2.354,0,0,1-1.283-.347,1.263,1.263,0,0,1-.55-1.158A1.521,1.521,0,0,1,169,117.53a3.247,3.247,0,0,1,1.591-.395h7.2v-2.471l-7.622.02a6.226,6.226,0,0,0-3.521.877q-1.3.88-1.341,3.291a3.589,3.589,0,0,0,1.224,3.174,5.692,5.692,0,0,0,3.387.859l3.435.019a4.291,4.291,0,0,1,1.37.231q.578.214.675,1.119.135,1.158-.569,1.486a3.729,3.729,0,0,1-1.67.31h-7.294v2.47h7.757a6.28,6.28,0,0,0,3.513-.859q1.292-.859,1.331-3.271c0-.129,0-.254-.009-.376S178.439,123.767,178.426,123.638Z" transform="translate(-165.304 -114.664)"/></g><g transform="translate(38.922)"><path class="b" d="M197.871,115.379a4.118,4.118,0,0,0-1.206-.473,8.093,8.093,0,0,0-1.3-.183,7.017,7.017,0,0,0-.734-.039h-.782a.062.062,0,0,1-.048-.02h-6.33v13.857h2.914v-4.844l3.532.019h.927a11.877,11.877,0,0,0,1.747-.2,4.013,4.013,0,0,0,1.591-.685,3.569,3.569,0,0,0,1.245-1.6,5.223,5.223,0,0,0,.356-2.007,5.864,5.864,0,0,0-.453-2.18A3.362,3.362,0,0,0,197.871,115.379Zm-1.332,3.82a1.659,1.659,0,0,1-.771,1.611,3.819,3.819,0,0,1-1.833.415h-3.552v-4.09h3.378v.019a5.054,5.054,0,0,1,1.958.358Q196.577,117.869,196.539,119.2Z" transform="translate(-187.469 -114.664)"/></g><g transform="translate(53.904)"><path class="b" d="M202.109,116.227a7.2,7.2,0,0,0-1.785,4.825q-.019.289-.028.578c-.007.193,0,.393.009.6a9.4,9.4,0,0,0,.5,2.789,5.034,5.034,0,0,0,1.622,2.306,4.712,4.712,0,0,0,2.055.984,11.854,11.854,0,0,0,2.268.213h4.921v-2.413l-4.787.02h-.173a6.112,6.112,0,0,1-1.245-.126,1.853,1.853,0,0,1-1.052-.646,2.846,2.846,0,0,1-.666-1.235,5.981,5.981,0,0,1-.164-1.409h8.086V120.3l-8.067.02a3.7,3.7,0,0,1,.888-2.383,3.2,3.2,0,0,1,2.393-.859h4.787v-2.413l-4.844.02A6.485,6.485,0,0,0,202.109,116.227Z" transform="translate(-200.292 -114.664)"/></g><g transform="translate(68.493)"><path class="b" d="M214.6,116.227a7.2,7.2,0,0,0-1.785,4.825q-.019.289-.028.578c-.007.193,0,.393.009.6a9.4,9.4,0,0,0,.5,2.789,5.034,5.034,0,0,0,1.622,2.306,4.712,4.712,0,0,0,2.055.984,11.854,11.854,0,0,0,2.268.213h.31l-.562,1.029c.977.1,1.62.332,1.62.893,0,.437-.395.623-.873.623a2.455,2.455,0,0,1-1.163-.27l-.291.935a3.15,3.15,0,0,0,1.474.354c1.081,0,2.139-.478,2.139-1.682a1.646,1.646,0,0,0-1.453-1.559l.186-.322h3.532v-2.413l-4.786.02H219.2a6.112,6.112,0,0,1-1.245-.126,1.943,1.943,0,0,1-1.071-.646,3.013,3.013,0,0,1-.637-1.148,6.58,6.58,0,0,1-.25-1.321c-.013-.218-.02-.435-.02-.647v-.626a8.356,8.356,0,0,1,.675-3.185,2.694,2.694,0,0,1,2.721-1.389h4.786v-2.374l-4.843.02A6.485,6.485,0,0,0,214.6,116.227Z" transform="translate(-212.779 -114.664)"/></g><g transform="translate(81.686)"><path class="b" d="M229.919,114.664l-5.848,13.857h3.068l1.235-3.3H234.4l1.273,3.3h3.242l-5.9-13.857Zm-.6,8.086,2.026-5.326,2.1,5.326Z" transform="translate(-224.071 -114.664)"/></g><g transform="translate(98.262)"><path class="b" d="M251.411,124.014c-.007-.123-.016-.248-.029-.376a4.55,4.55,0,0,0-.29-1.235,2.864,2.864,0,0,0-1.853-1.688,6.223,6.223,0,0,0-1.331-.222c-.155-.013-.31-.02-.464-.02s-.3-.006-.444-.019l-3.859.019a2.355,2.355,0,0,1-1.284-.347,1.265,1.265,0,0,1-.549-1.158,1.52,1.52,0,0,1,.646-1.438,3.252,3.252,0,0,1,1.592-.395h7.2v-2.471l-7.623.02a6.226,6.226,0,0,0-3.521.877q-1.3.88-1.341,3.291a3.589,3.589,0,0,0,1.226,3.174,5.687,5.687,0,0,0,3.387.859l3.435.019a4.289,4.289,0,0,1,1.369.231c.387.143.611.515.676,1.119q.133,1.158-.57,1.486a3.727,3.727,0,0,1-1.668.31h-7.3v2.47h7.758a6.278,6.278,0,0,0,3.512-.859q1.293-.859,1.332-3.271C251.42,124.262,251.417,124.137,251.411,124.014Z" transform="translate(-238.259 -114.664)"/></g></g><g transform="translate(252.301 109.93)"><path class="b" d="M233.469,110.322a1.779,1.779,0,0,0,.27-1.013q0-.054,0-.109c0-.037,0-.074,0-.11a2,2,0,0,0-.129-.563,1.311,1.311,0,0,0-.317-.477,1.221,1.221,0,0,0-.543-.32,2.87,2.87,0,0,0-.629-.1c-.058,0-.113-.008-.168-.008s-.111,0-.168-.007h-2.908v5.612h1.18v-2.2h1.392l1.235,2.2H234l-1.4-2.338A1.354,1.354,0,0,0,233.469,110.322Zm-1.227-.4a1.96,1.96,0,0,1-.683.113h-.032a.077.077,0,0,1-.032-.007h-1.446v-1.415H231.5v.008a2.453,2.453,0,0,1,.723.1c.216.069.324.269.324.6S232.448,109.848,232.242,109.923Z" transform="translate(-228.869 -107.614)"/><g transform="translate(6.13)"><path class="b" d="M234.852,108.246a2.919,2.919,0,0,0-.723,1.955c0,.078-.009.157-.012.234a2.427,2.427,0,0,0,0,.243,3.8,3.8,0,0,0,.2,1.129,2.038,2.038,0,0,0,.655.935,1.914,1.914,0,0,0,.833.4,4.8,4.8,0,0,0,.918.086h1.993v-.978l-1.938.008h-.07a2.49,2.49,0,0,1-.5-.05.758.758,0,0,1-.426-.262,1.149,1.149,0,0,1-.269-.5,2.4,2.4,0,0,1-.067-.57h3.275V109.9l-3.267.008a1.5,1.5,0,0,1,.359-.966,1.294,1.294,0,0,1,.97-.347h1.938v-.977l-1.962.007A2.631,2.631,0,0,0,234.852,108.246Z" transform="translate(-234.116 -107.614)"/></g><g transform="translate(12.396)"><path class="b" d="M244.684,110.2a2.93,2.93,0,0,0-.719-1.955,2.651,2.651,0,0,0-1.915-.632h-2.572v5.612h2.6a4.843,4.843,0,0,0,.926-.086,1.862,1.862,0,0,0,.825-.4,2.041,2.041,0,0,0,.657-.935,3.8,3.8,0,0,0,.2-1.129c0-.083.006-.165,0-.243S244.689,110.279,244.684,110.2Zm-1.282.227v.234c0,.078,0,.157-.008.235a3.08,3.08,0,0,1-.1.555,1.266,1.266,0,0,1-.262.493.789.789,0,0,1-.435.262,2.479,2.479,0,0,1-.5.05h-.035a.071.071,0,0,1-.035-.008h-1.368v-3.657h1.368v.007h.07a2.325,2.325,0,0,1,.5.055.812.812,0,0,1,.435.266,1.142,1.142,0,0,1,.262.469,2.58,2.58,0,0,1,.09.54,2.274,2.274,0,0,1,.015.254Z" transform="translate(-239.479 -107.614)"/></g><g transform="translate(18.69)"><path class="b" d="M245.6,108.246a2.913,2.913,0,0,0-.723,1.955c0,.078-.009.157-.012.234a2.427,2.427,0,0,0,0,.243,3.762,3.762,0,0,0,.2,1.129,2.049,2.049,0,0,0,.657.935,1.914,1.914,0,0,0,.833.4,4.8,4.8,0,0,0,.918.086h1.993v-.978l-1.938.008h-.071a2.479,2.479,0,0,1-.5-.05.758.758,0,0,1-.426-.262,1.138,1.138,0,0,1-.269-.5,2.4,2.4,0,0,1-.067-.57h3.275V109.9l-3.268.008a1.5,1.5,0,0,1,.36-.966,1.292,1.292,0,0,1,.97-.347h1.938v-.977l-1.962.007A2.63,2.63,0,0,0,245.6,108.246Z" transform="translate(-244.866 -107.614)"/></g></g></g></svg>
					<!-- <img src="https://www.jspecas.com.br/img/logo.png" alt="Logo JS Peças"> -->
			
				</a>
				<a id="idioma" href="?lang={{ Lang::get('layout.language') == 'en' ? 'pt' : 'en' }}">
					{{ Lang::get('layout.language_label') }}: <span>{{ Lang::get('layout.language') }}</span>
				</a>
				<u id="redessociais">
					<li><a href="https://www.facebook.com/redejspecas" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="9.024" height="16.691" viewBox="0 0 9.024 16.691"><g transform="translate(-22.077)"><path fill="#FFF" d="M30.761,0,28.6,0a3.8,3.8,0,0,0-4,4.108V6H22.417a.34.34,0,0,0-.34.341V9.086a.34.34,0,0,0,.34.34h2.176v6.924a.34.34,0,0,0,.34.34h2.839a.34.34,0,0,0,.34-.34V9.427h2.545a.34.34,0,0,0,.34-.34V6.342A.341.341,0,0,0,30.659,6H28.114V4.4c0-.772.184-1.163,1.189-1.163h1.458a.34.34,0,0,0,.34-.34V.344A.34.34,0,0,0,30.761,0Z"/></g></svg></a></li>
					<li><a href="https://www.linkedin.com/company/redejspecas" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="14.936" height="14.936" viewBox="0 0 14.936 14.936"><path fill="#FFF" d="M18.138,17.8h0V12.318c0-2.68-.577-4.744-3.71-4.744A3.252,3.252,0,0,0,11.5,9.184h-.044V7.824H8.489V17.8h3.093V12.858c0-1.3.246-2.557,1.856-2.557,1.586,0,1.61,1.484,1.61,2.641V17.8Z" transform="translate(-3.206 -2.86)"/><path fill="#FFF" d="M.4,7.977h3.1v9.972H.4Z" transform="translate(-0.15 -3.013)"/><path fill="#FFF" d="M1.794,0A1.8,1.8,0,1,0,3.587,1.794,1.794,1.794,0,0,0,1.794,0Z"/></svg></a></li>					
					<li><a href="https://www.instagram.com/redejspecas/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="15.968" height="15.971" viewBox="0 0 15.968 15.971"><g transform="translate(-0.449)"><path fill="#fff" d="M16.377,4.7a5.836,5.836,0,0,0-.371-1.938A4.091,4.091,0,0,0,13.668.421,5.851,5.851,0,0,0,11.731.05C10.876.009,10.6,0,8.436,0S6,.009,5.145.047A5.837,5.837,0,0,0,3.207.418a3.9,3.9,0,0,0-1.417.924A3.932,3.932,0,0,0,.87,2.755,5.852,5.852,0,0,0,.5,4.692c-.041.855-.05,1.126-.05,3.295s.009,2.44.047,3.292a5.836,5.836,0,0,0,.371,1.938A4.091,4.091,0,0,0,3.2,15.553a5.852,5.852,0,0,0,1.938.371c.852.038,1.123.047,3.292.047s2.44-.009,3.292-.047a5.834,5.834,0,0,0,1.937-.371A4.085,4.085,0,0,0,16,13.216a5.855,5.855,0,0,0,.371-1.938c.037-.852.047-1.123.047-3.292S16.414,5.547,16.377,4.7Zm-1.438,6.521a4.378,4.378,0,0,1-.275,1.482,2.649,2.649,0,0,1-1.516,1.516,4.393,4.393,0,0,1-1.482.274c-.842.038-1.1.047-3.226.047s-2.387-.009-3.226-.047a4.375,4.375,0,0,1-1.482-.274,2.458,2.458,0,0,1-.917-.6,2.483,2.483,0,0,1-.6-.917,4.394,4.394,0,0,1-.274-1.482c-.038-.842-.047-1.1-.047-3.226s.009-2.387.047-3.226a4.375,4.375,0,0,1,.274-1.482,2.428,2.428,0,0,1,.6-.917,2.479,2.479,0,0,1,.917-.6A4.4,4.4,0,0,1,5.217,1.5c.842-.037,1.1-.047,3.226-.047s2.387.009,3.226.047a4.378,4.378,0,0,1,1.482.275,2.456,2.456,0,0,1,.917.6,2.482,2.482,0,0,1,.6.917,4.4,4.4,0,0,1,.275,1.482c.037.842.047,1.1.047,3.226S14.976,10.374,14.938,11.216Zm0,0" transform="translate(0 0)"/><path fill="#fff" d="M129.052,124.5a4.1,4.1,0,1,0,4.1,4.1A4.1,4.1,0,0,0,129.052,124.5Zm0,6.764a2.661,2.661,0,1,1,2.661-2.661A2.662,2.662,0,0,1,129.052,131.264Zm0,0" transform="translate(-120.616 -120.616)"/><path fill="#fff" d="M364.365,89.559a.958.958,0,1,1-.958-.958A.958.958,0,0,1,364.365,89.559Zm0,0" transform="translate(-350.706 -85.837)"/></g></svg></a></li>
				</u>
				<ul id="menu">
					<li>{{ link_to_action('PagesController@home', Lang::get('home'), null, array('class' => 'home')) }}</li>
					<li>{{ link_to_action('PagesController@company', Lang::get('menus.company'), null, array('class' => 'company')) }}</li>
					<li>{{ link_to_action('StoresController@index', Lang::get('menus.stores'), null, array('class' => 'stores')) }}</li>
					<li>{{ link_to_action('Catalog\ProductsController@index', Lang::get('menus.products'), null, array('class' => 'products')) }}</li>
					<!-- <li>{{ link_to_action('CampaignsController@index', Lang::get('menus.campaigns'), null, array('class' => 'campaigns')) }}</li> -->
					<!-- <li>{{ link_to_action('AttendanceController@index', Lang::get('menus.attendance'), null, array('class' => 'attendance')) }}</li> -->
					<li>{{ link_to_action('BlogController@index', Lang::get('menus.blog'), null, array('class' => 'blog')) }}</li>
					<!-- <li>{{ link_to_action('PrimeclubController@index', Lang::get('menus.primeclub'), null, array('class' => 'primeclub')) }}</li> -->
					<li><a href="https://jobs.kenoby.com/jspecas/" class="primeclub">Carreiras</a></li>
					<!-- <li><a href="https://www.jspecas.com.br/canal-de-denuncias" class="primeclub">Canal de Denúncias</a></li> -->
					<li>{{ link_to_action('MessagesController@central', Lang::get('menus.complaints'), null, array('class' => 'primeclub')) }}</li>

					
					<li>{{ link_to_action('MessagesController@index', Lang::get('menus.contact'), null, array('class' => 'contact')) }}</li>
				</ul>
				<a id="menu_icone" href="">menu</a>
				@if($layout['body_class'] == 'home')
					<div class="clear"></div>
					<div id="textoheader"></div>
				@endif
			</div>
		</header>

		@yield('page_content')
		<section id="newsletter">
			{{ Form::open(array('action' => 'PagesController@newsletter', 'id' => 'formNewsletter', 'onsubmit' => 'return false')) }}
					<div class="container">
						<div class="message"></div>
						{{ Form::label('email', Lang::get('layout.newsletter')) }}
						{{ Form::email('email', Input::old('email'), array('placeholder' => Lang::get('layout.your_email'), 'required')) }}
						<select id="estado-news" name="estado" required></select>
						<select id="cidade-news" name="cidade" required></select>
						<script>function submitNewsletter(token) { $("#formNewsletter").submit(); }</script>
						{{ Form::submit(Lang::get('layout.send'), ['data-callback' => 'submitNewsletter']) }}
					</div>
				{{ Form::close() }}

		</section>

		<footer lang="{{ Lang::get('layout.language') }}">
			<div class="corpo">
				<div class="newlogo">
					<svg xmlns="http://www.w3.org/2000/svg" width="136.474" height="51.199" viewBox="0 0 136.474 51.199"><defs><style>.b{fill:#fff;}</style></defs><g transform="translate(-89.676 -93.859)"><g transform="translate(89.676 93.859)"><g transform="translate(0 17.669)"><path class="a" d="M138.415,114.576l-12.3,2.187a1.744,1.744,0,0,0-1.4,1.648v10.008a1.748,1.748,0,0,1-1.1,1.562L90.778,142.941a1.749,1.749,0,0,0-1.1,1.563v2.408a1.139,1.139,0,0,0,1.4,1.15l11.136-1.98,12.534-2.228,11.136-1.98a1.744,1.744,0,0,0,1.4-1.648v-9.985a1.75,1.75,0,0,1,1.129-1.574l10.277-3.851a1.75,1.75,0,0,0,1.129-1.574v-7.517A1.139,1.139,0,0,0,138.415,114.576Z" transform="translate(-89.676 -114.554)"/></g><g transform="translate(15.002)"><path class="b" d="M155.986,93.881l-11.136,1.98-12.534,2.228-11.136,1.98a1.744,1.744,0,0,0-1.4,1.648V111.7a1.75,1.75,0,0,1-1.129,1.574l-10.277,3.851a1.75,1.75,0,0,0-1.129,1.573v7.518a1.139,1.139,0,0,0,1.4,1.15l12.3-2.187a1.745,1.745,0,0,0,1.4-1.648V113.524a1.747,1.747,0,0,1,1.1-1.562L156.282,99a1.749,1.749,0,0,0,1.1-1.563V95.031A1.139,1.139,0,0,0,155.986,93.881Z" transform="translate(-107.247 -93.859)"/></g></g><g transform="translate(144.727 111.622)"><path class="b" d="M158.963,120.235a5.11,5.11,0,0,1-.359,2.129q-.36.761-1.953.747h-2.5v1.679h2.919a9.059,9.059,0,0,0,1.727-.162,2.6,2.6,0,0,0,1.474-.882,3.092,3.092,0,0,0,.649-1.142,5.593,5.593,0,0,0,.24-1.3c0-.1,0-.2.007-.3s.007-.2.007-.318v-6.022h-2.214Z" transform="translate(-154.155 -114.664)"/><g transform="translate(9.519)"><path class="b" d="M174.893,121.222a3.293,3.293,0,0,0-.212-.9,2.089,2.089,0,0,0-1.353-1.234,4.555,4.555,0,0,0-.973-.162c-.113-.009-.225-.015-.338-.015s-.221,0-.324-.014l-2.821.014a1.72,1.72,0,0,1-.937-.254.923.923,0,0,1-.4-.846,1.112,1.112,0,0,1,.473-1.051,2.373,2.373,0,0,1,1.163-.289h5.26v-1.806l-5.57.015a4.55,4.55,0,0,0-2.573.641,2.755,2.755,0,0,0-.98,2.405,2.622,2.622,0,0,0,.895,2.32,4.159,4.159,0,0,0,2.475.628l2.51.014a3.135,3.135,0,0,1,1,.169q.423.156.493.818.1.847-.416,1.086a2.725,2.725,0,0,1-1.22.226h-5.33v1.8h5.668a4.589,4.589,0,0,0,2.567-.628,2.726,2.726,0,0,0,.972-2.391c0-.094,0-.185-.007-.275S174.9,121.316,174.893,121.222Z" transform="translate(-165.304 -114.664)"/></g><g transform="translate(28.443)"><path class="b" d="M195.07,115.187a3.009,3.009,0,0,0-.881-.346,5.915,5.915,0,0,0-.952-.134,5.128,5.128,0,0,0-.536-.028h-.571a.045.045,0,0,1-.035-.015h-4.626V124.79H189.6v-3.54l2.581.014h.677a8.679,8.679,0,0,0,1.276-.148,2.933,2.933,0,0,0,1.163-.5,2.608,2.608,0,0,0,.91-1.171,3.817,3.817,0,0,0,.26-1.467,4.285,4.285,0,0,0-.331-1.593A2.457,2.457,0,0,0,195.07,115.187Zm-.973,2.792a1.213,1.213,0,0,1-.563,1.177,2.791,2.791,0,0,1-1.34.3h-2.6V116.47h2.468v.014a3.693,3.693,0,0,1,1.431.261Q194.125,117.006,194.1,117.978Z" transform="translate(-187.469 -114.664)"/></g><g transform="translate(39.391)"><path class="b" d="M201.62,115.806a5.265,5.265,0,0,0-1.3,3.526q-.014.211-.02.423c-.005.141,0,.287.007.437a6.87,6.87,0,0,0,.366,2.038,3.678,3.678,0,0,0,1.185,1.685,3.443,3.443,0,0,0,1.5.719,8.663,8.663,0,0,0,1.657.155h3.6v-1.763l-3.5.015h-.126a4.466,4.466,0,0,1-.91-.092,1.354,1.354,0,0,1-.768-.472,2.08,2.08,0,0,1-.487-.9,4.37,4.37,0,0,1-.12-1.03h5.909v-1.763l-5.9.015a2.7,2.7,0,0,1,.649-1.742,2.335,2.335,0,0,1,1.749-.628h3.5v-1.763l-3.54.015A4.739,4.739,0,0,0,201.62,115.806Z" transform="translate(-200.292 -114.664)"/></g><g transform="translate(50.052)"><path class="b" d="M214.107,115.806a5.26,5.26,0,0,0-1.3,3.526q-.014.211-.021.423c-.005.141,0,.287.007.437a6.869,6.869,0,0,0,.366,2.038,3.678,3.678,0,0,0,1.185,1.685,3.443,3.443,0,0,0,1.5.719,8.663,8.663,0,0,0,1.657.155h.226l-.411.752c.714.076,1.184.242,1.184.652,0,.319-.289.455-.638.455a1.794,1.794,0,0,1-.85-.2l-.213.683a2.3,2.3,0,0,0,1.077.259c.79,0,1.563-.349,1.563-1.229a1.2,1.2,0,0,0-1.062-1.139l.136-.236h2.581v-1.763l-3.5.015h-.126a4.466,4.466,0,0,1-.91-.092,1.42,1.42,0,0,1-.783-.472,2.2,2.2,0,0,1-.465-.839,4.808,4.808,0,0,1-.183-.966c-.009-.16-.015-.318-.015-.473v-.458a6.106,6.106,0,0,1,.493-2.327A1.968,1.968,0,0,1,217.6,116.4h3.5v-1.735l-3.539.015A4.739,4.739,0,0,0,214.107,115.806Z" transform="translate(-212.779 -114.664)"/></g><g transform="translate(59.693)"><path class="b" d="M228.344,114.664l-4.273,10.126h2.242l.9-2.412h4.4l.931,2.412h2.369L230.6,114.664Zm-.437,5.909,1.48-3.892,1.537,3.892Z" transform="translate(-224.071 -114.664)"/></g><g transform="translate(71.806)"><path class="b" d="M247.87,121.5c-.005-.09-.012-.181-.021-.275a3.325,3.325,0,0,0-.212-.9,2.093,2.093,0,0,0-1.354-1.234,4.548,4.548,0,0,0-.972-.162c-.114-.009-.226-.015-.339-.015s-.221,0-.324-.014l-2.82.014a1.721,1.721,0,0,1-.938-.254.924.924,0,0,1-.4-.846,1.111,1.111,0,0,1,.472-1.051,2.376,2.376,0,0,1,1.164-.289h5.26v-1.806l-5.571.015a4.55,4.55,0,0,0-2.573.641,2.758,2.758,0,0,0-.98,2.405,2.623,2.623,0,0,0,.9,2.32,4.156,4.156,0,0,0,2.475.628l2.51.014a3.134,3.134,0,0,1,1,.169c.283.1.447.377.494.818q.1.847-.417,1.086a2.724,2.724,0,0,1-1.219.226h-5.331v1.8h5.669a4.588,4.588,0,0,0,2.566-.628,2.724,2.724,0,0,0,.973-2.391C247.877,121.678,247.874,121.586,247.87,121.5Z" transform="translate(-238.259 -114.664)"/></g></g><g transform="translate(208.516 105.603)"><path class="b" d="M232.23,109.593a1.3,1.3,0,0,0,.2-.74q0-.04,0-.079c0-.027,0-.054,0-.08a1.462,1.462,0,0,0-.094-.412.958.958,0,0,0-.231-.348.892.892,0,0,0-.4-.234,2.1,2.1,0,0,0-.459-.074c-.043,0-.083-.006-.123-.006s-.081,0-.123-.005h-2.125v4.1h.862V110.1h1.017l.9,1.611h.971l-1.022-1.708A.989.989,0,0,0,232.23,109.593Zm-.9-.292a1.432,1.432,0,0,1-.5.083h-.023a.056.056,0,0,1-.023-.005h-1.057v-1.034h1.057v.006a1.792,1.792,0,0,1,.528.073c.158.05.237.2.237.441S231.484,109.246,231.334,109.3Z" transform="translate(-228.869 -107.614)"/><g transform="translate(4.48)"><path class="b" d="M234.654,108.076a2.133,2.133,0,0,0-.528,1.428c0,.057-.007.114-.009.171a1.77,1.77,0,0,0,0,.178,2.777,2.777,0,0,0,.149.825,1.489,1.489,0,0,0,.479.683,1.4,1.4,0,0,0,.609.291,3.509,3.509,0,0,0,.671.063h1.457V111l-1.416.006h-.051a1.819,1.819,0,0,1-.369-.037.554.554,0,0,1-.312-.191.84.84,0,0,1-.2-.366,1.75,1.75,0,0,1-.049-.417h2.393v-.714l-2.387.006a1.093,1.093,0,0,1,.262-.706.945.945,0,0,1,.709-.254h1.416v-.714l-1.434.005A1.923,1.923,0,0,0,234.654,108.076Z" transform="translate(-234.116 -107.614)"/></g><g transform="translate(9.059)"><path class="b" d="M243.283,109.5a2.141,2.141,0,0,0-.525-1.428,1.937,1.937,0,0,0-1.4-.462h-1.879v4.1h1.9a3.539,3.539,0,0,0,.677-.063,1.361,1.361,0,0,0,.6-.291,1.491,1.491,0,0,0,.48-.683,2.777,2.777,0,0,0,.149-.825c0-.061,0-.12,0-.178S243.286,109.561,243.283,109.5Zm-.937.166v.171c0,.057,0,.114-.006.172a2.25,2.25,0,0,1-.071.406.925.925,0,0,1-.191.36.577.577,0,0,1-.318.191,1.811,1.811,0,0,1-.368.037h-.026a.052.052,0,0,1-.026-.006h-1v-2.672h1v.005h.051a1.7,1.7,0,0,1,.368.04.593.593,0,0,1,.318.195.835.835,0,0,1,.191.342,1.885,1.885,0,0,1,.066.394,1.663,1.663,0,0,1,.011.185Z" transform="translate(-239.479 -107.614)"/></g><g transform="translate(13.658)"><path class="b" d="M245.4,108.076a2.129,2.129,0,0,0-.529,1.428c0,.057-.007.114-.009.171s0,.117,0,.178a2.749,2.749,0,0,0,.148.825,1.5,1.5,0,0,0,.48.683,1.4,1.4,0,0,0,.609.291,3.509,3.509,0,0,0,.671.063h1.457V111l-1.416.006h-.052a1.811,1.811,0,0,1-.368-.037.554.554,0,0,1-.312-.191.831.831,0,0,1-.2-.366,1.751,1.751,0,0,1-.049-.417h2.393v-.714l-2.388.006a1.1,1.1,0,0,1,.263-.706.944.944,0,0,1,.709-.254h1.416v-.714l-1.433.005A1.922,1.922,0,0,0,245.4,108.076Z" transform="translate(-244.866 -107.614)"/></g></g></g></svg>	
					
				</div>
				<div class="link">
					<span> <a href="https://www.jspecas.com.br/lojas">{{ Lang::get('layout.language') == 'pt' ? "Fale com a filial mais próximo de você!" : "Talk to the parts branch closest to you!" }}</a></span>
				</div>			
				<ul>
					<li style="margin-top: 15px">{{ link_to_action('MessagesController@index', Lang::get('menus.talk_with_us')) }}</li>
				</ul>
				<div class="copy">
					<p>&copy; <?php echo date('Y');?>. Rede JS Peças. <svg xmlns="http://www.w3.org/2000/svg" width="25.845" height="16.29" viewBox="0 0 25.845 16.29"><path fill="#fff" d="M19.1,25.6c-.334,0-.5-.259-.319-.543l3.134-5.224,1.588-2.746,0-.012a2.342,2.342,0,0,0-1.979-3.532l0,0H13.964a0,0,0,0,0,0,0v3.23a.669.669,0,0,0,.67.67h4.082l0,.008-4.947,8.406a6.074,6.074,0,0,0-.509,1.093,1.291,1.291,0,0,0-.056.19,1.952,1.952,0,0,0,.041.962,1.378,1.378,0,0,0,.137.336,1.951,1.951,0,0,0,1.6,1.049c.04,0,.08.007.119.007h7.413a.526.526,0,0,0,.526-.526V25.6H19.1Z" transform="translate(-13.163 -13.531)"/><path fill="#fff" d="M35.78,15.95a6.8,6.8,0,0,1-.51,2.168c-.035.1.087.212.151.131a10.5,10.5,0,0,1,1.531-1.724,13.278,13.278,0,0,1,1.807-1.281c.025-.014.251-.18.273-.2a.851.851,0,0,0,.3-.51c.07-.541.149-1-.377-1l-4.282-.008a.028.028,0,0,0-.014.053A2.544,2.544,0,0,1,35.78,15.95Z" transform="translate(-24.516 -13.521)"/><g transform="translate(10.526)"><path fill="#fff" d="M42.083,24.722a7.3,7.3,0,0,0-.371,1.8A9.8,9.8,0,0,1,42.083,24.722Z" transform="translate(-38.775 -19.438)"/><path fill="#fff" d="M40.182,29.663a6.923,6.923,0,0,1-1.374-2.516,10.668,10.668,0,0,1-.455-3.183,11.566,11.566,0,0,1,.068-1.268,7.3,7.3,0,0,1,.371-1.8c.012-.04.024-.081.036-.121a7.788,7.788,0,0,1,.613-1.431,2.491,2.491,0,0,0,.367-1.076c.022-.351,0-.753,0-.789a9.565,9.565,0,0,0-3.215,2.756,7.074,7.074,0,0,0-1.108,4.035v6.795a.528.528,0,0,0,.528.528h4.052a.537.537,0,0,0,.537-.537s.009-.332,0-.442A1.286,1.286,0,0,0,40.182,29.663Z" transform="translate(-35.484 -15.609)"/><path fill="#fff" d="M54.222,22.627H51.79a.6.6,0,0,0-.592.605V26.5a.6.6,0,0,1-.579.607H50.5a3.131,3.131,0,0,1-2.645-1.154,5.708,5.708,0,0,1-.888-3.506,5.857,5.857,0,0,1,.909-3.571,3.052,3.052,0,0,1,2.584-1.2,6.213,6.213,0,0,1,.661.033,6.007,6.007,0,0,1,.62.1,6.638,6.638,0,0,1,.651.176c.055.018.241.117.3.137a.591.591,0,0,0,.756-.414c.165-.61.4-1.479.555-2.071a.649.649,0,0,0-.357-.727,5.319,5.319,0,0,0-1.615-.495,11.109,11.109,0,0,0-1.879-.148,7.033,7.033,0,0,0-3,.6,6.219,6.219,0,0,0-2.222,1.715q-.219.268-.414.561a8.052,8.052,0,0,0-.961,2.043c-.013.041-.024.083-.036.124a10.214,10.214,0,0,0-.371,1.844,12.079,12.079,0,0,0-.068,1.3A11.129,11.129,0,0,0,43.53,25.7,7.073,7.073,0,0,0,44.9,28.271c.123.144.253.28.388.411a6.4,6.4,0,0,0,1.9,1.271,7.8,7.8,0,0,0,3.183.6,7.709,7.709,0,0,0,4.055-1.189c.249-.179.389-.315.389-.569V23.233A.6.6,0,0,0,54.222,22.627Z" transform="translate(-39.495 -14.267)"/></g></svg></p>
				</div>
			</div>
		</footer>
	</div>

	<script>var base_url = "{{ URL::to('/') }}";</script>
	{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js'); }}
	<!-- <script async>window.jQuery || document.write('<script src="{{ URL::asset("js/jquery-1.10.1.min.js") }}"><\/script>')</script> -->
	<script async type="text/javascript" src="{{ URL::asset('js/cidade-estado.js') }}"></script>
   	<script type="text/javascript" charset="utf-8">
		$(function() { new dgCidadesEstados({ estado: $('#estado-news').get(0), cidade: $('#cidade-news').get(0) }); });
		$('#cidade-news').append('<option value="">Cidade</option>');
    </script>

	{{ HTML::script('js/jquery.maskedinput.min.js') }}
	{{ HTML::script('js/jquery.validate.min.js') }}
	{{ HTML::script('packages/fancybox/jquery.fancybox.js') }}
	{{ HTML::script('/js/default.js?v=2'); }}
	@section('script')
	@show
	{{ HTML::script_inline('/js/jquery.placeholder.min.js') }}


	<script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5931b9fe53d76085"></script>
	<?php if (!stripos($_SERVER['REQUEST_URI'], 'canal-de-denuncias')){ echo '<script src="https://globalbot.ai/init/1/JSP0045"></script>'; }	?>

	<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/fb7f31af-c0ca-4ec4-9fab-6b00fead9666-loader.js"></script>
	<script type="text/javascript">
		$('#formMain').on('submit', function() {
		  	ga('send', 'event', 'form', 'submit', 'contato');
		  	console.log('Lead enviado');
		});
	</script>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJVNZZW"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


    <!-- Webchat JS -->
	<script async defer
     data-beep=false
     data-auto-open=false
     data-mobile-auto-open=false
     data-time=3
     id="pecazap-webchat"
     src="https://4-app.pecazap.com.br/webchat/bundle.js"
     type="text/javascript"
></script>     
    <!--End Webchat JS -->

</body>
</html>