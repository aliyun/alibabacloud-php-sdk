<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody\DBInstances\mongosList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody\DBInstances\shardList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody\DBInstances\tags;

class DBInstances extends Model
{
    /**
     * @var string
     */
    public $capacityUnit;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $DBInstanceType;

    /**
     * @var string
     */
    public $destroyTime;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $kindCode;

    /**
     * @var string
     */
    public $lastDowngradeTime;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var mongosList[]
     */
    public $mongosList;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replicationFactor;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var shardList[]
     */
    public $shardList;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vpcAuthMode;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'capacityUnit' => 'CapacityUnit',
        'chargeType' => 'ChargeType',
        'creationTime' => 'CreationTime',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'DBInstanceType' => 'DBInstanceType',
        'destroyTime' => 'DestroyTime',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'kindCode' => 'KindCode',
        'lastDowngradeTime' => 'LastDowngradeTime',
        'lockMode' => 'LockMode',
        'mongosList' => 'MongosList',
        'networkType' => 'NetworkType',
        'regionId' => 'RegionId',
        'replicationFactor' => 'ReplicationFactor',
        'resourceGroupId' => 'ResourceGroupId',
        'shardList' => 'ShardList',
        'tags' => 'Tags',
        'vpcAuthMode' => 'VpcAuthMode',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->mongosList)) {
            Model::validateArray($this->mongosList);
        }
        if (\is_array($this->shardList)) {
            Model::validateArray($this->shardList);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityUnit) {
            $res['CapacityUnit'] = $this->capacityUnit;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }

        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }

        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }

        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }

        if (null !== $this->destroyTime) {
            $res['DestroyTime'] = $this->destroyTime;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->kindCode) {
            $res['KindCode'] = $this->kindCode;
        }

        if (null !== $this->lastDowngradeTime) {
            $res['LastDowngradeTime'] = $this->lastDowngradeTime;
        }

        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }

        if (null !== $this->mongosList) {
            if (\is_array($this->mongosList)) {
                $res['MongosList'] = [];
                $n1 = 0;
                foreach ($this->mongosList as $item1) {
                    $res['MongosList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicationFactor) {
            $res['ReplicationFactor'] = $this->replicationFactor;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->shardList) {
            if (\is_array($this->shardList)) {
                $res['ShardList'] = [];
                $n1 = 0;
                foreach ($this->shardList as $item1) {
                    $res['ShardList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->vpcAuthMode) {
            $res['VpcAuthMode'] = $this->vpcAuthMode;
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
        if (isset($map['CapacityUnit'])) {
            $model->capacityUnit = $map['CapacityUnit'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }

        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }

        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }

        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }

        if (isset($map['DestroyTime'])) {
            $model->destroyTime = $map['DestroyTime'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['KindCode'])) {
            $model->kindCode = $map['KindCode'];
        }

        if (isset($map['LastDowngradeTime'])) {
            $model->lastDowngradeTime = $map['LastDowngradeTime'];
        }

        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }

        if (isset($map['MongosList'])) {
            if (!empty($map['MongosList'])) {
                $model->mongosList = [];
                $n1 = 0;
                foreach ($map['MongosList'] as $item1) {
                    $model->mongosList[$n1] = mongosList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReplicationFactor'])) {
            $model->replicationFactor = $map['ReplicationFactor'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ShardList'])) {
            if (!empty($map['ShardList'])) {
                $model->shardList = [];
                $n1 = 0;
                foreach ($map['ShardList'] as $item1) {
                    $model->shardList[$n1] = shardList::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['VpcAuthMode'])) {
            $model->vpcAuthMode = $map['VpcAuthMode'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
