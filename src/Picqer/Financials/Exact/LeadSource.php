<?php

namespace Picqer\Financials\Exact;

/**
 * Class LeadSource.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=CRMLeadSources
 *
 * @property string $ID Primary key 
 * @property string $Code Code of LeadSource
 * @property string $Description Description of LeadSource 
 */
class LeadSource extends Model
{
    use Query\Findable;    

    protected $fillable = [
        'ID',       
        'Code',
        'Description',
    ];

    protected $url = 'crm/LeadSources';
}
