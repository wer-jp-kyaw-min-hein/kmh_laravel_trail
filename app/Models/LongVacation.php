namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LongVacation extends Model
{
    protected $fillable = [
        'clinic_id', 'start_date', 'end_date', 'reason', // Add other fillable attributes as needed
     ];
}