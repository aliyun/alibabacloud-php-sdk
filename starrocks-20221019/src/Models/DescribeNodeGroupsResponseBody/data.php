<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeNodeGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeNodeGroupsResponseBody\data\nodeInfo;

class data extends Model
{
    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $architecture;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $billingInstanceId;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $componentType;

    /**
     * @var int
     */
    public $cu;

    /**
     * @var bool
     */
    public $defaultGroup;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $diskNumber;

    /**
     * @var int
     */
    public $elasticNodeNumber;

    /**
     * @var bool
     */
    public $enablePublicNetwork;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $httpPort;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $localStorageInstanceType;

    /**
     * @var int
     */
    public $memoryCpuRatio;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $nodeGroupName;

    /**
     * @var nodeInfo[]
     */
    public $nodeInfo;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $publicAddress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $residentNodeNumber;

    /**
     * @var int
     */
    public $runningTime;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storagePerformanceLevel;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var int
     */
    public $targetElasticNodeNumber;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountStatus' => 'AccountStatus',
        'architecture' => 'Architecture',
        'beginTime' => 'BeginTime',
        'billingInstanceId' => 'BillingInstanceId',
        'commodityCode' => 'CommodityCode',
        'componentType' => 'ComponentType',
        'cu' => 'Cu',
        'defaultGroup' => 'DefaultGroup',
        'description' => 'Description',
        'diskNumber' => 'DiskNumber',
        'elasticNodeNumber' => 'ElasticNodeNumber',
        'enablePublicNetwork' => 'EnablePublicNetwork',
        'endpoint' => 'Endpoint',
        'expireTime' => 'ExpireTime',
        'httpPort' => 'HttpPort',
        'instanceId' => 'InstanceId',
        'localStorageInstanceType' => 'LocalStorageInstanceType',
        'memoryCpuRatio' => 'MemoryCpuRatio',
        'nodeGroupId' => 'NodeGroupId',
        'nodeGroupName' => 'NodeGroupName',
        'nodeInfo' => 'NodeInfo',
        'payType' => 'PayType',
        'publicAddress' => 'PublicAddress',
        'regionId' => 'RegionId',
        'residentNodeNumber' => 'ResidentNodeNumber',
        'runningTime' => 'RunningTime',
        'specType' => 'SpecType',
        'status' => 'Status',
        'storagePerformanceLevel' => 'StoragePerformanceLevel',
        'storageSize' => 'StorageSize',
        'targetElasticNodeNumber' => 'TargetElasticNodeNumber',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->nodeInfo)) {
            Model::validateArray($this->nodeInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }

        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->billingInstanceId) {
            $res['BillingInstanceId'] = $this->billingInstanceId;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }

        if (null !== $this->defaultGroup) {
            $res['DefaultGroup'] = $this->defaultGroup;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->diskNumber) {
            $res['DiskNumber'] = $this->diskNumber;
        }

        if (null !== $this->elasticNodeNumber) {
            $res['ElasticNodeNumber'] = $this->elasticNodeNumber;
        }

        if (null !== $this->enablePublicNetwork) {
            $res['EnablePublicNetwork'] = $this->enablePublicNetwork;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->localStorageInstanceType) {
            $res['LocalStorageInstanceType'] = $this->localStorageInstanceType;
        }

        if (null !== $this->memoryCpuRatio) {
            $res['MemoryCpuRatio'] = $this->memoryCpuRatio;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }

        if (null !== $this->nodeInfo) {
            if (\is_array($this->nodeInfo)) {
                $res['NodeInfo'] = [];
                $n1 = 0;
                foreach ($this->nodeInfo as $item1) {
                    $res['NodeInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->publicAddress) {
            $res['PublicAddress'] = $this->publicAddress;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->residentNodeNumber) {
            $res['ResidentNodeNumber'] = $this->residentNodeNumber;
        }

        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }

        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storagePerformanceLevel) {
            $res['StoragePerformanceLevel'] = $this->storagePerformanceLevel;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->targetElasticNodeNumber) {
            $res['TargetElasticNodeNumber'] = $this->targetElasticNodeNumber;
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
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }

        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['BillingInstanceId'])) {
            $model->billingInstanceId = $map['BillingInstanceId'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['DefaultGroup'])) {
            $model->defaultGroup = $map['DefaultGroup'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiskNumber'])) {
            $model->diskNumber = $map['DiskNumber'];
        }

        if (isset($map['ElasticNodeNumber'])) {
            $model->elasticNodeNumber = $map['ElasticNodeNumber'];
        }

        if (isset($map['EnablePublicNetwork'])) {
            $model->enablePublicNetwork = $map['EnablePublicNetwork'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LocalStorageInstanceType'])) {
            $model->localStorageInstanceType = $map['LocalStorageInstanceType'];
        }

        if (isset($map['MemoryCpuRatio'])) {
            $model->memoryCpuRatio = $map['MemoryCpuRatio'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }

        if (isset($map['NodeInfo'])) {
            if (!empty($map['NodeInfo'])) {
                $model->nodeInfo = [];
                $n1 = 0;
                foreach ($map['NodeInfo'] as $item1) {
                    $model->nodeInfo[$n1] = nodeInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['PublicAddress'])) {
            $model->publicAddress = $map['PublicAddress'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResidentNodeNumber'])) {
            $model->residentNodeNumber = $map['ResidentNodeNumber'];
        }

        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }

        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StoragePerformanceLevel'])) {
            $model->storagePerformanceLevel = $map['StoragePerformanceLevel'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['TargetElasticNodeNumber'])) {
            $model->targetElasticNodeNumber = $map['TargetElasticNodeNumber'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
