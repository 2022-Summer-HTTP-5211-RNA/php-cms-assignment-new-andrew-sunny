
<?= view('layout.header') ?>

<section class="w3-padding">
        
    <h2 class="w3-text-blue">About Me!</h2>

    <p>
        Quisque felis ex, pellentesque vel elementum eu, bibendum vel massa. Donec id feugiat 
        erat. Aliquam commodo rutrum velit, vitae vestibulum purus ullamcorper vestibulum. Orci 
        varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
    </p>

    <h3>My Skills</h3>

    <ul>
        <li>PHP</li>
        <li>Laravel</li>
        <li>MySQL</li>
    </ul>

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Projects</h2>

    <?php foreach($projects as $project): ?>

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3><?= $project->title ?></h3>

            </div>
            
            <?php if($project->image): ?>
                <div class="w3-container w3-margin-top">
                    <img src="<?= asset('storage/'.$project->image) ?>" width="200">
                </div>
            <?php endif; ?>

            <div class="w3-container w3-padding">

                <?php if($project->url): ?>
                    View Project: <a href="<?= $project->url ?>"><?= $project->url ?></a>
                <?php endif; ?>

                <p>
                    Posted: <?= $project->created_at->format('M j, Y') ?>
                    <br>
                    Type: <?= $project->type->title ?>
                </p>

                <a href="/project/<?= $project->slug ?>" class="w3-button w3-green">View Project Details</a>

            </div>
        

        </div>

    <?php endforeach; ?>

</section>

<hr>

<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Education</h2>

    <?php foreach($educations as $education): ?>

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3><?= $education->school ?></h3>

            </div>
            

            <div class="w3-container w3-padding">

                <?php if($education->program): ?>
                     Program: <a href="<?= $education->program ?>"><?= $education->program ?></a>
                <?php endif; ?>

                <p>
                    Start Date: <?= $education->start_date ?>
                    <br>
                    End Date: <?= $education->end_date  ?>
                </p>

            </div>

        </div>

    <?php endforeach; ?>

</section>

<hr>
<section class="w3-padding w3-container">

    <h2 class="w3-text-blue">Skill</h2>

    <?php foreach($skills as $skill): ?>

        <div class="w3-card w3-margin">

            <div class="w3-container w3-blue">

                <h3><?= $skill->skill ?></h3>

            </div>
            

            <div class="w3-container w3-padding">

                <?php if($skill->level): ?>
                     Level: <a href="<?= $skill->level ?>"><?= $skill->level ?></a>
                <?php endif; ?>

              

            </div>

        </div>

    <?php endforeach; ?>

</section>
<hr>

<section class="w3-padding">

    <h2 class="w3-text-blue">Contact Me</h2>

    <p>
        Phone: 111.222.3333
        <br>
        Email: <a href="mailto:email@address.com">email@address.com</a>
    </p>

</section>

<?= view('layout.footer') ?>