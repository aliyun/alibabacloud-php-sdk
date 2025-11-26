<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceResponseBody\instance\endpoints;
use AlibabaCloud\SDK\Hologram\V20220601\Models\GetInstanceResponseBody\instance\tags;

class instance extends Model
{
    /**
     * @var string
     */
    public $autoRenewal;

    /**
     * @var int
     */
    public $coldStorage;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $computeNodeCount;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $disk;

    /**
     * @var string
     */
    public $enableHiveAccess;

    /**
     * @var bool
     */
    public $enableSSL;

    /**
     * @var bool
     */
    public $enableServerless;

    /**
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @var string
     */
    public $expirationTime;

    /**
     * @var int
     */
    public $gatewayCount;

    /**
     * @var int
     */
    public $gatewayCpu;

    /**
     * @var int
     */
    public $gatewayMemory;

    /**
     * @var string
     */
    public $instanceChargeType;

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
    public $instanceOwner;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $leaderInstanceId;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replicaRole;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $suspendReason;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenewal' => 'AutoRenewal',
        'coldStorage' => 'ColdStorage',
        'commodityCode' => 'CommodityCode',
        'computeNodeCount' => 'ComputeNodeCount',
        'cpu' => 'Cpu',
        'creationTime' => 'CreationTime',
        'disk' => 'Disk',
        'enableHiveAccess' => 'EnableHiveAccess',
        'enableSSL' => 'EnableSSL',
        'enableServerless' => 'EnableServerless',
        'endpoints' => 'Endpoints',
        'expirationTime' => 'ExpirationTime',
        'gatewayCount' => 'GatewayCount',
        'gatewayCpu' => 'GatewayCpu',
        'gatewayMemory' => 'GatewayMemory',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceOwner' => 'InstanceOwner',
        'instanceStatus' => 'InstanceStatus',
        'instanceType' => 'InstanceType',
        'leaderInstanceId' => 'LeaderInstanceId',
        'memory' => 'Memory',
        'regionId' => 'RegionId',
        'replicaRole' => 'ReplicaRole',
        'resourceGroupId' => 'ResourceGroupId',
        'storageType' => 'StorageType',
        'suspendReason' => 'SuspendReason',
        'tags' => 'Tags',
        'version' => 'Version',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }

        if (null !== $this->coldStorage) {
            $res['ColdStorage'] = $this->coldStorage;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->computeNodeCount) {
            $res['ComputeNodeCount'] = $this->computeNodeCount;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }

        if (null !== $this->enableHiveAccess) {
            $res['EnableHiveAccess'] = $this->enableHiveAccess;
        }

        if (null !== $this->enableSSL) {
            $res['EnableSSL'] = $this->enableSSL;
        }

        if (null !== $this->enableServerless) {
            $res['EnableServerless'] = $this->enableServerless;
        }

        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['Endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['Endpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->gatewayCount) {
            $res['GatewayCount'] = $this->gatewayCount;
        }

        if (null !== $this->gatewayCpu) {
            $res['GatewayCpu'] = $this->gatewayCpu;
        }

        if (null !== $this->gatewayMemory) {
            $res['GatewayMemory'] = $this->gatewayMemory;
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

        if (null !== $this->instanceOwner) {
            $res['InstanceOwner'] = $this->instanceOwner;
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

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicaRole) {
            $res['ReplicaRole'] = $this->replicaRole;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->suspendReason) {
            $res['SuspendReason'] = $this->suspendReason;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }

        if (isset($map['ColdStorage'])) {
            $model->coldStorage = $map['ColdStorage'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['ComputeNodeCount'])) {
            $model->computeNodeCount = $map['ComputeNodeCount'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }

        if (isset($map['EnableHiveAccess'])) {
            $model->enableHiveAccess = $map['EnableHiveAccess'];
        }

        if (isset($map['EnableSSL'])) {
            $model->enableSSL = $map['EnableSSL'];
        }

        if (isset($map['EnableServerless'])) {
            $model->enableServerless = $map['EnableServerless'];
        }

        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['Endpoints'] as $item1) {
                    $model->endpoints[$n1] = endpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['GatewayCount'])) {
            $model->gatewayCount = $map['GatewayCount'];
        }

        if (isset($map['GatewayCpu'])) {
            $model->gatewayCpu = $map['GatewayCpu'];
        }

        if (isset($map['GatewayMemory'])) {
            $model->gatewayMemory = $map['GatewayMemory'];
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

        if (isset($map['InstanceOwner'])) {
            $model->instanceOwner = $map['InstanceOwner'];
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

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReplicaRole'])) {
            $model->replicaRole = $map['ReplicaRole'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['SuspendReason'])) {
            $model->suspendReason = $map['SuspendReason'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
