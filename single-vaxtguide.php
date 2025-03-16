<?php get_header(); ?>

<div class="plant-guide-container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            
            <?php if( get_field('subtitle') ): ?>
                <div class="plant-subtitle"><?php echo get_field('subtitle'); ?></div>
            <?php endif; ?>
            
            <div class="plant-properties">
                <table class="plant-properties-table">
                    <tbody>
                        <?php if( get_field('artnamn') ): ?>
                        <tr>
                            <th>📖 Artnamn</th>
                            <td><?php echo get_field('artnamn'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('vaxtfamilj') ): ?>
                        <tr>
                            <th>🌿 Växtfamilj</th>
                            <td><?php echo get_field('vaxtfamilj'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('ursprung') ): ?>
                        <tr>
                            <th>🌍 Ursprung</th>
                            <td><?php echo get_field('ursprung'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('habitat') ): ?>
                        <tr>
                            <th>🏞️ Habitat</th>
                            <td><?php echo get_field('habitat'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('livscykel') ): ?>
                        <tr>
                            <th>🕰️ Livscykel</th>
                            <td><?php echo get_field('livscykel'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('blomningstid') ): ?>
                        <tr>
                            <th>🌸 Blomningstid</th>
                            <td><?php echo get_field('blomningstid'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('ljusbehov') ): ?>
                        <tr>
                            <th>☀️ Ljusbehov</th>
                            <td><?php echo get_field('ljusbehov'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('vattning') ): ?>
                        <tr>
                            <th>💧 Vattning</th>
                            <td><?php echo get_field('vattning'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('vaxtnaring') ): ?>
                        <tr>
                            <th>💩 Växtnäring</th>
                            <td><?php echo get_field('vaxtnaring'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('temperatur') ): ?>
                        <tr>
                            <th>🌡️ Temperatur</th>
                            <td><?php echo get_field('temperatur'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('jordtyp') ): ?>
                        <tr>
                            <th>🟤 Jordtyp</th>
                            <td><?php echo get_field('jordtyp'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('luftfuktighet') ): ?>
                        <tr>
                            <th>💦 Luftfuktighet</th>
                            <td><?php echo get_field('luftfuktighet'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('omplantering') ): ?>
                        <tr>
                            <th>🪴 Omplantering</th>
                            <td><?php echo get_field('omplantering'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('beskarning') ): ?>
                        <tr>
                            <th>✂️ Beskärning</th>
                            <td><?php echo get_field('beskarning'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('toxicitet') ): ?>
                        <tr>
                            <th>☠️ Toxicitet</th>
                            <td><?php echo get_field('toxicitet'); ?></td>
                        </tr>
                        <?php endif; ?>
                        
                        <?php if( get_field('forokningsmetoder') ): ?>
                        <tr>
                            <th>🌱 Förökningsmetoder</th>
                            <td><?php echo get_field('forokningsmetoder'); ?></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </header>

        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
</div>

<?php get_footer(); ?>