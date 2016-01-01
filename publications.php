<?php
/**
 * Template Name: Publications
 */

get_header(); ?>
<script>
		$(function() {
			$( "#showAll" ).click(function() {
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						$(this).show();
					}); 
				});
				$('#pub-title').text("All Publications");
			});
			$( "#showA" ).click(function() {
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						$(this).show();
					});
				});
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						var bibinfo = $(this).find(".bibinfo");
						if (bibinfo.text().indexOf("Machine Learning/Data Mining Algorithms") == -1) {
							$(this).hide();
						}
					}); 
				});
				$('#pub-title').text("Selected Publications on Machine Learning/Data Mining Algorithms");
			});
			$( "#showEN" ).click(function() {
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						$(this).show();
					});
				});
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						var bibinfo = $(this).find(".bibinfo");
						if (bibinfo.text().indexOf("Classifier Ensembles") == -1) {
							$(this).hide();
						}
					}); 
				});
				$('#pub-title').text("Selected Publications on Classifier Ensembles");
			});
			$( "#showNN" ).click(function() {
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						$(this).show();
					});
				});
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						var bibinfo = $(this).find(".bibinfo");
						if (bibinfo.text().indexOf("Neural Networks/Deep Learning") == -1) {
							$(this).hide();
						}
					}); 
				});
				$('#pub-title').text("Selected Publications on Neural Networks/Deep Learning");
			});
			$( "#showC" ).click(function() {
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						$(this).show();
					});
				});
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						var bibinfo = $(this).find(".bibinfo");
						if (bibinfo.text().indexOf("Clustering / Cluster Ensembles") == -1) {
							$(this).hide();
						}
					}); 
				});
				$('#pub-title').text("Selected Publications on Clustering / Cluster Ensembles");
			});
			$( "#showPR" ).click(function() {
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						$(this).show();
					});
				});
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						var bibinfo = $(this).find(".bibinfo");
						if (bibinfo.text().indexOf("Privacy Aware Data Mining") == -1) {
							$(this).hide();
						}
					}); 
				});
				$('#pub-title').text("Selected Publications on Privacy Aware Data Mining");
			});
			$( "#showP" ).click(function() {
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						$(this).show();
					});
				});
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						var bibinfo = $(this).find(".bibinfo");
						if (bibinfo.text().indexOf("High Performance Computing") == -1) {
							$(this).hide();
						}
					}); 
				});
				$('#pub-title').text("Selected Publications on High Performance Computing");
			});
			$( "#showE" ).click(function() {
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						$(this).show();
					});
				});
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						var bibinfo = $(this).find(".bibinfo");
						if (bibinfo.text().indexOf("Engineering Applications") == -1) {
							$(this).hide();
						}
					}); 
				});
				$('#pub-title').text("Selected Publications on Engineering Applications");
			});
			$( "#showH" ).click(function() {
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						$(this).show();
					});
				});
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						var bibinfo = $(this).find(".bibinfo");
						if (bibinfo.text().indexOf("Health Informatics / Bio-informatics") == -1) {
							$(this).hide();
						}
					}); 
				});
				$('#pub-title').text("Selected Publications on Health Informatics / Bio-informatics");
			});
			$( "#showRS" ).click(function() {
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						$(this).show();
					});
				});
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						var bibinfo = $(this).find(".bibinfo");
						if (bibinfo.text().indexOf("Remote Sensing") == -1) {
							$(this).hide();
						}
					}); 
				});
				$('#pub-title').text("Selected Publications on Remote Sensing");
			});
			$( "#showRA" ).click(function() {
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						$(this).show();
					});
				});
				$('tbody').each(function(i) {
					$('tr').each( function(i){ 
						var bibinfo = $(this).find(".bibinfo");
						if (bibinfo.text().indexOf("Ranking / Recommender Systems") == -1) {
							$(this).hide();
						}
					}); 
				});
				$('#pub-title').text("Selected Publications on Ranking / Recommender Systems");
			});
		});
</script>
<body class='add-nav-padding'>
  <div class="container add-nav-padding">
    <div id="external-pubs">
      <a href="http://scholar.google.com/citations?user=Xnk4W5cAAAAJ&hl=en&oi=ao">
        <div id="scholar">Google Scholar</div>
      </a>
      <a href="http://www.dblp.org/pers/hc/g/Ghosh:Joydeep.html">
        <div id="dblp">DBLP</div>
      </a>
    </div>
    <hr class="featurette-divider" />
    <h3>Selected Publications on Selected Topics:</h3>
		<button type="button" class="btn btn-default btn-sm" id="showAll" style="color:#fff;background-color:#c9302c;margin-bottom:5px;">All Publications</button>
		<div class="btn-group btn-group-sm" style="margin-bottom:5px">
			<button type="button" class="btn btn-default" id="showA">Machine Learning/Data Mining Algorithms</button> 
      <button type="button" class="btn btn-default" id="showC">Clustering / Cluster Ensembles</button>
      <button type="button" class="btn btn-default" id="showEN">Classifier Ensembles</button>
      <button type="button" class="btn btn-default" id="showH">Health Informatics / Bio-informatics</button>
      <button type="button" class="btn btn-default" id="showNN">Neural Networks/Deep Learning</button> 
    </div>
    <div class="btn-group btn-group-sm" style="margin-bottom:5px">
			<button type="button" class="btn btn-default" id="showPR">Privacy Aware Data Mining</button>
      <button type="button" class="btn btn-default" id="showRA">Ranking / Recommender Systems</button>	
      <button type="button" class="btn btn-default" id="showRS">Remote Sensing</button>
      <button type="button" class="btn btn-default" id="showP">High Performance Computing</button>
      <button type="button" class="btn btn-default" id="showE">Engineering Applications</button> 
    </div>
    <h2 id="pub-title">All Publications</h2>
    <table id="pubTable" class="table"></table>
    <?php if (have_posts()) : while (have_posts()): the_post(); ?>
    <pre id="bibtex" style="display: none"><?php echo get_the_content(); ?></pre>
    <script src='<?php echo get_template_directory_uri(); ?>/static/js/bib-list-min.js'></script>
    <script>
      $(document).ready(function() {
        bibtexify('#bibtex', 'pubTable', {visualization: false});
      });
    </script>
    <hr class="featurette-divider" />
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matches your criteria.'); ?></p>
    <?php endif; ?>
  </div>
  <script>
    $(function() {
      $('thead').each(function(i) {
        $('th').each(function(i) {
          if ($(this).text() == 'Type') {
            $(this).hide();
          }
        });
      });
    });
  </script>
</body>
<?php get_footer(); ?>
