@extends('layouts.app')

@section('content')
    <section class="leadingBoard">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="heading-board">
                        <p class="headingBoard">Board</p>
                        <span class="rightArrow"> > </span>
                        <p class="headingBoard"> Apple</p>
                        <span class="rightArrow"> > </span>
                        <p class="apple-text">Create proposal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="proposalText">
        <div class="container">
            <div class="row">
                <div class="innerPropText">
                    <div class="col-12 ">
                        <div class="warning-box">
                            <span class="warning-icon"><img src="{{ asset('images/war.png') }}" alt=""></span>
                            <p>You need to have a minimum of 250k AAPL in order to submit a proposal.</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="textProp">
                            <h2>Proposal Title</h2>
                            <textarea placeholder="Tell more about your proposal (optional)"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dateSection">
        <div class="container">
            <div class="innerDate">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="startDate">Start date</label>
                        <input id="startDate" class="form-control" type="date" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="startDate">End date</label>
                        <input id="startDate" class="form-control" type="date" />
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="warning-box warRed">
                            <span class="warning-icon"><img src="{{ asset('images/warRed.png') }}" alt=""></span>
                            <p>You dont have enough balance to create a proposal</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2 mt-3">
                <div class="col-12 propbtn">
                    <button class="cardendBtn">Create Proposal</button>
                </div>
            </div>
        </div>
    </section>
@endsection
