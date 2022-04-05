@extends('layout.main')


@section('styles')

<link href="{{ asset('css/projectadd.css') }}" rel="stylesheet" type="text/css"  >



@endsection





@section('content')







                            <!-- Page Heading -->

  
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                               
                            </div>

                            <!-- Content Row -->
                            <div class="row">

                                <!-- Pending Requests Card Example -->
                                <div class="col">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col x">
                                                   
																																
																	
																<div class="container">
																<h3> profil utilisateur</h3>
																
																	<hr>
																
																
																	<div class="form-group input-group">
																		
																		<div class="input-group-prepend">
																			<span class="input-group-text"> <i class="fa fa-user"></i> </span>
																		</div>
																		<input disabled id="nom" name="nom" class="form-control" value=" {{ $user->nom}}" type="text">
																	
																	</div>
																	<div class="form-group input-group">
																		<div class="input-group-prepend">
																			<span class="input-group-text"> <i class="fa fa-user"></i> </span>
																		</div>
																		<input disabled id="prenom" name="prenom" class="form-control" value=" {{ $user->prenom}}" type="text">
																	</div>
																	<div class="form-group input-group">
																		<div class="input-group-prepend">
																			<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
																		</div>
																		<input disabled id="email" name="email" class="form-control" value=" {{ $user->email}}" type="email">
																	</div>

																

																	<div class="form-group input-group">
																		<div class="input-group-prepend">
																			<span class="input-group-text"> <i class="fa fa-briefcase"></i> </span>
																		</div>
																		<select disabled class="form-control form-select" name="poste" id="poste">
																			<option value="{{ $user->poste}}" selected  hidden>{{ $user->poste}}</option>
																			<option value="vice president">vice president</option>
																			<option value="manager">manager</option>
																			<option value="employé">employé</option>
																			<option value="admin">admin</option>
																		</select>
																	</div>

																	<div class="form-group input-group">
																		<div class="input-group-prepend">
																			<span class="input-group-text"> <i class="fa fa-building"></i> </span>
																		</div>
																		<select disabled class="form-control form-select" name="division" id="division">
																			<option value="{{ $user->division}}" selected  hidden>{{ $user->division}}</option>	
																			<option value="ep">ep</option>
																			<option value="ped">ped</option>
																			<option value="exp">exp</option>
																			<option value="dp">dp</option>
																			<option value="ast">ast</option>
																			<option value="for">for</option>
																		</select>
																	</div>
																				
                                                                    <a href="/publications/profil/{{$user->id}}"  class="btn btn-warning">   Publications </a>


																

																</div>
																		





                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



@endsection