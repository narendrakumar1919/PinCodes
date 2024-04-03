<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Grid Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <form action="{{ route('pincode.index') }}" method="GET">
            <div class="row ">
                <div class="col-md-3">
                    <label class="form-lable">State</label>
                    <select class="form-control" name="state">
                        <option value="">Select State</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->title }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-lable">District</label>
                    <select class="form-control" name="district">
                        <option value="">Select District</option>
                        @if(isset($districts)){
                        @foreach ($districts as $district)
                        <option value="{{ $district->id }}">{{ $district->title }}</option>
                    @endforeach
                        }@endif
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-lable">Area Office</label>
                    <select class="form-control" name="area">
                        <option value="">Select Area</option>
                        @if(isset($pincodes)){
                        @foreach ($pincodes as $pincode)
                        <option value="{{ $pincode->title }}">{{ $pincode->title }}</option>
                    @endforeach
                        }@endif
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-lable">PinCode</label>
                    <select class="form-control">
                        <option value="1">Option 1</option>
                        @if(isset($area_pincodes)){
                            @foreach ($area_pincodes as $area_pincode)
                            <option value="{{ $pincode->id }}">{{ $area_pincode->zip_code }}</option>
                        @endforeach
                        }@elseif(isset($pincodes)){
                            @foreach ($pincodes as $pincode)
                            <option value="{{ $pincode->id }}">{{ $pincode->zip_code }}</option>
                        @endforeach
                        }@endif
                    </select>
                </div>
 <br><br><br>
                <div class="col-md-3"><button type="submit" class="btn btn-success">Submit</button></div>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
