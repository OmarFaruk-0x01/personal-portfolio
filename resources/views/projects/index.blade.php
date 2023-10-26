@extends('layouts.app')

@section('page_content')
    <section id="portfolio" class="ig jg se">
        <div class="a">
            <div class="mb hd ca">
                <div class="bc df">
                    <div class="vc fa sg gb">
                        <span class="fh _g mh kb ta"> Creative Portfolios </span>
                        <h2 class="dh jh wg wj kk oa">Recent Works</h2>
                        <p class="eh _g lh">There are many variations of passages of Lorem Ipsum available but the majority have
                            suffered alteration in some form.</p>
                    </div>
                </div>
                <div class="bc df">
                    <div class="portfolio-buttons mb hd id kd _a">
                            <button class="sm:font-semibold vg _j kb if pf ck ta td lh active" data-filter="*">All</button>
                        @foreach($categories as $category)
                            <button class="sm:font-semibold vg _j kb if pf ck ta td lh ri vi" data-filter=".{{$category}}">
                                {{$category}}
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="portfolio-container mb kd ga">
                <div class="bc zm/12 df">
                    <div class="items-wrapper mb hd kd ca">
                        @foreach($projects as $project)
                            <div class="bc ek/2 df item {{$project['category']}}">
                                <div class="_a">
                                    <div class="e dj ma od wh vd">
                                        <img src="{{$project['thumbnail']}}" alt="image" class="bc project-image" loading="asdas" />
                                        <div class="d bc qb f g pe xe mb id kd rh b ij ej ai">
                                            <a href="/projects/{{$project['slug']}}" class=" hc ub mb id kd pe kh td">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14 8H8V14H6V8H0V6H6V0H8V6H14V8Z" fill="white" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="mt-6">
                                        <a href="/projects/{{$project['slug']}}" class="fh jh ui zg lb ua"> {{$project['name']}} </a>
                                    </h3>
                                    <p class="eh ug lh">{{$project['description']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


