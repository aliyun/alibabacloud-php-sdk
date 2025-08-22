<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserResourcePackageResponseBody\resourcePackageInfos;

use AlibabaCloud\Dara\Model;

class resourcePackageInfo extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $currCapacity;

    /**
     * @var string
     */
    public $currCapacityBaseUnit;

    /**
     * @var string
     */
    public $currCapacityShowUnit;

    /**
     * @var string
     */
    public $currCapacityShowValue;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $initCapacity;

    /**
     * @var string
     */
    public $initCapacityBaseUnit;

    /**
     * @var string
     */
    public $initCapacityShowUnit;

    /**
     * @var string
     */
    public $initCapacityShowValue;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'currCapacity' => 'CurrCapacity',
        'currCapacityBaseUnit' => 'CurrCapacityBaseUnit',
        'currCapacityShowUnit' => 'CurrCapacityShowUnit',
        'currCapacityShowValue' => 'CurrCapacityShowValue',
        'displayName' => 'DisplayName',
        'endTime' => 'EndTime',
        'initCapacity' => 'InitCapacity',
        'initCapacityBaseUnit' => 'InitCapacityBaseUnit',
        'initCapacityShowUnit' => 'InitCapacityShowUnit',
        'initCapacityShowValue' => 'InitCapacityShowValue',
        'instanceId' => 'InstanceId',
        'region' => 'Region',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->currCapacity) {
            $res['CurrCapacity'] = $this->currCapacity;
        }

        if (null !== $this->currCapacityBaseUnit) {
            $res['CurrCapacityBaseUnit'] = $this->currCapacityBaseUnit;
        }

        if (null !== $this->currCapacityShowUnit) {
            $res['CurrCapacityShowUnit'] = $this->currCapacityShowUnit;
        }

        if (null !== $this->currCapacityShowValue) {
            $res['CurrCapacityShowValue'] = $this->currCapacityShowValue;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }

        if (null !== $this->initCapacityBaseUnit) {
            $res['InitCapacityBaseUnit'] = $this->initCapacityBaseUnit;
        }

        if (null !== $this->initCapacityShowUnit) {
            $res['InitCapacityShowUnit'] = $this->initCapacityShowUnit;
        }

        if (null !== $this->initCapacityShowValue) {
            $res['InitCapacityShowValue'] = $this->initCapacityShowValue;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CurrCapacity'])) {
            $model->currCapacity = $map['CurrCapacity'];
        }

        if (isset($map['CurrCapacityBaseUnit'])) {
            $model->currCapacityBaseUnit = $map['CurrCapacityBaseUnit'];
        }

        if (isset($map['CurrCapacityShowUnit'])) {
            $model->currCapacityShowUnit = $map['CurrCapacityShowUnit'];
        }

        if (isset($map['CurrCapacityShowValue'])) {
            $model->currCapacityShowValue = $map['CurrCapacityShowValue'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }

        if (isset($map['InitCapacityBaseUnit'])) {
            $model->initCapacityBaseUnit = $map['InitCapacityBaseUnit'];
        }

        if (isset($map['InitCapacityShowUnit'])) {
            $model->initCapacityShowUnit = $map['InitCapacityShowUnit'];
        }

        if (isset($map['InitCapacityShowValue'])) {
            $model->initCapacityShowValue = $map['InitCapacityShowValue'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
