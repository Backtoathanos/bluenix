<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("layouts/header.php"); ?>
</head>

<body>
  <?php include_once("layouts/navigation.php"); ?>


  <section class="banner_area">
    <div class="container">
      <div class="banner_inner_text">
        <h2>Services</h2>
        <p>See what we do best</p>
      </div>
    </div>
  </section>


  <section class="service_feature">
    <div class="container">
      <div class="row feature_inner">
        <div class="col-lg-4 col-sm-6">
          <div class="feature_item">
            <div class="f_icon">
              <img src="img/icon/f-icon-1.png" alt>
            </div>
            <h4>Brand Identity</h4>
            <p>Developing a strong brand identity is essential for any business, including a web development company. Your brand identity is the visual and conceptual...</p>
            <a class="more_btn" href="javascript:void(0)">Read More</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="feature_item">
            <div class="f_icon">
              <img src="img/icon/f-icon-2.png" alt>
            </div>
            <h4>Online Marketing</h4>
            <p>Online marketing, also known as digital marketing, is a crucial aspect of promoting your web development services and reaching a wider audience in the digital...</p>
            <a class="more_btn" href="javascript:void(0)">Read More</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="feature_item">
            <div class="f_icon">
              <img src="img/icon/f-icon-3.png" alt>
            </div>
            <h4>Social Media</h4>
            <p>Social media is a powerful tool for promoting your web development services, building brand awareness, and engaging with your audience. </p>
            <a class="more_btn" href="javascript:void(0)">Read More</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="feature_item">
            <div class="f_icon">
              <img src="img/icon/f-icon-4.png" alt>
            </div>
            <h4>Video Support</h4>
            <p>Creating a video to showcase your web development services on your website can be a powerful way to engage visitors and convey your company's message. </p>
            <a class="more_btn" href="javascript:void(0)">Read More</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="feature_item">
            <div class="f_icon">
              <img src="img/icon/f-icon-5.png" alt>
            </div>
            <h4>Fast Support</h4>
            <p>If you're seeking fast and efficient support for your web development services website, it's crucial to have a streamlined system in place. </p>
            <a class="more_btn" href="javascript:void(0)">Read More</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="feature_item">
            <div class="f_icon">
              <img src="img/icon/f-icon-6.png" alt>
            </div>
            <h4>Download test</h4>
            <p>Clearly define the purpose of the download test. Is it an assessment, a resource, a tool, or something else? Knowing the purpose will guide the content and format. </p>
            <a class="more_btn" href="javascript:void(0)">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="circle_chart_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="circle_progress circular style-polygon" data-percentage="75" data-thickness="3"
            data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
            <div class="circle_progress_inner">
              <strong></strong>
              <span class="percentage"></span>
              <h4>Hard work</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="circle_progress circular style-polygon" data-percentage="83" data-thickness="3"
            data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
            <div class="circle_progress_inner">
              <strong></strong>
              <span class="percentage"></span>
              <h4>Creativity</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="circle_progress circular style-polygon" data-percentage="25" data-thickness="3"
            data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
            <div class="circle_progress_inner">
              <strong></strong>
              <span class="percentage"></span>
              <h4>Good luck</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="circle_progress circular style-polygon" data-percentage="95" data-thickness="3"
            data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
            <div class="circle_progress_inner">
              <strong></strong>
              <span class="percentage"></span>
              <h4>Development</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="service_solution_area p_100">
    <div class="container">
      <div class="row s_solution_inner">
        <div class="col-lg-6">
          <div class="s_solution_item">
            <div class="l_title">
              <img src="img/icon/title-icon.png" alt>
              <h6>Discover the features</h6>
              <h2>Simple solutions for complicated times</h2>
            </div>
            <p>When faced with complicated or overwhelming situations, it's often beneficial to simplify your approach. Here are some simple solutions for managing complicated times:</p>
            <div id="accordion" role="tablist" class="solution_collaps">
              <?php 
                $servicearrayhead=array(
                  'Prioritize and Focus',
                  'Break It Down',
                  'Time Management',
                  'Delegate',
                  'Simplify Goals',
                  'Positive Mindset',
                  'Effective Communication',
                  'Self-Care',
                  'Learn to Say No'
                );
                $servicearraymain=array(
                  "Identify the most critical tasks or issues that need attention. Focus on addressing those first before moving on to less urgent matters. This helps prevent feeling overwhelmed.",
                  "Divide complex problems into smaller, more manageable tasks. Tackling one step at a time can make the overall challenge seem less daunting.",
                  "Use time management techniques such as the Pomodoro Technique (working in focused, timed intervals) to maintain productivity without feeling overwhelmed by the enormity of tasks.",
                  "If possible, delegate tasks to others. Sharing the workload can ease the burden and allow everyone to contribute their strengths.",
                  "Narrow down your goals to the most essential ones. This helps in maintaining clarity and prevents spreading yourself too thin.",
                  "Adopt a positive mindset and focus on solutions rather than dwelling on problems. This can help reduce stress and encourage a proactive approach.",
                  "Clearly communicate your challenges and needs to others. Effective communication fosters understanding and can lead to collaborative problem-solving.",
                  "Take care of your physical and mental well-being. Ensure you're getting enough rest, exercise, and moments of relaxation to recharge.",
                  "Recognize your limits and don't be afraid to decline additional responsibilities if it contributes to your feeling overwhelmed."
                );
                for($i=0;$i<count($servicearrayhead);$i++){
                  $code=str_replace(' ', '', $servicearrayhead[$i]);
                  if($i!=0){
                    echo '
                      <div class="card">
                        <div class="card-header" role="tab" id="heading'.$code.'">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapse'.$code.'" aria-expanded="false"
                              aria-controls="collapse'.$code.'">
                              '.$servicearrayhead[$i].'
                              <i class="minus">-</i>
                              <i class="plus">+</i>
                            </a>
                          </h5>
                        </div>
                        <div id="collapse'.$code.'" class="collapse" role="tabpanel" aria-labelledby="heading'.$code.'"
                          data-parent="#accordion">
                          <div class="card-body">
                            <p>'.$servicearraymain[$i].'</p>
                          </div>
                        </div>
                      </div>
                    ';
                  }else{
                    echo '
                      <div class="card">
                        <div class="card-header" role="tab" id="heading'.$code.'">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapse'.$code.'" aria-expanded="true" aria-controls="collapseOne">
                              '.$servicearrayhead[$i].'
                              <i class="minus">-</i>
                              <i class="plus">+</i>
                            </a>
                          </h5>
                        </div>
                        <div id="collapse'.$code.'" class="collapse show" role="tabpanel" aria-labelledby="heading'.$code.'"
                          data-parent="#accordion">
                          <div class="card-body">
                            <p>'.$servicearraymain[$i].'</p>
                          </div>
                        </div>
                      </div>
                    ';
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include_once("layouts/footer.php"); ?>
</body>

</html>