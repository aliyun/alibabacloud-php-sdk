<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterState;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterUsedResources;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterUsedStorage;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\elasticResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\haResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\haVSwitchInfo;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\hostAliases;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\ossInfo;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\resourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\storage;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\tags;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\vpcInfo;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\vSwitchInfo;

class instances extends Model
{
    /**
     * @var bool
     */
    public $ansm;

    /**
     * @var string
     */
    public $architectureType;

    /**
     * @var string
     */
    public $askClusterId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var clusterState
     */
    public $clusterState;

    /**
     * @var string
     */
    public $clusterStatus;

    /**
     * @var clusterUsedResources
     */
    public $clusterUsedResources;

    /**
     * @var clusterUsedStorage
     */
    public $clusterUsedStorage;

    /**
     * @var bool
     */
    public $elastic;

    /**
     * @var string
     */
    public $elasticOrderState;

    /**
     * @var elasticResourceSpec
     */
    public $elasticResourceSpec;

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
     * @var haVSwitchInfo[]
     */
    public $haVSwitchInfo;

    /**
     * @var string
     */
    public $haZoneId;

    /**
     * @var hostAliases[]
     */
    public $hostAliases;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $monitorType;

    /**
     * @var string
     */
    public $orderState;

    /**
     * @var ossInfo
     */
    public $ossInfo;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $resourceCreateTime;

