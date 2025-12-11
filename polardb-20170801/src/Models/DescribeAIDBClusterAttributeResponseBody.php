<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterAttributeResponseBody\DBNodes;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterAttributeResponseBody\endpointList;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterAttributeResponseBody\volumes;

class DescribeAIDBClusterAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $aiNodeType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @var DBNodes[]
     */
    public $DBNodes;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $ecsSecurityGroupId;

    /**
     * @var endpointList[]
     */
    public $endpointList;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $internalIp;

    /**
     * @var string
     */
    public $KVCacheInstanceId;

    /**
     * @var string
     */
    public $kubeClusterId;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $maxQPM;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $runType;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var volumes[]
     */
    public $volumes;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'aiNodeType' => 'AiNodeType',
        'creationTime' => 'CreationTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId' => 'DBClusterId',
        'DBClusterStatus' => 'DBClusterStatus',
        'DBNodes' => 'DBNodes',
        'DBVersion' => 'DBVersion',
        'ecsSecurityGroupId' => 'EcsSecurityGroupId',
        'endpointList' => 'EndpointList',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'internalIp' => 'InternalIp',
        'KVCacheInstanceId' => 'KVCacheInstanceId',
        'kubeClusterId' => 'KubeClusterId',
        'lockMode' => 'LockMode',
        'maxQPM' => 'MaxQPM',
        'modelName' => 'ModelName',
        'modelType' => 'ModelType',
        'payType' => 'PayType',
        'publicIp' => 'PublicIp',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'runType' => 'RunType',
        'storageType' => 'StorageType',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'volumes' => 'Volumes',
        'zoneId' => 'ZoneId',
        'zoneIds' => 'ZoneIds',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodes)) {
            Model::validateArray($this->DBNodes);
        }
        if (\is_array($this->endpointList)) {
            Model::validateArray($this->endpointList);
        }
        if (\is_array($this->volumes)) {
            Model::validateArray($this->volumes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiNodeType) {
            $res['AiNodeType'] = $this->aiNodeType;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }

        if (null !== $this->DBNodes) {
            if (\is_array($this->DBNodes)) {
                $res['DBNodes'] = [];
                $n1 = 0;
                foreach ($this->DBNodes as $item1) {
                    $res['DBNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }

        if (null !== $this->ecsSecurityGroupId) {
            $res['EcsSecurityGroupId'] = $this->ecsSecurityGroupId;
        }

        if (null !== $this->endpointList) {
            if (\is_array($this->endpointList)) {
                $res['EndpointList'] = [];
                $n1 = 0;
                foreach ($this->endpointList as $item1) {
                    $res['EndpointList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->internalIp) {
            $res['InternalIp'] = $this->internalIp;
        }

        if (null !== $this->KVCacheInstanceId) {
            $res['KVCacheInstanceId'] = $this->KVCacheInstanceId;
        }

        if (null !== $this->kubeClusterId) {
            $res['KubeClusterId'] = $this->kubeClusterId;
        }

        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }

        if (null !== $this->maxQPM) {
            $res['MaxQPM'] = $this->maxQPM;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->runType) {
            $res['RunType'] = $this->runType;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->volumes) {
            if (\is_array($this->volumes)) {
                $res['Volumes'] = [];
                $n1 = 0;
                foreach ($this->volumes as $item1) {
                    $res['Volumes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
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
        if (isset($map['AiNodeType'])) {
            $model->aiNodeType = $map['AiNodeType'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }

        if (isset($map['DBNodes'])) {
            if (!empty($map['DBNodes'])) {
                $model->DBNodes = [];
                $n1 = 0;
                foreach ($map['DBNodes'] as $item1) {
                    $model->DBNodes[$n1] = DBNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }

        if (isset($map['EcsSecurityGroupId'])) {
            $model->ecsSecurityGroupId = $map['EcsSecurityGroupId'];
        }

        if (isset($map['EndpointList'])) {
            if (!empty($map['EndpointList'])) {
                $model->endpointList = [];
                $n1 = 0;
                foreach ($map['EndpointList'] as $item1) {
                    $model->endpointList[$n1] = endpointList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['InternalIp'])) {
            $model->internalIp = $map['InternalIp'];
        }

        if (isset($map['KVCacheInstanceId'])) {
            $model->KVCacheInstanceId = $map['KVCacheInstanceId'];
        }

        if (isset($map['KubeClusterId'])) {
            $model->kubeClusterId = $map['KubeClusterId'];
        }

        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }

        if (isset($map['MaxQPM'])) {
            $model->maxQPM = $map['MaxQPM'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RunType'])) {
            $model->runType = $map['RunType'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['Volumes'])) {
            if (!empty($map['Volumes'])) {
                $model->volumes = [];
                $n1 = 0;
                foreach ($map['Volumes'] as $item1) {
                    $model->volumes[$n1] = volumes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }

        return $model;
    }
}
