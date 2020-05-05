<main>
    <section>
        <h2>Le lunghe</h2>
        <div class="cards">
        @foreach ($lunghe as $key => $card)
            <div class="card">
                <img src="{{$card["src"]}}" alt="">
                <div class="card-link">
                    <div class="hover">
                        <h3><a href={{$key}}>{{$card["titolo"]}}</a></h3>
                        <svg class="mk-svg-icon" data-name="mk-li-food" data-cacheid="icon-5eabe39c707e5" style=" height:32px; width: 32px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M321.756 259.142l8.285-8.276c7.234 2.345 14.768 3.525 22.301 3.525 18.331 0 36.647-6.974 50.641-20.968l104.64-104.64-122.066-122.082-104.648 104.64c-19.734 19.741-25.512 48.097-17.45 72.927l-8.3 8.307-190.955-190.978c-38.043 38.042-52.688 124.887-4.882 172.693l107.069 107.047-148.223 148.23c-18.393 18.378-18.385 48.205 0 66.582 9.189 9.197 21.243 13.795 33.29 13.795 12.048 0 24.102-4.598 33.299-13.795l149.373-149.38c2.751 1.165 5.671 1.777 8.614 1.777 5.649 0 11.297-2.146 15.611-6.468l6.583-6.576 161.098 161.106c9.189 9.197 21.243 13.795 33.291 13.795 12.055 0 24.102-4.598 33.298-13.795 18.385-18.392 18.393-48.205 0-66.597l-170.869-170.869zm-36.103-52.68l13.603-13.596-5.939-18.285c-4.729-14.561-.973-30.287 9.787-41.047l82.453-82.446 77.679 77.694-82.445 82.446c-7.596 7.588-17.696 11.772-28.449 11.772-4.292 0-8.537-.675-12.607-1.992l-18.293-5.947-21.88 21.887-17.803-17.795-.1-.092-4.307-4.292 8.301-8.307zm-223.089 267.493c-4.001 4.001-8.676 4.598-11.105 4.598-2.429 0-7.096-.597-11.089-4.598-4.009-4.001-4.607-8.676-4.607-11.097 0-2.437.598-7.097 4.599-11.096l148.223-148.232 22.202 22.194-148.223 148.231zm407.86.46c-3.992 4-8.667 4.598-11.096 4.598s-7.097-.598-11.097-4.598l-183.278-183.285-22.202 22.179-161.235-161.213c-26.11-26.118-25.214-69.663-12.316-101.114l401.231 401.224c4.001 4.016 4.599 8.676 4.599 11.112 0 2.421-.598 7.096-4.606 11.097z"></path></svg>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <section>
                <h2>Le corte</h2>
               <div class="cards">
                @foreach ($corte as $key => $card) 
                <div class="card">
                    <img src="{{$card["src"]}}" alt="">
                    <div class="card-link">
                        <div class="hover">
                            <h3><a href={{$key}}>{{$card["titolo"]}}</a></h3>
                            <svg class="mk-svg-icon" data-name="mk-li-food" data-cacheid="icon-5eabe39c707e5" style=" height:32px; width: 32px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M321.756 259.142l8.285-8.276c7.234 2.345 14.768 3.525 22.301 3.525 18.331 0 36.647-6.974 50.641-20.968l104.64-104.64-122.066-122.082-104.648 104.64c-19.734 19.741-25.512 48.097-17.45 72.927l-8.3 8.307-190.955-190.978c-38.043 38.042-52.688 124.887-4.882 172.693l107.069 107.047-148.223 148.23c-18.393 18.378-18.385 48.205 0 66.582 9.189 9.197 21.243 13.795 33.29 13.795 12.048 0 24.102-4.598 33.299-13.795l149.373-149.38c2.751 1.165 5.671 1.777 8.614 1.777 5.649 0 11.297-2.146 15.611-6.468l6.583-6.576 161.098 161.106c9.189 9.197 21.243 13.795 33.291 13.795 12.055 0 24.102-4.598 33.298-13.795 18.385-18.392 18.393-48.205 0-66.597l-170.869-170.869zm-36.103-52.68l13.603-13.596-5.939-18.285c-4.729-14.561-.973-30.287 9.787-41.047l82.453-82.446 77.679 77.694-82.445 82.446c-7.596 7.588-17.696 11.772-28.449 11.772-4.292 0-8.537-.675-12.607-1.992l-18.293-5.947-21.88 21.887-17.803-17.795-.1-.092-4.307-4.292 8.301-8.307zm-223.089 267.493c-4.001 4.001-8.676 4.598-11.105 4.598-2.429 0-7.096-.597-11.089-4.598-4.009-4.001-4.607-8.676-4.607-11.097 0-2.437.598-7.097 4.599-11.096l148.223-148.232 22.202 22.194-148.223 148.231zm407.86.46c-3.992 4-8.667 4.598-11.096 4.598s-7.097-.598-11.097-4.598l-183.278-183.285-22.202 22.179-161.235-161.213c-26.11-26.118-25.214-69.663-12.316-101.114l401.231 401.224c4.001 4.016 4.599 8.676 4.599 11.112 0 2.421-.598 7.096-4.606 11.097z">
                                </path>
                              </svg>
                        </div>
                    </div>
                </div>
                @endforeach
               </div>
            </section>
    
            <section>
                <h2>Le cortissime</h2>
                <div class="cards">
                    @foreach ($cortissime as $key => $card) 
                    <div class="card">
                        <img src="{{$card["src"]}}" alt="">
                        <div class="card-link">
                            <div class="hover">
                                <h3><a href={{$key}}>{{$card["titolo"]}}</a></h3>
                                <svg class="mk-svg-icon" data-name="mk-li-food" data-cacheid="icon-5eabe39c707e5" style=" height:32px; width: 32px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M321.756 259.142l8.285-8.276c7.234 2.345 14.768 3.525 22.301 3.525 18.331 0 36.647-6.974 50.641-20.968l104.64-104.64-122.066-122.082-104.648 104.64c-19.734 19.741-25.512 48.097-17.45 72.927l-8.3 8.307-190.955-190.978c-38.043 38.042-52.688 124.887-4.882 172.693l107.069 107.047-148.223 148.23c-18.393 18.378-18.385 48.205 0 66.582 9.189 9.197 21.243 13.795 33.29 13.795 12.048 0 24.102-4.598 33.299-13.795l149.373-149.38c2.751 1.165 5.671 1.777 8.614 1.777 5.649 0 11.297-2.146 15.611-6.468l6.583-6.576 161.098 161.106c9.189 9.197 21.243 13.795 33.291 13.795 12.055 0 24.102-4.598 33.298-13.795 18.385-18.392 18.393-48.205 0-66.597l-170.869-170.869zm-36.103-52.68l13.603-13.596-5.939-18.285c-4.729-14.561-.973-30.287 9.787-41.047l82.453-82.446 77.679 77.694-82.445 82.446c-7.596 7.588-17.696 11.772-28.449 11.772-4.292 0-8.537-.675-12.607-1.992l-18.293-5.947-21.88 21.887-17.803-17.795-.1-.092-4.307-4.292 8.301-8.307zm-223.089 267.493c-4.001 4.001-8.676 4.598-11.105 4.598-2.429 0-7.096-.597-11.089-4.598-4.009-4.001-4.607-8.676-4.607-11.097 0-2.437.598-7.097 4.599-11.096l148.223-148.232 22.202 22.194-148.223 148.231zm407.86.46c-3.992 4-8.667 4.598-11.096 4.598s-7.097-.598-11.097-4.598l-183.278-183.285-22.202 22.179-161.235-161.213c-26.11-26.118-25.214-69.663-12.316-101.114l401.231 401.224c4.001 4.016 4.599 8.676 4.599 11.112 0 2.421-.598 7.096-4.606 11.097z">
                                    </path>
                                  </svg>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
</main>  