    /**
     * @var int
     */
    public $resourceExpiredTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
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
     * @var string
     */
    public $uid;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var vSwitchInfo[]
     */
    public $vSwitchInfo;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var vpcInfo
     */
    public $vpcInfo;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'ansm' => 'Ansm',
        'architectureType' => 'ArchitectureType',
        'askClusterId' => 'AskClusterId',
        'chargeType' => 'ChargeType',
        'clusterState' => 'ClusterState',
        'clusterStatus' => 'ClusterStatus',
        'clusterUsedResources' => 'ClusterUsedResources',
        'clusterUsedStorage' => 'ClusterUsedStorage',
        'elastic' => 'Elastic',
        'elasticOrderState' => 'ElasticOrderState',
        'elasticResourceSpec' => 'ElasticResourceSpec',
        'ha' => 'Ha',
        'haResourceSpec' => 'HaResourceSpec',
        'haVSwitchIds' => 'HaVSwitchIds',
        'haVSwitchInfo' => 'HaVSwitchInfo',
        'haZoneId' => 'HaZoneId',
        'hostAliases' => 'HostAliases',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'monitorType' => 'MonitorType',
        'orderState' => 'OrderState',
        'ossInfo' => 'OssInfo',
        'region' => 'Region',
        'resourceCreateTime' => 'ResourceCreateTime',
        'resourceExpiredTime' => 'ResourceExpiredTime',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId' => 'ResourceId',
        'resourceSpec' => 'ResourceSpec',
        'storage' => 'Storage',
        'tags' => 'Tags',
        'uid' => 'Uid',
        'vSwitchIds' => 'VSwitchIds',
        'vSwitchInfo' => 'VSwitchInfo',
        'vpcId' => 'VpcId',
        'vpcInfo' => 'VpcInfo',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->clusterState) {
            $this->clusterState->validate();
        }
        if (null !== $this->clusterUsedResources) {
            $this->clusterUsedResources->validate();
        }
        if (null !== $this->clusterUsedStorage) {
            $this->clusterUsedStorage->validate();
        }
        if (null !== $this->elasticResourceSpec) {
            $this->elasticResourceSpec->validate();
        }
        if (null !== $this->haResourceSpec) {
            $this->haResourceSpec->validate();
        }
        if (\is_array($this->haVSwitchIds)) {
            Model::validateArray($this->haVSwitchIds);
        }
        if (\is_array($this->haVSwitchInfo)) {
            Model::validateArray($this->haVSwitchInfo);
        }
        if (\is_array($this->hostAliases)) {
            Model::validateArray($this->hostAliases);
        }
        if (null !== $this->ossInfo) {
            $this->ossInfo->validate();
        }
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        if (null !== $this->storage) {
            $this->storage->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        if (\is_array($this->vSwitchInfo)) {
            Model::validateArray($this->vSwitchInfo);
        }
        if (null !== $this->vpcInfo) {
            $this->vpcInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ansm) {
            $res['Ansm'] = $this->ansm;
        }

        if (null !== $this->architectureType) {
            $res['ArchitectureType'] = $this->architectureType;
        }

        if (null !== $this->askClusterId) {
            $res['AskClusterId'] = $this->askClusterId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->clusterState) {
            $res['ClusterState'] = null !== $this->clusterState ? $this->clusterState->toArray($noStream) : $this->clusterState;
        }

        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }

        if (null !== $this->clusterUsedResources) {
            $res['ClusterUsedResources'] = null !== $this->clusterUsedResources ? $this->clusterUsedResources->toArray($noStream) : $this->clusterUsedResources;
        }

        if (null !== $this->clusterUsedStorage) {
            $res['ClusterUsedStorage'] = null !== $this->clusterUsedStorage ? $this->clusterUsedStorage->toArray($noStream) : $this->clusterUsedStorage;
        }

        if (null !== $this->elastic) {
            $res['Elastic'] = $this->elastic;
        }

        if (null !== $this->elasticOrderState) {
            $res['ElasticOrderState'] = $this->elasticOrderState;
        }

        if (null !== $this->elasticResourceSpec) {
            $res['ElasticResourceSpec'] = null !== $this->elasticResourceSpec ? $this->elasticResourceSpec->toArray($noStream) : $this->elasticResourceSpec;
        }

        if (null !== $this->ha) {
            $res['Ha'] = $this->ha;
        }

        if (null !== $this->haResourceSpec) {
            $res['HaResourceSpec'] = null !== $this->haResourceSpec ? $this->haResourceSpec->toArray($noStream) : $this->haResourceSpec;
        }

        if (null !== $this->haVSwitchIds) {
            if (\is_array($this->haVSwitchIds)) {
                $res['HaVSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->haVSwitchIds as $item1) {
                    $res['HaVSwitchIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->haVSwitchInfo) {
            if (\is_array($this->haVSwitchInfo)) {
                $res['HaVSwitchInfo'] = [];
                $n1 = 0;
                foreach ($this->haVSwitchInfo as $item1) {
                    $res['HaVSwitchInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->haZoneId) {
            $res['HaZoneId'] = $this->haZoneId;
        }

        if (null !== $this->hostAliases) {
            if (\is_array($this->hostAliases)) {
                $res['HostAliases'] = [];
                $n1 = 0;
                foreach ($this->hostAliases as $item1) {
                    $res['HostAliases'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->ossInfo) {
            $res['OssInfo'] = null !== $this->ossInfo ? $this->ossInfo->toArray($noStream) : $this->ossInfo;
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
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
        }

        if (null !== $this->storage) {
            $res['Storage'] = null !== $this->storage ? $this->storage->toArray($noStream) : $this->storage;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vSwitchInfo) {
            if (\is_array($this->vSwitchInfo)) {
                $res['VSwitchInfo'] = [];
                $n1 = 0;
                foreach ($this->vSwitchInfo as $item1) {
                    $res['VSwitchInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcInfo) {
            $res['VpcInfo'] = null !== $this->vpcInfo ? $this->vpcInfo->toArray($noStream) : $this->vpcInfo;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Ansm'])) {
            $model->ansm = $map['Ansm'];
        }

        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
        }

        if (isset($map['AskClusterId'])) {
            $model->askClusterId = $map['AskClusterId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['ClusterState'])) {
            $model->clusterState = clusterState::fromMap($map['ClusterState']);
        }

        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }

        if (isset($map['ClusterUsedResources'])) {
            $model->clusterUsedResources = clusterUsedResources::fromMap($map['ClusterUsedResources']);
        }

        if (isset($map['ClusterUsedStorage'])) {
            $model->clusterUsedStorage = clusterUsedStorage::fromMap($map['ClusterUsedStorage']);
        }

        if (isset($map['Elastic'])) {
            $model->elastic = $map['Elastic'];
        }

        if (isset($map['ElasticOrderState'])) {
            $model->elasticOrderState = $map['ElasticOrderState'];
        }

        if (isset($map['ElasticResourceSpec'])) {
            $model->elasticResourceSpec = elasticResourceSpec::fromMap($map['ElasticResourceSpec']);
        }

        if (isset($map['Ha'])) {
            $model->ha = $map['Ha'];
        }

        if (isset($map['HaResourceSpec'])) {
            $model->haResourceSpec = haResourceSpec::fromMap($map['HaResourceSpec']);
        }

        if (isset($map['HaVSwitchIds'])) {
            if (!empty($map['HaVSwitchIds'])) {
                $model->haVSwitchIds = [];
                $n1 = 0;
                foreach ($map['HaVSwitchIds'] as $item1) {
                    $model->haVSwitchIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['HaVSwitchInfo'])) {
            if (!empty($map['HaVSwitchInfo'])) {
                $model->haVSwitchInfo = [];
                $n1 = 0;
                foreach ($map['HaVSwitchInfo'] as $item1) {
                    $model->haVSwitchInfo[$n1++] = haVSwitchInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['HaZoneId'])) {
            $model->haZoneId = $map['HaZoneId'];
        }

        if (isset($map['HostAliases'])) {
            if (!empty($map['HostAliases'])) {
                $model->hostAliases = [];
                $n1 = 0;
                foreach ($map['HostAliases'] as $item1) {
                    $model->hostAliases[$n1++] = hostAliases::fromMap($item1);
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

        if (isset($map['OssInfo'])) {
            $model->ossInfo = ossInfo::fromMap($map['OssInfo']);
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VSwitchInfo'])) {
            if (!empty($map['VSwitchInfo'])) {
                $model->vSwitchInfo = [];
                $n1 = 0;
                foreach ($map['VSwitchInfo'] as $item1) {
                    $model->vSwitchInfo[$n1++] = vSwitchInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcInfo'])) {
            $model->vpcInfo = vpcInfo::fromMap($map['VpcInfo']);
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
