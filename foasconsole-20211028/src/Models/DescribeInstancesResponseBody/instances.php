<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\haResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\hostAliases;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\resourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\storage;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\tags;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $architectureType;

    /**
     * @var string
     */
    public $askClusterId;

    /**
     * @example PRE
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $clusterStatus;

    /**
     * @var bool
     */
    public $ha;

    /**
     * @var haResourceSpec
     */
    public $haResourceSpec;

    /**
     * @var string[]
     */
    public $haVSwitchIds;

    /**
     * @var string
     */
    public $haZoneId;

    /**
     * @var hostAliases[]
     */
    public $hostAliases;

    /**
     * @example f-cn-zvp2q0zik06
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example vvp1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $monitorType;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $orderState;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @example 1629879567394
     *
     * @var int
     */
    public $resourceCreateTime;

    /**
     * @example 1637337600000
     *
     * @var int
     */
    public $resourceExpiredTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example b3690a1655da47
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @var storage
     */
    public $storage;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 1838996687368452
     *
     * @var string
     */
    public $uid;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @example vpc-2ze9*******nxfmfcdi
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-beijing-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'architectureType'    => 'ArchitectureType',
        'askClusterId'        => 'AskClusterId',
        'chargeType'          => 'ChargeType',
        'clusterStatus'       => 'ClusterStatus',
        'ha'                  => 'Ha',
        'haResourceSpec'      => 'HaResourceSpec',
        'haVSwitchIds'        => 'HaVSwitchIds',
        'haZoneId'            => 'HaZoneId',
        'hostAliases'         => 'HostAliases',
        'instanceId'          => 'InstanceId',
        'instanceName'        => 'InstanceName',
        'monitorType'         => 'MonitorType',
        'orderState'          => 'OrderState',
        'region'              => 'Region',
        'resourceCreateTime'  => 'ResourceCreateTime',
        'resourceExpiredTime' => 'ResourceExpiredTime',
        'resourceGroupId'     => 'ResourceGroupId',
        'resourceId'          => 'ResourceId',
        'resourceSpec'        => 'ResourceSpec',
        'storage'             => 'Storage',
        'tags'                => 'Tags',
        'uid'                 => 'Uid',
        'vSwitchIds'          => 'VSwitchIds',
        'vpcId'               => 'VpcId',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architectureType) {
            $res['ArchitectureType'] = $this->architectureType;
        }
        if (null !== $this->askClusterId) {
            $res['AskClusterId'] = $this->askClusterId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }
        if (null !== $this->ha) {
            $res['Ha'] = $this->ha;
        }
        if (null !== $this->haResourceSpec) {
            $res['HaResourceSpec'] = null !== $this->haResourceSpec ? $this->haResourceSpec->toMap() : null;
        }
        if (null !== $this->haVSwitchIds) {
            $res['HaVSwitchIds'] = $this->haVSwitchIds;
        }
        if (null !== $this->haZoneId) {
            $res['HaZoneId'] = $this->haZoneId;
        }
        if (null !== $this->hostAliases) {
            $res['HostAliases'] = [];
            if (null !== $this->hostAliases && \is_array($this->hostAliases)) {
                $n = 0;
                foreach ($this->hostAliases as $item) {
                    $res['HostAliases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }
        if (null !== $this->orderState) {
            $res['OrderState'] = $this->orderState;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceCreateTime) {
            $res['ResourceCreateTime'] = $this->resourceCreateTime;
        }
        if (null !== $this->resourceExpiredTime) {
            $res['ResourceExpiredTime'] = $this->resourceExpiredTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }
        if (null !== $this->storage) {
            $res['Storage'] = null !== $this->storage ? $this->storage->toMap() : null;
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
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
        }
        if (isset($map['AskClusterId'])) {
            $model->askClusterId = $map['AskClusterId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }
        if (isset($map['Ha'])) {
            $model->ha = $map['Ha'];
        }
        if (isset($map['HaResourceSpec'])) {
            $model->haResourceSpec = haResourceSpec::fromMap($map['HaResourceSpec']);
        }
        if (isset($map['HaVSwitchIds'])) {
            if (!empty($map['HaVSwitchIds'])) {
                $model->haVSwitchIds = $map['HaVSwitchIds'];
            }
        }
        if (isset($map['HaZoneId'])) {
            $model->haZoneId = $map['HaZoneId'];
        }
        if (isset($map['HostAliases'])) {
            if (!empty($map['HostAliases'])) {
                $model->hostAliases = [];
                $n                  = 0;
                foreach ($map['HostAliases'] as $item) {
                    $model->hostAliases[$n++] = null !== $item ? hostAliases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }
        if (isset($map['OrderState'])) {
            $model->orderState = $map['OrderState'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceCreateTime'])) {
            $model->resourceCreateTime = $map['ResourceCreateTime'];
        }
        if (isset($map['ResourceExpiredTime'])) {
            $model->resourceExpiredTime = $map['ResourceExpiredTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }
        if (isset($map['Storage'])) {
            $model->storage = storage::fromMap($map['Storage']);
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
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
