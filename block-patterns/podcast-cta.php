<?php

register_block_pattern(
	'twenty-twenty-one-child/podcast-template',
	array(
		'title'         => __( 'Podcast' ),
		'categories'    => array( 'podcast' ),
		'description'   => 'This is a complete podcast block pattern',
 		'viewportWidth' => 1440,
		'content'       => "<!-- wp:pullquote -->
		<figure class=\"wp-block-pullquote\"><blockquote><p>A really cool quote from the podcast</p><cite>Kara</cite></blockquote></figure>
		<!-- /wp:pullquote -->

		<!-- wp:audio /-->

		<!-- wp:heading -->
		<h2>Show Notes</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>My super awesome show notes are here.</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading -->
		<h2>Transcript</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consectetur sem quis odio vestibulum imperdiet ac sed nibh. Proin et efficitur mi, non blandit quam. In tincidunt, mauris vel varius vehicula, arcu ex lobortis turpis, eget euismod eros augue eget velit. Nullam finibus mi quis est tempus tempor. Etiam faucibus vitae neque et tincidunt. Vivamus fermentum imperdiet elit, id feugiat ligula auctor feugiat. Donec tincidunt vel odio eu ultricies. Pellentesque auctor maximus velit at vestibulum. Duis ullamcorper turpis in neque tincidunt porta. Donec eget viverra leo. Fusce quis dolor vitae lorem facilisis ultrices consectetur eu elit. Aenean tellus urna, commodo vitae posuere at, lacinia vitae sem. Pellentesque semper elementum arcu eu pulvinar. Morbi odio turpis, congue in leo non, bibendum porta nisl.</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {\"align\":\"full\",\"className\":\"is-style-twentytwentyone-border\",\"backgroundColor\":\"colour-three\"} -->
		<div class=\"wp-block-group alignfull is-style-twentytwentyone-border has-colour-three-background-color has-background\"><div class=\"wp-block-group__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"level\":3} -->
		<h3 class=\"has-text-align-center\">Get exclusive podcast episodes in your inbox</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {\"align\":\"center\"} -->
		<p class=\"has-text-align-center\">Every week, Kara records a podcast episode exclusively for subscribers, diving deep into the latest SEO strategies she\'s experimenting with. Get bleeding edge content once a week in your inbox.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {\"align\":\"center\"} -->
		<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":0,\"className\":\"is-style-outline\"} -->
		<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link no-border-radius\">Get access to the latest episode right away</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div></div>
		<!-- /wp:group -->",
	)
);
