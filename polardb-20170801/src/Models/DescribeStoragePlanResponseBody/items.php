<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeStoragePlanResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description AliUid
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description 商品代码
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description 结束时间
     *
     * @var string
     */
    public $endTimes;

    /**
     * @description 容量单位
     *
     * @var string
     */
    public $initCapaCityViewUnit;

    /**
     * @description 总量
     *
     * @var string
     */
    public $initCapacityViewValue;

    /**
     * @description 资源实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 周期容量单位
     *
     * @var string
     */
    public $periodCapaCityViewUnit;

    /**
     * @description 周期容量
     *
     * @var string
     */
    public $periodCapacityViewValue;

    /**
     * @description 周期时长
     *
     * @var string
     */
    public $periodTime;

    /**
     * @description 产品Code
     *
     * @var string
     */
    public $prodCode;

    /**
     * @description 购买时间
     *
     * @var string
     */
    public $purchaseTimes;

    /**
     * @description 开始时间
     *
     * @var string
     */
    public $startTimes;

    /**
     * @description 状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 存储包类型
     *
     * @var string
     */
    public $storageType;

    /**
     * @description 资源包类型
     *
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
