<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $table = 'company_profiles';

    protected $fillable = [
        'company_id',
        'reefer',
        'hazmat',
        'lift_gate',
        '24_hr_dispatch',
        'tsa_certified',
        'on_demand_service',
        'scheduled_routes',
        'distributed_delivery',
        'warehouse_facility',
        'climate_controlled',
        'biohazard_exp',
        'pharma_distribution',
        'international_freight',
        'indirect_aircarrier',
        'gps_fleet_system',
        'uniformed_drivers',
        'interstate_service',
        'whiteglove_service',
        'process_legal_service',
        'car',
        'minivan',
        'suv',
        'cargo_van',
        'sprinter',
        'covered_pickup',
        '16ft_truck',
        '18ft_truck',
        '20ft_truck',
        '22ft_truck',
        '24ft_truck',
        '26ft_truck',
        'flatbed',
        'tractor_trailer',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
