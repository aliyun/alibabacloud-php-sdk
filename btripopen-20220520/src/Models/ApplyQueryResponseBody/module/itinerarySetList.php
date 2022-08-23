<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class itinerarySetList extends Model
{
    /**
     * @var string
     */
    public $arrDate;

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
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @var int
     */
    public $trafficType;
    protected $_name = [
        'arrDate'        => 'arr_date',
        'cityCodeSet'    => 'city_code_set',
        'citySet'        => 'city_set',
        'costCenterName' => 'cost_center_name',
        'depDate'        => 'dep_date',
        'invoiceName'    => 'invoice_name',
        'itineraryId'    => 'itinerary_id',
        'projectCode'    => 'project_code',
        'projectTitle'   => 'project_title',
        'trafficType'    => 'traffic_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
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
        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }
        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }
        if (null !== $this->trafficType) {
            $res['traffic_type'] = $this->trafficType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itinerarySetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
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
        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }
        if (isset($map['project_title'])) {
            $model->projectTitle = $map['project_title'];
        }
        if (isset($map['traffic_type'])) {
            $model->trafficType = $map['traffic_type'];
        }

        return $model;
    }
}
