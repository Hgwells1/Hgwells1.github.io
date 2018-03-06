<body background="bgimage.jpg"></body>
<div class="container clearfix">
    <div style="padding-top: 25px; position:relative;">

        <div style="text-align: center;">
            <a href="index.php?store"
               class="button button-3d button-large button-rounded <?php if ($_GET['store'] == "") {
                   echo 'button-green';
               } else {
                   echo 'button-teal';
               } ?>">Standard Ranks</a>
               <a href="index.php?store=one"
               class="button button-3d button-large button-rounded <?php if ($_GET['store'] == "one") {
                   echo 'button-green';
               } else {
                   echo 'button-teal';
               } ?>">Sticky Ranks</a>
            <a href="index.php?store=perks"
               class="button button-3d button-large button-rounded <?php if ($_GET['store'] == "perks") {
                   echo 'button-green';
               } else {
                   echo 'button-teal';
               } ?>">Perks</a>
            <a href="index.php?store=extras"
               class="button button-3d button-large button-rounded <?php if ($_GET['store'] == "extras") {
                   echo 'button-green';
               } else {
                   echo 'button-teal';
               } ?>">Extras</a>
        </div>

        <div class="divider divider-short divider-center"><i class="icon-bolt2"></i></div>

        <?php
        if ($_GET['store'] == "") {
            ?>
            <div class="modal fade rank-comparison" tabindex="-1" role="dialog"  aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-body">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Rank Comparison</h4>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">

                                    <table  class="table table-hover table-comparison nobottommargin">
                                        <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Bronze</th>
                                            <th>Silver</th>
                                            <th>Gold</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Amount of Homes</td>
                                            <td>3</td>
                                            <td>5</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Instant Claimblocks</td>
                                            <td>1000</td>
                                            <td>2500</td>
                                            <td>7500</td>
                                        </tr>
                                        <tr>
                                            <td>Instant Tokens</td>
                                            <td>5000MRP</td>
                                            <td>10000MRP</td>
                                            <td>17500MRP</td>
                                        </tr>
                                        <tr>
                                            <td>Join Full Server</td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Bypass AFK Kicker</td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                            <td>Can send private messages in colour!</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /AFK</td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /hat</td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /workbench</td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /nick (Witout Colour)</td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /anvil</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /getpos</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /nick (With Colour!!)</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /back</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /back (after setting upon a death!)</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /enchantingtable</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /ignore</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /enderchest</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /ping</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>

                                            <td>Command: /clearinventory</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Price (One time)</td>
                                            <td>£9.99</td>
                                            <td>£15.99</td>
                                            <td>£25.99</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing bottommargin clearfix">
                <div class="col-md-6" style="text-align: center; margin-bottom: 50px;">
                    <button class="button button-3d button-rounded button-desc center" data-toggle="modal" data-target=".rank-comparison">
                        See Rank Comparison
                        <span>All the details!</span>
                    </button>
                </div>
                <div class="col-md-6" style="text-align: center; margin-bottom: 50px;">
                    <a href="https://discord.me/modrealms" target="_blank" class="button button-3d button-rounded button-green button-desc center">
                        Need any help?
                        <span>Talk to us on our Discord!</span>
                    </a>
                </div>
                <div class="col-sm-4">

                    <div class="pricing-box">
                        <div class="pricing-title">
                            <h3 style="color:#cd7f32;">Bronze</h3>
                        </div>
                        <div class="pricing-price">
                            <span class="price-unit">&pound;</span>9.99<span class="price-tenure">/one time</span>
                        </div>
<!--                        <div class="pricing-features">
                            <ul>
                                <li>Set a nickname</li>
                                <li><strong>3 Instances</strong> per Modpack</li>
                                <li><strong>5 Members</strong> per Instance</li>
                                <li><strong>Premium</strong> Shard Access</li>
                                <li><strong>2 Reward Crate Keys</strong> /mo</li>
                            </ul>
                        </div>-->
                        <div class="pricing-action">
                            <a href="https://piston-powered.buycraft.net/checkout/packages/add/2610687/add" class="button button-3d button-rounded button-green btn-block">
                                Purchase
                            </a>
                            <!-- <a href="https://piston-powered.buycraft.net/checkout/packages/add/2610687/subscription" class="button button-3d button-rounded button-aqua btn-block">
                                Subscribe -->
                            <!-- </a> -->
                        </div>
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="pricing-box best-price">
                        <div class="pricing-title">
                            <h3 style="color:#FFDF00;">Gold</h3>
                            <span>Best Value</span>
                        </div>
                        <div class="pricing-price">
                            <span class="price-unit">&pound;</span>25.99<span class="price-tenure">/one time</span>
                        </div>
<!--                        <div class="pricing-features">
                            <ul>
                                <li>Set a nickname</li>
                                <li>Heal yourself</li>
                                <li>Feed yourself</li>
                                <li>Free flight</li>
                                <li><strong>10 Instances</strong> per Modpack</li>
                                <li><strong>12 Members</strong> per Instance</li>
                                <li><strong>Premium</strong> Shard Access</li>
                                <li><strong>Private</strong> Shard Access</li>
                                <li><strong>10 Reward Crate Keys</strong> /mo</li>
                            </ul>
                        </div>-->
                        <div class="pricing-action">
                                <a href="https://piston-powered.buycraft.net/checkout/packages/add/2610689/add" class="button button-3d button-rounded button-green btn-block">
                                    Purchase
                                </a>
                                <!-- <a href="https://piston-powered.buycraft.net/checkout/packages/add/2610689/subscription" class="button button-3d button-rounded button-aqua btn-block">
                                    Subscribe
                                </a> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">

                    <div class="pricing-box">
                        <div class="pricing-title">
                            <h3 style="color:#C0C0C0;">Silver</h3>

                        </div>
                        <div class="pricing-price">
                            <span class="price-unit">&pound;</span>15.99<span class="price-tenure">/one time</span>
                        </div>
<!--                        <div class="pricing-features">
                            <ul>
                                <li>Set a nickname</li>
                                <li>Heal yourself</li>
                                <li>Feed yourself</li>
                                <li><strong>5 Instances</strong> per Modpack</li>
                                <li><strong>8 Members</strong> per Instance</li>
                                <li><strong>Premium Shard Access</strong></li>
                                <li><strong>5 Reward Crate Keys</strong> /mo</li>
                            </ul>
                        </div>-->
                        <div class="pricing-action">
                            <a href="https://piston-powered.buycraft.net/checkout/packages/add/2610688/add" class="button button-3d button-rounded button-green btn-block">
                                Purchase
                            </a>
                            <!-- <a href="https://piston-powered.buycraft.net/checkout/packages/add/2610688/subscription" class="button button-3d button-rounded button-aqua btn-block">
                                Subscribe
                            </a> -->
                        </div>
                    </div>

                </div>
            </div>


            <?php
        } else if ($_GET['store'] == "one") {
            ?>
            <!--<h1 style="text-align: center;">Monthly ranks coming soon!</h1> -->
            <div class="modal fade rank-comparison" tabindex="-1" role="dialog"  aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-body">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Rank Comparison</h4>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">

                                    <table class="table table-hover table-comparison nobottommargin">
                                        <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Bronze+</th>
                                            <th>Silver+</th>
                                            <th>Gold+</th>
                                            <th>Ruby+/Sapphire+</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Amount of Homes</td>
                                            <td>5</td>
                                            <td>10</td>
                                            <td>20</td>
                                            <th>50</th>
                                        </tr>
                                        <tr>
                                            <td>Instant Claimblocks</td>
                                            <td>1000</td>
                                            <td>3000</td>
                                            <td>5000</td>
                                            <th>7500</th>
                                        </tr>
                                        <tr>
                                            <td>Monthly Claimblocks</td>
                                            <td>750</td>
                                            <td>2500</td>
                                            <td>4500</td>
                                            <th>10000</th>
                                        </tr>
                                        <tr>
                                            <td>Instant Tokens</td>
                                            <td>4000</td>
                                            <td>12500</td>
                                            <td>22500</td>
                                            <th>40000</th>
                                        </tr>
                                        <tr>
                                            <td>Monthly Tokens</td>
                                            <td>3500</td>
                                            <td>10000</td>
                                            <td>20000</td>
                                            <th>35000</th>
                                        </tr>
                                        <tr>
                                            <td>Can join a full server</td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                            <td>Can type in chat with colours and style!</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>

                                            <td>Can type in private messages with colour!</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /hat</td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /nick [name] (with colour!)</td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /me</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /rocket (super fun!)</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /fly</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /top</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /ping</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /nick (with style fonts!)</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /ignore</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /god</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /feed</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /heal</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /itemset (used to change the name of items!)</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Command: /serverstat</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>

                                            <td>Command: /speed</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>

                                            <td>Command: /suicide</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>

                                            <td>Command: /seen</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>

                                            <td>Command: /tppos (teleport to coords!)</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                            <td>Command: /clearinventory</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                            <td>Gains Access to the ModRealms' After Hours Discord!</td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-remove"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                            <td><i class="icon-ok"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Price (Per Month)</td>
                                            <td>£11.99</td>
                                            <td>£18.99</td>
                                            <td>£28.99</td>
                                            <td>£45.99</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing bottommargin clearfix">
                <div class="col-md-6" style="text-align: center; margin-bottom: 50px;">
                    <button class="button button-3d button-rounded button-desc center" data-toggle="modal" data-target=".rank-comparison">
                        See Rank Comparison
                        <span>All the details!</span>
                    </button>
                </div>
                <div class="col-md-6" style="text-align: center; margin-bottom: 50px;">
                    <a href="faq.php" target="_blank" class="button button-3d button-rounded button-green button-desc center">
                        Frequently Asked Questions
                        <span>Be sure to check here!</span>
                    </a>
                </div>
                <div class="col-sm-4">

                    <div class="pricing-box">
                        <div class="pricing-title">
                            <h3 style="color:#cd7f32;">Bronze+</h3>
                        </div>
                        <div class="pricing-price">
                            <span class="price-unit">&pound;</span>11.99<span class="price-tenure">/per month</span>
                        </div>
<!--                        <div class="pricing-features">
                            <ul>
                                <li>Set a nickname</li>
                                <li><strong>3 Instances</strong> per Modpack</li>
                                <li><strong>5 Members</strong> per Instance</li>
                                <li><strong>Premium</strong> Shard Access</li>
                                <li><strong>2 Reward Crate Keys</strong> /mo</li>
                            </ul>
                        </div>-->
                        <div class="pricing-action">
                        <a class="button button-3d button-rounded button-red btn-block">
                            Temporarily out of stock
                        </a>
                            <!-- <a href="https://piston-powered.buycraft.net/checkout/packages/add/2610687/subscription" class="button button-3d button-rounded button-aqua btn-block">
                                Subscribe -->
                            <!-- </a> -->
                            
                        </div>
                    </div>

                    <div class="pricing-box best-price">
                        <div class="pricing-title">
                            <h3 style="color:#C02942;">Ruby+</h3>
                            <span>Exclusive</span>
                        </div>
                        <div class="pricing-price">
                            <span class="price-unit">&pound;</span>45.99<span class="price-tenure">/per month</span>
                        </div>
<!--                        <div class="pricing-features">
                            <ul>
                                <li>Set a nickname</li>
                                <li>Heal yourself</li>
                                <li>Feed yourself</li>
                                <li>Free flight</li>
                                <li><strong>10 Instances</strong> per Modpack</li>
                                <li><strong>12 Members</strong> per Instance</li>
                                <li><strong>Premium</strong> Shard Access</li>
                                <li><strong>Private</strong> Shard Access</li>
                                <li><strong>10 Reward Crate Keys</strong> /mo</li>
                            </ul>
                        </div>-->
                        <div class="pricing-action">
                        <a class="button button-3d button-rounded button-red btn-block">
                            Temporarily out of stock
                        </a>
                                <!-- <a href="https://piston-powered.buycraft.net/checkout/packages/add/2610689/subscription" class="button button-3d button-rounded button-aqua btn-block">
                                    Subscribe
                                </a> -->
                        </div>
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="pricing-box best-price">
                        <div class="pricing-title">
                            <h3 style="color:#ddc000;">Gold+</h3>
                            <span>Best Value</span>
                        </div>
                        <div class="pricing-price">
                            <span class="price-unit">&pound;</span>28.99<span class="price-tenure">/per month</span>
                        </div>
<!--                        <div class="pricing-features">
                            <ul>
                                <li>Set a nickname</li>
                                <li>Heal yourself</li>
                                <li>Feed yourself</li>
                                <li>Free flight</li>
                                <li><strong>10 Instances</strong> per Modpack</li>
                                <li><strong>12 Members</strong> per Instance</li>
                                <li><strong>Premium</strong> Shard Access</li>
                                <li><strong>Private</strong> Shard Access</li>
                                <li><strong>10 Reward Crate Keys</strong> /mo</li>
                            </ul>
                        </div>-->
                        <div class="pricing-action">
                        <a class="button button-3d button-rounded button-red btn-block">
                            Temporarily out of stock
                        </a>
                                <!-- <a href="https://piston-powered.buycraft.net/checkout/packages/add/2610689/subscription" class="button button-3d button-rounded button-aqua btn-block">
                                    Subscribe
                                </a> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">

                    <div class="pricing-box">
                        <div class="pricing-title">
                            <h3 style="color:#C0C0C0;">Silver+</h3>

                        </div>
                        <div class="pricing-price">
                            <span class="price-unit">&pound;</span>18.99<span class="price-tenure">/per month</span>
                        </div>
<!--                        <div class="pricing-features">
                            <ul>
                                <li>Set a nickname</li>
                                <li>Heal yourself</li>
                                <li>Feed yourself</li>
                                <li><strong>5 Instances</strong> per Modpack</li>
                                <li><strong>8 Members</strong> per Instance</li>
                                <li><strong>Premium Shard Access</strong></li>
                                <li><strong>5 Reward Crate Keys</strong> /mo</li>
                            </ul>
                        </div>-->
                        <div class="pricing-action">
                        <a class="button button-3d button-rounded button-red btn-block">
                            Temporarily out of stock
                        </a>
                            <!-- <a href="https://piston-powered.buycraft.net/checkout/packages/add/2610688/subscription" class="button button-3d button-rounded button-aqua btn-block">
                                Subscribe
                            </a> -->
                        </div>
                    </div>

                    <div class="pricing-box best-price">
                        <div class="pricing-title">
                            <h3 style="color:#00308F;">Sapphire+</h3>
                            <span>Exclusive</span>
                        </div>
                        <div class="pricing-price">
                            <span class="price-unit">&pound;</span>45.99<span class="price-tenure">/per month</span>
                        </div>
<!--                        <div class="pricing-features">
                            <ul>
                                <li>Set a nickname</li>
                                <li>Heal yourself</li>
                                <li>Feed yourself</li>
                                <li>Free flight</li>
                                <li><strong>10 Instances</strong> per Modpack</li>
                                <li><strong>12 Members</strong> per Instance</li>
                                <li><strong>Premium</strong> Shard Access</li>
                                <li><strong>Private</strong> Shard Access</li>
                                <li><strong>10 Reward Crate Keys</strong> /mo</li>
                            </ul>
                        </div>-->
                        <div class="pricing-action">
                        <a class="button button-3d button-rounded button-red btn-block">
                            Temporarily out of stock
                        </a>
                                <!-- <a href="https://piston-powered.buycraft.net/checkout/packages/add/2610689/subscription" class="button button-3d button-rounded button-aqua btn-block">
                                    Subscribe
                                </a> -->
                        </div>
                    </div>

                </div>

                
            </div>


            

            <?php
        } else if ($_GET['store'] == "perks") {
            ?>
            <h1 style="text-align: center;">Coming soon!</h1>
            <!-- perks -->
            <?php
        } else if ($_GET['store'] == "extras") {
            ?>
            <!-- extras -->
            <div class="fancy-title title-dotted-border title-center">
                <h3>Exclusive Crates</h3>
            </div>
            <div class="pricing pricing-4 bottommargin clearfix">

                <div class="pricing-box pricing-minimal">
                    <div class="pricing-title">
                        <h3>5 Keys</h3>
                    </div>
                    <div class="pricing-price">
                        <span class="price-unit">£</span>5<span class="price-tenure"></span>
                    </div>
                    <div class="pricing-action">
                        <a href="https://piston-powered.buycraft.net/checkout/packages/add/2642737/single" class="button button-3d button-rounded button-green btn-block">Purchase</a>
                    </div>
                </div>

                <div class="pricing-box pricing-minimal">
                    <div class="pricing-title">
                        <h3>10 Keys</h3>
                    </div>
                    <div class="pricing-price">
                        <span class="price-unit">£</span>8<span class="price-tenure"></span>
                    </div>
                    <div class="pricing-action">
                        <a href="https://piston-powered.buycraft.net/checkout/packages/add/2642739/single" class="button button-3d button-rounded button-green btn-block">Purchase</a>
                    </div>
                </div>

                <div class="pricing-box pricing-minimal">
                    <div class="pricing-title">
                        <h3>25 Keys</h3>
                    </div>
                    <div class="pricing-price">
                        <span class="price-unit">£</span>18<span class="price-tenure"></span>
                    </div>
                    <div class="pricing-action">
                        <a href="https://piston-powered.buycraft.net/checkout/packages/add/2642740/single" class="button button-3d button-rounded button-green btn-block">Purchase</a>
                    </div>
                </div>

                <div class="pricing-box pricing-minimal">
                    <div class="pricing-title">
                        <h3>50 Keys</h3>
                    </div>
                    <div class="pricing-price">
                        <span class="price-unit">£</span>28<span class="price-tenure"></span>
                    </div>
                    <div class="pricing-action">
                        <a href="https://piston-powered.buycraft.net/checkout/packages/add/2642741/single" class="button button-3d button-rounded button-green btn-block">Purchase</a>
                    </div>
                </div>

            </div>

            <?php
        }
        ?>


    </div>
</div>