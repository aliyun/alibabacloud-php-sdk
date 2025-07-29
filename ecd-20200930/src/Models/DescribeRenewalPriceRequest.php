<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeRenewalPriceRequest extends Model
{
    /**
     * @description The instance ID. The value you specify depends on the resource type (ResourceType) you\\"re querying the renewal price for.
     *
     *   When `ResourceType` is set to `Desktop`, you must provide the cloud computer ID as the value of `InstanceId`.
     *   When `ResourceType` is set to `DesktopGroup`, you must provide the share ID as the value of `InstanceId`.
     *   When `ResourceType` is set to `Bandwidth`, you must provide the ID of the premium bandwidth plan as the value of `InstanceId`.
     *
     * @example ecd-6ldllk9zxcpfhs****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance IDs. The value you specify depends on the resource type (ResourceType) you\\"re querying the renewal price for.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The renewal duration. The valid values for this parameter depend on the value of `PeriodUnit`.
     *
     *   If you set `PeriodUnit` to `Month`, set the value of this parameter to 1, 2, 3, or 6.
     *   If you set `PeriodUnit` to `Year`, set the value of this parameter to 1, 2, or 3.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the renewal duration specified by `Period`.
     *
     * Valid values:
     *
     *   Month (default)
     *   Year
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resellerOwnerUid;

    /**
     * @description The resource type.
     *
     * Valid values:
     *
     *   Desktop (default): cloud computers.
     *   Bandwidth: premium bandwidth plans.
     *   DesktopGroup: cloud computer shares.
     *
     * @example Desktop
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceIds' => 'InstanceIds',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'promotionId' => 'PromotionId',
        'regionId' => 'RegionId',
        'resellerOwnerUid' => 'ResellerOwnerUid',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resellerOwnerUid) {
            $res['ResellerOwnerUid'] = $this->resellerOwnerUid;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRenewalPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResellerOwnerUid'])) {
            $model->resellerOwnerUid = $map['ResellerOwnerUid'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
