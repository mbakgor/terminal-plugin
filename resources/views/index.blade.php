@extends('layouts.librenmsv1')

@section('title', 'terminal-plugin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="col-xs-12">

                    <h2>Terminal Plugin</h2>

                    <div class="alert alert-warning">This Plugin helps you to connect devices via terminal.</div>

                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="/plugins/plugin-terminal#terminals" data-toggle="tab" aria-expanded="true">Device Terminal</a></li>
                        </ul>
                    </div>
                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-body">
                            <div class="tab-content">
                                <!-- start -->
                                <div id="terminals" class="tab-pane fade in active">
                                    <div class="row" style="height: 100%;">
                                        <div class="col-md-4">
                                            <div class="panel panel-default">
                                              <div class="panel-heading">
                                                   <h3 class="panel-title">Terminal</h3>
                                              </div>
                                              <div class="panel-body text-center" style="height: 55vh;">
                                              <form action="{{ route('terminal-plugin.showTerminal') }}" method="POST">
                                                  @csrf
                                                  <div class="form-group">
                                                  <label for="device_id">Select Device:</label>
                                                     <select name="device_id" id="device_id" class="form-control">
                                                       @foreach ($devices as $device)
                                                          <option value="{{ $device->device_id }}">{{ $device->hostname }}</option>
                                                       @endforeach
                                                    </select>
                                                  </div>

                                    <button type="submit" class="btn btn-primary">Connect</button>
                                            </form>             
                                                </div>
                                             </div>
                                         </div>
                                    </div>
                                </div>

                                <div id="terminal"></div>
                                <!-- end -->
                             </div>
                             
                    </div>
                    </div>



      <p>© 2024 Muhammed BAKGOR - ARYA-IT</p>
                </div>

                </div>

             </div>
        </div>

<script type="text/javascript">
$(document).ready(function() {
    $('#device_id').select2();
});
</script>
<script src="{{ asset('mbakgor/export-data/js/xterm.js') }}"></script>
<script>
    const terminal = new Terminal();
    terminal.open(document.getElementById('terminal'));
    
</script>

@endsection