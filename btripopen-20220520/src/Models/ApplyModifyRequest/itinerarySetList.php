<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\itinerarySetList\itineraryTravelStandard;

class itinerarySetList extends Model
{
    /**
     * @var string
     */
    public $arrDate;

    /**
     * @var string
     */
    public $attribute;

    /**
     * @var string
     */
    public $cityCodeSet;

    /**
     * @var string
     */
    public $citySet;

    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @var int
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $itineraryId;

    /**
     * @var itineraryTravelStandard
     */
    public $itineraryTravelStandard;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @var string[]
     */
    public $provinceTravelCityAdcodes;

    /**
     * @var string
     */
    public $thirdPartInvoiceId;

    /**
     * @var string
     */
    public $thirdpartCostCenterId;

    /**
     * @var int
     */
    public $trafficType;
    protected $_name = [
        'arrDate' => 'arr_date',
        'attribute' => 'attribute',
        'cityCodeSet' => 'city_code_set',
        'citySet' => 'city_set',
        'costCenterId' => 'cost_center_id',
        'depDate' => 'dep_date',
        'invoiceId' => 'invoice_id',
        'itineraryId' => 'itinerary_id',
        'itineraryTravelStandard' => 'itinerary_travel_standard',
        'projectCode' => 'project_code',
        'projectTitle' => 'project_title',
        'provinceTravelCityAdcodes' => 'province_travel_city_adcodes',
        'thirdPartInvoiceId' => 'third_part_invoice_id',
        'thirdpartCostCenterId' => 'thirdpart_cost_center_id',
        'trafficType' => 'traffic_type',
    ];

    public function validate()
    {
        if (null !== $this->itineraryTravelStandard) {
            $this->itineraryTravelStandard->validate();
        }
        if (\is_array($this->provinceTravelCityAdcodes)) {
            Model::validateArray($this->provinceTravelCityAdcodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }

        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }

        if (null !== $this->cityCodeSet) {
            $res['city_code_set'] = $this->cityCodeSet;
        }

        if (null !== $this->citySet) {
            $res['city_set'] = $this->citySet;
        }

        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }

        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }

        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
        }

        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }

        if (null !== $this->itineraryTravelStandard) {
            $res['itinerary_travel_standard'] = null !== $this->itineraryTravelStandard ? $this->itineraryTravelStandard->toArray($noStream) : $this->itineraryTravelStandard;
        }

        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }

        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }

        if (null !== $this->provinceTravelCityAdcodes) {
            if (\is_array($this->provinceTravelCityAdcodes)) {
                $res['province_travel_city_adcodes'] = [];
                $n1 = 0;
                foreach ($this->provinceTravelCityAdcodes as $item1) {
                    $res['province_travel_city_adcodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->thirdPartInvoiceId) {
            $res['third_part_invoice_id'] = $this->thirdPartInvoiceId;
        }

        if (null !== $this->thirdpartCostCenterId) {
            $res['thirdpart_cost_center_id'] = $this->thirdpartCostCenterId;
        }

        if (null !== $this->trafficType) {
            $res['traffic_type'] = $this->trafficType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
        }

        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }

        if (isset($map['city_code_set'])) {
            $model->cityCodeSet = $map['city_code_set'];
        }

        if (isset($map['city_set'])) {
            $model->citySet = $map['city_set'];
        }

        if (isset($map['cost_center_id'])) {
            $model->costCenterId = $map['cost_center_id'];
        }

        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }

        if (isset($map['invoice_id'])) {
            $model->invoiceId = $map['invoice_id'];
        }

        if (isset($map['itinerary_id'])) {
            $model->itineraryId = $map['itinerary_id'];
        }

        if (isset($map['itinerary_travel_standard'])) {
            $model->itineraryTravelStandard = itineraryTravelStandard::fromMap($map['itinerary_travel_standard']);
        }

        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }

        if (isset($map['project_title'])) {
            $model->projectTitle = $map['project_title'];
        }

        if (isset($map['province_travel_city_adcodes'])) {
            if (!empty($map['province_travel_city_adcodes'])) {
                $model->provinceTravelCityAdcodes = [];
                $n1 = 0;
                foreach ($map['province_travel_city_adcodes'] as $item1) {
                    $model->provinceTravelCityAdcodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['third_part_invoice_id'])) {
            $model->thirdPartInvoiceId = $map['third_part_invoice_id'];
        }

        if (isset($map['thirdpart_cost_center_id'])) {
            $model->thirdpartCostCenterId = $map['thirdpart_cost_center_id'];
        }

        if (isset($map['traffic_type'])) {
            $model->trafficType = $map['traffic_type'];
        }

        return $model;
    }
}
