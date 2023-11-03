<?php
							if(isset($_POST['submit']))
							{
							$code=$_POST['code']; 
                            $email=$_POST['email'];
                            $phone=$_POST['phone'];
                            $fname=$_POST['fname'];
                            $lname=$_POST['lname'];
                            $cout=$_POST['cout'];
                            $cin=$_POST['cin'];
                             $meal=$_POST['meal'];
                            $title=$_POST['title'];
                           $troom=$_POST['troom'];

                            //check available rooms
                                    $con=mysqli_connect("localhost","root","","hotel");
                                    $check2="SELECT * FROM payment WHERE troom='$troom'";
                                    $rs2 = mysqli_query($con,$check2);
                                    $data2 = mysqli_num_rows($rs2);
							
								// check user 
									$check="SELECT * FROM roombook WHERE email = '$email'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_num_rows($rs);
									if($data > 0) {
										echo "<script type='text/javascript'> alert('User Already in Exists');
										window.location.href='../reservation.php';
										</script>";
										
									}

									elseif ($data2 > 0) {
                                        echo "<script type='text/javascript'> alert('ROOM ALREADY BOOKED');
                                        window.location.href='../reservation.php';
                                        </script>"; 
                                    } else {
										$new ="Not Paid";
						$newUser="INSERT INTO roombook (Title, FName, LName, Email, Phone, TRoom, Meal, cin, cout,stat,code,nodays) VALUES ('$title','$fname','$lname','$email','$phone','$troom','$meal','$cin','$cout','$new', '$code', datediff('$cout','$cin'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent');
											window.location.href='../reservation.php';
											</script>
											
											";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database');
											window.location.href='../reservation.php';
											</script>";
											
										}
									}

						
							}
							
							?>