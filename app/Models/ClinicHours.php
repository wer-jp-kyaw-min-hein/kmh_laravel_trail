namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicHours extends Model
{
    protected $fillable = [
        'clinic_id', 'day', 'start_time', 'end_time', 'is_regular_holiday', // Add other fillable attributes as needed
        ];
}