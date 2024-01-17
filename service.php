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
        <p>Check out what we do best</p>
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
            <h4>CMS-Based Web Design</h4>
            <p>A content management system, or CMS for short, is a piece of software that lets users to create and maintain websites without requiring them to know how to code at all or start from scratch. Create, manage, edit, and publish material using an intuitive interface using a content management system (CMS).</p>
            <!-- <a class="more_btn" href="javascript:void(0)">Read More</a> -->
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="feature_item">
            <div class="f_icon">
              <img src="img/icon/f-icon-2.png" alt>
            </div>
            <h4>Search Engine Optimization</h4>
            <p>SEO stands for Search Engine Optimisation, and it is the act of optimising a website's technical setup, content relevancy, and link popularity so that its pages become easily findable, relevant, and popular in response to user search queries, and so rank higher in search engines.</p>
            <!-- <a class="more_btn" href="javascript:void(0)">Read More</a> -->
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="feature_item">
            <div class="f_icon">
              <img src="img/icon/f-icon-3.png" alt>
            </div>
            <h4>Social Media Management</h4>
            <p>The advantages of social media management extend well beyond increasing brand exposure and staying current with the latest online trends. Building more intimate relationships with target consumers at scale requires a strong channel strategy. Social media relationship may increase brand affiliation, trust, and most importantly, loyalty.</p>
            <!-- <a class="more_btn" href="javascript:void(0)">Read More</a> -->
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="feature_item">
            <div class="f_icon">
              <img src="img/icon/f-icon-4.png" alt>
            </div>
            <h4>Printing and Branding</h4>
            <p>Branding and printing services play an important role in shaping a company's visual identity and communicating its values to the outside world. Creating a compelling story that appeals to the target audience is part of this extensive suite of services, which goes beyond simply designing logos.</p>
            <!-- <a class="more_btn" href="javascript:void(0)">Read More</a> -->
          </div>
        </div>
        <!-- <div class="col-lg-4 col-sm-6">
          <div class="feature_item">
            <div class="f_icon">
              <img src="img/icon/f-icon-5.png" alt>
            </div>
            <h4>Photography</h4>
            <p>Photography is a powerful visual medium that captures moments, communicates stories, and adds depth to the visual identity of individuals, businesses, and brands.</p>
            <a class="more_btn" href="javascript:void(0)">Read More</a>
          </div>
        </div> -->
        <!-- <div class="col-lg-4 col-sm-6">
          <div class="feature_item">
            <div class="f_icon">
              <img src="img/icon/f-icon-6.png" alt>
            </div>
            <h4>Download test</h4>
            <p>Clearly define the purpose of the download test. Is it an assessment, a resource, a tool, or something else? Knowing the purpose will guide the content and format. </p>
            <a class="more_btn" href="javascript:void(0)">Read More</a>
          </div>
        </div> -->
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
              <h6>Few words of wisdom</h6>
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