<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstancesResponseBody;

use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstancesResponseBody\instanceList\endpoints;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstancesResponseBody\instanceList\tags;
use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @description The commodity code, which is the same as that on the Billing Management page.
     *
     * @example hologram_postpay_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The time when the cluster was created.
     *
     * @example 2022-12-16T02:24:05Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether lakehouse acceleration is enabled.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example true
     *
     * @var string
     */
    public $enableHiveAccess;

    /**
     * @description The list of endpoints.
     *
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @description The time when the cluster expires.
     *
     * @example 2023-05-04T16:00:00.000Z
     *
     * @var string
     */
    public $expirationTime;

    /**
     * @description The billing method of the instance. Valid values:
     *
     * Valid values:
     *
     *   PostPaid
     *
     * .
     *
     *   PrePaid
     *
     * .
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance ID.
     *
     * @example hgpostcn-cn-aaab9ad2d8fb
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example test_instance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The status of the instance.
     *
     * Valid values:
     *
     *   Creating
     *
     * <!-- -->
     *
     *   Running
     *
     * <!-- -->
     *
     *   Suspended
     *
     * <!-- -->
     *
     *   Allocating
     *
     * <!-- -->
     * @example Running
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The type of the instance.
     *
     * Valid values:
     *
     *   Follower
     *
     * .
     *
     *   Standard
     *
     * .
     * @example Standard
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ID of the primary instance.
     *
     * @example hgprecn-cn-2r42sqvxm006
     *
     * @var string
     */
    public $leaderInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmvscak73zmby
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The reason for the suspension.
     *
     * @example Manual
     *
     * @var string
     */
    public $suspendReason;

    /**
     * @description The tags that are added to the resource.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The version of the cluster.
     *
     * @example 1.3.37
     *
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'commodityCode'      => 'CommodityCode',
        'creationTime'       => 'CreationTime',
        'enableHiveAccess'   => 'EnableHiveAccess',
        'endpoints'          => 'Endpoints',
        'expirationTime'     => 'ExpirationTime',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'instanceStatus'     => 'InstanceStatus',
        'instanceType'       => 'InstanceType',
        'leaderInstanceId'   => 'LeaderInstanceId',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'suspendReason'      => 'SuspendReason',
        'tags'               => 'Tags',
        'version'            => 'Version',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->enableHiveAccess) {
            $res['EnableHiveAccess'] = $this->enableHiveAccess;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = [];
            if (null !== $this->endpoints && \is_array($this->endpoints)) {
                $n = 0;
                foreach ($this->endpoints as $item) {
                    $res['Endpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->leaderInstanceId) {
            $res['LeaderInstanceId'] = $this->leaderInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->suspendReason) {
            $res['SuspendReason'] = $this->suspendReason;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EnableHiveAccess'])) {
            $model->enableHiveAccess = $map['EnableHiveAccess'];
        }
        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n                = 0;
                foreach ($map['Endpoints'] as $item) {
                    $model->endpoints[$n++] = null !== $item ? endpoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LeaderInstanceId'])) {
            $model->leaderInstanceId = $map['LeaderInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SuspendReason'])) {
            $model->suspendReason = $map['SuspendReason'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
