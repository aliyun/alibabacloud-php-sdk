<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponseBody\applyList;

use AlibabaCloud\Tea\Model;

class itineraryList extends Model
{
    /**
     * @var string
     */
    public $arrCity;

    /**
     * @example HGH
     *
     * @var string
     */
    public $arrCityCode;

    /**
     * @example 2021-03-18T20:26Z
     *
     * @var string
     */
    public $arrDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $depCity;

    /**
     * @example HGH
     *
     * @var string
     */
    public $depCityCode;

    /**
     * @example 2021-03-18T20:26Z
     *
     * @var string
     */
    public $depDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $invoiceName;

    /**
     * @example 1
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
     * @example 4
     *
     * @var int
     */
    public $trafficType;
    protected $_name = [
        'arrCity'        => 'arr_city',
        'arrCityCode'    => 'arr_city_code',
        'arrDate'        => 'arr_date',
        'costCenterId'   => 'cost_center_id',
        'costCenterName' => 'cost_center_name',
        'depCity'        => 'dep_city',
        'depCityCode'    => 'dep_city_code',
        'depDate'        => 'dep_date',
        'invoiceId'      => 'invoice_id',
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
        if (null !== $this->arrCity) {
            $res['arr_city'] = $this->arrCity;
        }
        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }
        if (null !== $this->arrDate) {
            $res['arr_date'] = $this->arrDate;
        }
        if (null !== $this->costCenterId) {
            $res['cost_center_id'] = $this->costCenterId;
        }
        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }
        if (null !== $this->depCity) {
            $res['dep_city'] = $this->depCity;
        }
        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }
        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }
        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
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
     * @return itineraryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arr_city'])) {
            $model->arrCity = $map['arr_city'];
        }
        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }
        if (isset($map['arr_date'])) {
            $model->arrDate = $map['arr_date'];
        }
        if (isset($map['cost_center_id'])) {
            $model->costCenterId = $map['cost_center_id'];
        }
        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }
        if (isset($map['dep_city'])) {
            $model->depCity = $map['dep_city'];
        }
        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }
        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }
        if (isset($map['invoice_id'])) {
            $model->invoiceId = $map['invoice_id'];
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
