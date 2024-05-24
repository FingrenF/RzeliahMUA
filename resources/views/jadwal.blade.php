<!-- resources/views/jadwal.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Kalender Pemesanan</title>
    <link href="{{ asset('fullcalendar/main.css') }}" rel="stylesheet">
    <script src="{{ asset('fullcalendar/main.js') }}"></script>
</head>
<body>
    <div id="calendar"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    @foreach ($pemesanan as $pesanan)
                        {
                            title: '{{ $pesanan->jenisMakeUp }}',
                            start: '{{ $pesanan->tanggalBooking }}',
                            color: 'red', // warna merah untuk tanggal yang sudah dibooking
                        },
                    @endforeach
                ]
            });

            calendar.render();
        });
    </script>
</body>
</html>
