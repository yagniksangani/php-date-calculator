jQuery(document).ready(function($) {

    $("#diff_start_date").datepicker({
        numberOfMonths: 1,
        onSelect: function(selected) {
            var dtstart = new Date(selected);
            dtstart.setDate(dtstart.getDate() + 1);
            $("#diff_end_date").datepicker("option", "minDate", dtstart);
        }
    });

    $("#diff_end_date").datepicker({
        numberOfMonths: 1,
        onSelect: function(selected) {
            var dtend = new Date(selected);
            dtend.setDate(dtend.getDate() - 1);
            $("#diff_start_date").datepicker("option", "maxDate", dtend);
        }
    });

    $("#until_certain_date").datepicker({
        numberOfMonths: 1,
        minDate: 1,
    });

    $("#day_certain_date").datepicker({
        numberOfMonths: 1,
    });

    $("#week_certain_date").datepicker({
        numberOfMonths: 1,
    });

    // Find difference between two dates.
    $('#find_diff_btn').click(function(event) {
        event.preventDefault();

        var diff_start_date = $("#diff_start_date").val();
        var diff_end_date = $("#diff_end_date").val();

        if (diff_start_date != '' && diff_end_date != '') {
            date1 = new Date(diff_start_date);
            date2 = new Date(diff_end_date);

            var milli_secs = date1.getTime() - date2.getTime();

            // Convert the milli seconds to Days 
            var days = milli_secs / (1000 * 3600 * 24);
            days = Math.round(Math.abs(days))

            $('.result_date_diff').html(days + ' Days');
        } else {
            alert('Please select start date & end date.');
        }

    });

    // Calculate time from now until certain date.
    $('#calculate_time').click(function(event) {
        event.preventDefault();

        var date_now = $('#until_certain_date').attr('data-now');
        var certain_date = $("#until_certain_date").val();

        date1 = new Date(date_now);
        date2 = new Date(certain_date);

        if (date_now != '' && certain_date != '') {
            var milli_secs = date1.getTime() - date2.getTime();

            // Convert the milli seconds to Days 
            var days = milli_secs / (1000 * 3600 * 24);
            days = Math.round(Math.abs(days))

            $('.result_calculate_time').html(days + ' Days');
        } else {
            alert('Please select certain date.');
        }

    });

    // Find out what day of the week a certain date is.
    $('#find_day_of_week').click(function(event) {
        event.preventDefault();

        var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

        var day_certain_date = $("#day_certain_date").val();
        var date = new Date(day_certain_date);


        if (day_certain_date != '') {
            $('.result_day_name').html(weekday[date.getDay()]);
        } else {
            alert('Please select certain date.');
        }

    });

    // Find out what week of certain date is.
    $('#find_out_week').click(function(event) {
        event.preventDefault();

        var week_certain_date = $("#week_certain_date").val();
        var date = new Date(week_certain_date);

        if (week_certain_date != '') {
            startDate = new Date(date.getFullYear(), 0, 1);
            var days = Math.floor((date - startDate) / (24 * 60 * 60 * 1000));
            var weekNumber = Math.ceil(days / 7);

            $('.result_week_no').html('Week ' + weekNumber);
        } else {
            alert('Please select certain date.');
        }

    });

});