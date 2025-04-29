<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\itinerarySetList\itineraryTravelStandard;

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
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @var string
     */
    public $invoiceName;

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
     * @var string
     */
    public $thirdpartCostCenterId;

    /**
     * @var string
     */
    public $thirdpartInvoiceId;

    /**
     * @var string
     */
    public $thirdpartItineraryId;

    /**
     * @var int
     */
    public $trafficType;
    protected $_name = [
        'arrDate' => 'arr_date',
        'attribute' => 'attribute',
        'cityCodeSet' => 'city_code_set',
        'citySet' => 'city_set',
        'costCenterName' => 'cost_center_name',
        'depDate' => 'dep_date',
        'invoiceName' => 'invoice_name',
        'itineraryId' => 'itinerary_id',
        'itineraryTravelStandard' => 'itinerary_travel_standard',
        'projectCode' => 'project_code',
        'projectTitle' => 'project_title',
        'thirdpartCostCenterId' => 'thirdpart_cost_center_id',
        'thirdpartInvoiceId' => 'thirdpart_invoice_id',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'trafficType' => 'traffic_type',
    ];

    public function validate()
    {
        if (null !== $this->itineraryTravelStandard) {
            $this->itineraryTravelStandard->validate();
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

        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }

        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }

        if (null !== $this->invoiceName) {
            $res['invoice_name'] = $this->invoiceName;
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

        if (null !== $this->thirdpartCostCenterId) {
            $res['thirdpart_cost_center_id'] = $this->thirdpartCostCenterId;
        }

        if (null !== $this->thirdpartInvoiceId) {
            $res['thirdpart_invoice_id'] = $this->thirdpartInvoiceId;
        }

        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
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

        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }

        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }

        if (isset($map['invoice_name'])) {
            $model->invoiceName = $map['invoice_name'];
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

        if (isset($map['thirdpart_cost_center_id'])) {
            $model->thirdpartCostCenterId = $map['thirdpart_cost_center_id'];
        }

        if (isset($map['thirdpart_invoice_id'])) {
            $model->thirdpartInvoiceId = $map['thirdpart_invoice_id'];
        }

        if (isset($map['thirdpart_itinerary_id'])) {
            $model->thirdpartItineraryId = $map['thirdpart_itinerary_id'];
        }

        if (isset($map['traffic_type'])) {
            $model->trafficType = $map['traffic_type'];
        }

        return $model;
    }
}
