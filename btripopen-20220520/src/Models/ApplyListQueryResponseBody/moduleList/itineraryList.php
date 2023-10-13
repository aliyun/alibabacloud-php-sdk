<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryResponseBody\moduleList;

use AlibabaCloud\Tea\Model;

class itineraryList extends Model
{
    /**
     * @var string
     */
    public $arrCity;

    /**
     * @example 2018-09-19T14:03Z
     *
     * @var string
     */
    public $arrDate;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @example 2018-09-19T14:03Z
     *
     * @var string
     */
    public $depDate;

    /**
     * @var string
     */
    public $invoiceName;

    /**
     * @example abcd
     *
     * @var string
     */
    public $itineraryId;

    /**
     * @example xm1
     *
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
    public $thirdpartItineraryId;

    /**
     * @example 0
     *
     * @var int
     */
    public $trafficType;

    /**
     * @example 1
     *
     * @var int
     */
    public $tripWay;
    protected $_name = [
        'arrCity'              => 'arr_city',
        'arrDate'              => 'arr_date',
        'costCenterName'       => 'cost_center_name',
        'depCity'              => 'dep_city',
        'depDate'              => 'dep_date',
        'invoiceName'          => 'invoice_name',
        'itineraryId'          => 'itinerary_id',
        'projectCode'          => 'project_code',
        'projectTitle'         => 'project_title',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'trafficType'          => 'traffic_type',
        'tripWay'              => 'trip_way',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }
        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
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
        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
        }
        if (null !== $this->trafficType) {
            $res['traffic_type'] = $this->trafficType;
        }
        if (null !== $this->tripWay) {
            $res['trip_way'] = $this->tripWay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itineraryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
        }
        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
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
        if (isset($map['thirdpart_itinerary_id'])) {
            $model->thirdpartItineraryId = $map['thirdpart_itinerary_id'];
        }
        if (isset($map['traffic_type'])) {
            $model->trafficType = $map['traffic_type'];
        }
        if (isset($map['trip_way'])) {
            $model->tripWay = $map['trip_way'];
        }

        return $model;
    }
}
