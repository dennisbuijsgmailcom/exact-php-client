<?php

namespace Picqer\Financials\Exact;

/**
 * Class LeadPurpose.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMLeadPurposes
 *
 * @property string $ID Primary key 
 * @property string $Code Code of LeadPurpose
 * @property string $Description Description of LeadPurpose 
 */
class LeadPurpose extends Model
{
    use Query\Findable;   

    protected $fillable = [
        'ID',       
        'Code',
        'Description',
    ];

    protected $url = 'crm/LeadPurposes';
}
