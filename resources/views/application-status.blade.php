@extends('layout.index')
@section('content')

<div id="main-wrapper">
  @include('common.jobs-header')
    <div class="page-wrapper mt-2 jobs-area">
      <div class="container search-area">
          <div class="row d-flex align-item-center">
            <div class="col-md-7 align-self-center ">
                <h3 class="text-themecolor job-title">application status</h3>
                <div class="search-container">
                  <form action="javascript:;">
                    <input class="search-input search-placeholder" type="text" placeholder="enter application ID..." name="search">
                    <button type="submit">Search</button>
                  </form>
                </div>
            </div>
            <div class="col-md-5 align-self-center text-right">
                <h2 class="font-second backoffice">Backoffice</h2>
            </div>
          </div>
      </div>
      <div class="container mt-2 companies-area">
          <div class="row app-status">
            <div class="card">
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table full-color-table full-custom-table hover-table">
                          <thead class="color-primary ">
                              <tr>
                                  <th class="statu-th">application ID</th>
                                  <th class="statu-th">date submitted</th>
                                  <th class="statu-th">position</th>
                                  <th class="statu-th">status</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td class="font-second status-td">IMA0021</td>
                                  <td class="font-second status-td">19/05/2021</td>
                                  <td class="font-second status-td">-------</td>
                                  <td class="status font-second status-td">approved &nbsp;<span class="label label-success status-icon"></span></td>
                              </tr>
                              <tr>
                                  <td class="font-second status-td">IMA0021</td>
                                  <td class="font-second status-td">19/05/2021</td>
                                  <td class="font-second status-td">-------</td>
                                  <td class="status font-second status-td">declined &nbsp;<span class="label label-danger status-icon"></span></td>
                              </tr>
                              <tr>
                                  <td class="font-second status-td">IMA0021</td>
                                  <td class="font-second status-td">19/05/2021</td>
                                  <td class="font-second status-td">-------</td>
                                  <td class="status font-second status-td">pending &nbsp;<span class="label label-info status-icon"></span></td>
                              </tr>
                              <tr>
                                  <td class="font-second status-td">IMA0021</td>
                                  <td class="font-second status-td">19/05/2021</td>
                                  <td class="font-second status-td">-------</td>
                                  <td class="status font-second status-td">approved &nbsp;<span class="label label-success status-icon"></span></td>
                              </tr>
                              <tr>
                                  <td class="font-second status-td">IMA0021</td>
                                  <td class="font-second status-td">19/05/2021</td>
                                  <td class="font-second status-td">-------</td>
                                  <td class="status font-second status-td">declined &nbsp;<span class="label label-danger status-icon"></span></td>
                              </tr>
                              <tr>
                                  <td class="font-second status-td">IMA0021</td>
                                  <td class="font-second status-td">19/05/2021</td>
                                  <td class="font-second status-td">-------</td>
                                  <td class="status font-second status-td">pending &nbsp;<span class="label label-info status-icon"></span></td>
                              </tr>
                              <tr>
                                  <td class="font-second status-td">IMA0021</td>
                                  <td class="font-second status-td">19/05/2021</td>
                                  <td class="font-second status-td">-------</td>
                                  <td class="status font-second status-td">approved &nbsp;<span class="label label-success status-icon"></span></td>
                              </tr>
                              <tr>
                                  <td class="font-second status-td">IMA0021</td>
                                  <td class="font-second status-td">19/05/2021</td>
                                  <td class="font-second status-td">-------</td>
                                  <td class="status font-second status-td">declined &nbsp;<span class="label label-danger status-icon"></span></td>
                              </tr>
                              <tr>
                                  <td class="font-second status-td">IMA0021</td>
                                  <td class="font-second status-td">19/05/2021</td>
                                  <td class="font-second status-td">-------</td>
                                  <td class="status font-second status-td">pending &nbsp;<span class="label label-info status-icon"></span></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
            </div>
          </div>
      </div>
      <div class="container mt-2 mb-2">
        <div class="row">
            <div class="back-to">
                <h2 class="font-second back-font">Back to <span><a href="{{route('dashboard')}}" class="back-link">backoffice</a></span></h2>
            </div>
        </div>
      </div>
      <div class="footer-banner">
          <div></div>
      </div>
    </div>
</div>
@endsection