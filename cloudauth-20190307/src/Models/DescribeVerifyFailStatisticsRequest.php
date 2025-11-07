<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class DescribeVerifyFailStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $ageGt;

    /**
     * @var string
     */
    public $api;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var int
     */
    public $startDate;
    protected $_name = [
        'ageGt' => 'AgeGt',
        'api' => 'Api',
        'deviceType' => 'DeviceType',
        'endDate' => 'EndDate',
        'productCode' => 'ProductCode',
        'serviceCode' => 'ServiceCode',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ageGt) {
            $res['AgeGt'] = $this->ageGt;
        }

        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['AgeGt'])) {
            $model->ageGt = $map['AgeGt'];
        }

        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
