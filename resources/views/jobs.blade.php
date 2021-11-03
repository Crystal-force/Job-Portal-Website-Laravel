@extends('layout.index')
@section('content')

<div id="main-wrapper">
  @include('common.jobs-header')
    <div class="page-wrapper mt-2 jobs-area">
      <div class="container search-area">
          <div class="row d-flex align-item-center">
            <div class="col-md-7 align-self-center ">
                <h3 class="text-themecolor job-title">latest Jobs</h3>
                <div class="search-container">
                  <form action="javascript:;">
                    <input class="search-input" type="text" placeholder="enter job, company name..." name="search">
                    <button type="submit">Search</button>
                  </form>
                </div>
            </div>
            <div class="col-md-5 align-self-center text-right">
                <h2 class="font-second backoffice">Backoffice</h2>
            </div>
          </div>
      </div>
      <div class="container mt-3 companies-area">
          <div class="row col-12">
            <a href="javascript:;">
              <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/3237b1527fdb7d4445f6e3febbb2f759.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title font-primary">Employer name</h4>
                        <p class="card-text jobs-view">sample address</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="jobs-view">$4000</p>
                          <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                        </div>
                    </div>
                </div>
              </div>
            </a>
            <a href="javascript:;">
              <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/1570338915182.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title font-primary">Employer name</h4>
                        <p class="card-text jobs-view">sample address</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="jobs-view">$4000</p>
                          <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                        </div>
                    </div>
                </div>
              </div>
            </a>
            <a href="javascript:;">
              <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/logo-icon-for-business-finance-investment-vector-19173315.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title font-primary">Employer name</h4>
                        <p class="card-text jobs-view">sample address</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="jobs-view">$4000</p>
                          <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                        </div>
                    </div>
                </div>
              </div>
            </a>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                  <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/3237b1527fdb7d4445f6e3febbb2f759.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title font-primary">Employer name</h4>
                      <p class="card-text jobs-view">sample address</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="jobs-view">$4000</p>
                        <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                  <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/3237b1527fdb7d4445f6e3febbb2f759.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title font-primary">Employer name</h4>
                      <p class="card-text jobs-view">sample address</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="jobs-view">$4000</p>
                        <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                  <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/1570338915182.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title font-primary">Employer name</h4>
                      <p class="card-text jobs-view">sample address</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="jobs-view">$4000</p>
                        <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                  <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/logo-icon-for-business-finance-investment-vector-19173315.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title font-primary">Employer name</h4>
                      <p class="card-text jobs-view">sample address</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="jobs-view">$4000</p>
                        <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                  <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/3237b1527fdb7d4445f6e3febbb2f759.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title font-primary">Employer name</h4>
                      <p class="card-text jobs-view">sample address</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="jobs-view">$4000</p>
                        <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                  <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/3237b1527fdb7d4445f6e3febbb2f759.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title font-primary">Employer name</h4>
                      <p class="card-text jobs-view">sample address</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="jobs-view">$4000</p>
                        <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                  <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/1570338915182.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title font-primary">Employer name</h4>
                      <p class="card-text jobs-view">sample address</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="jobs-view">$4000</p>
                        <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                  <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/logo-icon-for-business-finance-investment-vector-19173315.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title font-primary">Employer name</h4>
                      <p class="card-text jobs-view">sample address</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="jobs-view">$4000</p>
                        <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                  <img class="card-img-top img-responsive company-logo" src="../assets/img/companies/3237b1527fdb7d4445f6e3febbb2f759.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h4 class="card-title font-primary">Employer name</h4>
                      <p class="card-text jobs-view">sample address</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="jobs-view">$4000</p>
                        <p> <a href="javascript:void(0)" class="jobs-view"><i class="fas fa-eye mr-1"></i>View</a></p>
                      </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
      <div class="container mt-2 mb-2">
        <div class="row">
            <div class="back-to">
                <h2 class="font-second back-font">Back to <span><a href="javascript:;" class="back-link">backoffice</a></span></h2>
            </div>
        </div>
      </div>
      <div class="footer-banner">
          <div></div>
      </div>
    </div>
</div>
@endsection