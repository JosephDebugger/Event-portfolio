<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/align.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="container-n">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-home"></i> </span>
                        <span class="title">
                            <h2>Pipeline</h2>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-newspaper"></i></span>
                        <span class="title">Post</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-comments"></i></span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-envelope-open-text"></i></span>
                        <span class="title">Mails</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-key"></i></span>
                        <span class="title">change Password</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleManu();"><i class="fas fa-bars"></i> </div>
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Search here">
                        <i class="fas fa-search"></i>
                    </label>
                </div>
                <div class="user">
                    <img src="../assets/images/user.jpg" alt="">
                </div>
            </div>


            <?php require_once 'server.php'; ?>
            <?php if (isset($_SESSION['message'])) : ?>

                <div class="alert">
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                </div>
            <?php endif; ?>


            <div class="formBox">
                <div class="formBorder">
                    <div class="heading-form">Update post</div>
                    <div class="form-body">
                        <form action="server.php" method="POST" enctype="multipart/form-data">
                            <div class="form-field">

                                <input class="input" name="id" id="id" type="hidden" value="<?php echo $id; ?>" name="id">
                            </div>
                            <div class="form-field">
                                <label class="label" for="Heading">Heading</label>
                                <input class="input" name="heading" id="Heading" type="text" value="<?php echo $title; ?>" name="name">
                            </div>

                            <div class="form-field">
                                <label class="label" for="Category">category</label>
                                <select name="category" id="Category" value="<?php echo $category; ?>" name="category">
                                    <option value="politics">Politics</option>
                                    <option value="city corporation">City Corporation</option>
                                    <option value="road Problems">Road Problems</option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="label" for="Priority">priority</label>
                                <select name="priority" id="Priority" value="<?php echo $priority; ?>">
                                    <option value="top">Top</option>
                                    <option value="normal">Normal</option>
                                    <option value="low">low</option>

                                </select>
                            </div>
                            <div class="form-field">
                                <label class="label" for="file">Select a image</label>

                                <input class="input" type="file" id="File" name="image" value="<?php echo $image; ?>">

                            </div>

                            <div class="form-field">
                                <label class="label" for="Description">Description</label>
                                <textarea class="input summernote" id="Description" type="text" name="description" value="<?php echo $description; ?>"></textarea>
                            </div>
                            <div class="form-field">
                                <label class="label" for="Additional">Additional Info</label>
                                <textarea class="input" id="Additional" type="text" name="additional" value="<?php echo $additional; ?>"></textarea>

                            </div>
                            <div class="btn" class="form-field">

                                <?php require_once 'post.php'; ?>
                                <?php if ($update == true) : ?>
                                    <button type="submit" name="update_post" id="Submit">Update</button>
                                <?php else : ?>
                                    <button class="btn" type="submit" name="post_btn" id="Submit">Post</button>
                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="table-box">
                <div class="table-border">
                    <table>
                        <caption> All Posts </caption>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Heading</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Additional info</th>
                            <th>Category</th>
                            <th>Priority</th>
                            <th>Action</th>
                        </tr>

                        <?php
                        include 'config.php';

                        $sql = "SELECT * FROM post ORDER BY id DESC";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>

                                <td><img src="<?php echo  $row['image']; ?>" alt=""></td>
                                <td>
                                    <h4><?php echo $row['title']; ?></h4>
                                </td>
                                <td><?php echo $row['date']; ?> <?php echo $row['time']; ?></td>
                                <td>
                                    <p><?php echo $row['description']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $row['additional_info']; ?></p>
                                </td>
                                <td><?php echo $row['category']; ?></td>
                                <td><?php echo $row['priority']; ?></td>
                                <td><a href="post.php?post_edit=<?php echo $row['id']; ?>" class="btn">Edit</a>
                                    <a href="server.php?post_delete=<?php echo $row['id']; ?>" class="btn">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }

                        ?>
                    </table>
                </div>
            </div>


        </div>
    </div>


    <script>
        function toggleManu() {
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
    </script>



    <!--Summernote js-->
    <script src="../plugins/summernote/summernote.min.js"></script>
    <!-- Select 2 -->
    <script src="../plugins/select2/js/select2.min.js"></script>
    <!-- Jquery filer js -->
    <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

    <!-- page specific js -->
    <script src="assets/pages/jquery.blog-add.init.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>
    <script>
        jQuery(document).ready(function() {

            $('.summernote').summernote({
                height: 240, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
            // Select2
            $(".select2").select2();

            $(".select2-limiting").select2({
                maximumSelectionLength: 2
            });
        });
    </script>
    <script src="../plugins/switchery/switchery.min.js"></script>

    <!--Summernote js-->
    <script src="../plugins/summernote/summernote.min.js"></script>



</body>

</html>