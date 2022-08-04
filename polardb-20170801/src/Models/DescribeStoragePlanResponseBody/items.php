<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeStoragePlanResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $endTimes;

    /**
     * @var string
     */
    public $initCapaCityViewUnit;

    /**
     * @var string
     */
    public $initCapacityViewValue;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $periodCapaCityViewUnit;

    /**
     * @var string
     */
    public $periodCapacityViewValue;

    /**
     * @var string
     */
    public $periodTime;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $purchaseTimes;

    /**
     * @var string
     */
    public $startTimes;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'aliUid'                  => 'AliUid',
        'commodityCode'           => 'CommodityCode',
        'endTimes'                => 'EndTimes',
        'initCapaCityViewUnit'    => 'InitCapaCityViewUnit',
        'initCapacityViewValue'   => 'InitCapacityViewValue',
        'instanceId'              => 'InstanceId',
        'periodCapaCityViewUnit'  => 'PeriodCapaCityViewUnit',
        'periodCapacityViewValue' => 'PeriodCapacityViewValue',
        'periodTime'              => 'PeriodTime',
        'prodCode'                => 'ProdCode',
        'purchaseTimes'           => 'PurchaseTimes',
        'startTimes'              => 'StartTimes',
        'status'                  => 'Status',
        'storageType'             => 'StorageType',
        'templateName'            => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->endTimes) {
            $res['EndTimes'] = $this->endTimes;
        }
        if (null !== $this->initCapaCityViewUnit) {
            $res['InitCapaCityViewUnit'] = $this->initCapaCityViewUnit;
        }
        if (null !== $this->initCapacityViewValue) {
            $res['InitCapacityViewValue'] = $this->initCapacityViewValue;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->periodCapaCityViewUnit) {
            $res['PeriodCapaCityViewUnit'] = $this->periodCapaCityViewUnit;
        }
        if (null !== $this->periodCapacityViewValue) {
            $res['PeriodCapacityViewValue'] = $this->periodCapacityViewValue;
        }
        if (null !== $this->periodTime) {
            $res['PeriodTime'] = $this->periodTime;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->purchaseTimes) {
            $res['PurchaseTimes'] = $this->purchaseTimes;
        }
        if (null !== $this->startTimes) {
            $res['StartTimes'] = $this->startTimes;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['EndTimes'])) {
            $model->endTimes = $map['EndTimes'];
        }
        if (isset($map['InitCapaCityViewUnit'])) {
            $model->initCapaCityViewUnit = $map['InitCapaCityViewUnit'];
        }
        if (isset($map['InitCapacityViewValue'])) {
            $model->initCapacityViewValue = $map['InitCapacityViewValue'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PeriodCapaCityViewUnit'])) {
            $model->periodCapaCityViewUnit = $map['PeriodCapaCityViewUnit'];
        }
        if (isset($map['PeriodCapacityViewValue'])) {
            $model->periodCapacityViewValue = $map['PeriodCapacityViewValue'];
        }
        if (isset($map['PeriodTime'])) {
            $model->periodTime = $map['PeriodTime'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['PurchaseTimes'])) {
            $model->purchaseTimes = $map['PurchaseTimes'];
        }
        if (isset($map['StartTimes'])) {
            $model->startTimes = $map['StartTimes'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
