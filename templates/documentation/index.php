<div class="ui container">
    <div class="page-header">
        <h1>Documentation<br><small>This website intends to create a solid documentation for the development the Experiensa App</small></h1>
    </div>
</div>

<br>
<br>
<div class="container">
<div class="ui vertical basic segment">

        <div class="ui grid stackable">
            <div class="three wide column">
                <h2>Purpose</h2>
            </div>
            <div class="thirteen wide column">
                Experiensa is a web/mobile solution that helps travel agencies transform their business culture to adapt to new markets. Experiensa provides travel agencies with the tools and technologies needed to increase business efficiency and customer satisfaction.
            </div>
        </div>
    </div>
</div>
<br>
<br>
<section class="ui red inverted vertical segment 50-padding">
    <div class="container">
        <h2 class="text-center uppercase">Business goals</h2>
        <br>
        <div class="ui four column grid stackable center aligned">
            <div class="column">
                <h4>Increase travel agency efficiency</h4>
                <p>

                </p>
                <a href="#" class="centered ui button basic inverted">More info</a>
            </div>
            <div class="column">
                <h4>Reduce operational costs</h4>
            </div>
            <div class="column">
                <h4>Improve business/customer communication</h4>
            </div>
            <div class="column">
                <h4>Improve customer service</h4>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<div class="container">
    <h2 class="text-center uppercase">App structure</h2>
    <div class="ui blue segments">
        <!-- Travel module ------------------------------------------------------------>
        <?php $query = do_query('Travel Module') ?>
        <?php display_results($query, 'Travel Modules', 'blue'); ?>

        <!-- Common Modules ----------------------------------------------------------->
        <?php $query = do_query('Common Module') ?>
        <?php display_results($query, 'Common Modules', 'green'); ?>

        <!-- Templates ---------------------------------------------------------------->
        <?php $query = do_query('Template') ?>
        <?php display_results($query, 'Templates', 'orange'); ?>

        <!-- Partials ----------------------------------------------------------------->
        <?php $query = do_query('Partial') ?>
        <?php display_results($query, 'Partials', 'red'); ?>

        <!-- Partials ----------------------------------------------------------------->
        <?php $query = do_query('Component') ?>
        <?php display_results($query, 'Web components', 'purple'); ?>
    </div>
</div>
<br>
<br>
