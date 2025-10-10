<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponseBody\DBClusterList;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponseBody\multiZone;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponseBody\tags;

class DescribeDBInstanceAttributeResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $canUpgradeVersions;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var DBClusterList[]
     */
    public $DBClusterList;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $deployScheme;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineMinorVersion;

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
    public $gmtModified;

    /**
     * @var int
     */
    public $lockMode;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $maintainEndtime;

    /**
     * @var string
     */
    public $maintainStarttime;

    /**
     * @var multiZone[]
     */
    public $multiZone;

    /**
     * @var int
     */
    public $objectStoreSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $resourceCpu;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $secGroupConnValid;

    /**
     * @var bool
     */
    public $serverless;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'canUpgradeVersions' => 'CanUpgradeVersions',
        'chargeType' => 'ChargeType',
        'createTime' => 'CreateTime',
        'DBClusterList' => 'DBClusterList',
        'DBInstanceId' => 'DBInstanceId',
        'deployScheme' => 'DeployScheme',
        'description' => 'Description',
        'engine' => 'Engine',
        'engineMinorVersion' => 'EngineMinorVersion',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'gmtModified' => 'GmtModified',
        'lockMode' => 'LockMode',
        'lockReason' => 'LockReason',
        'maintainEndtime' => 'MaintainEndtime',
        'maintainStarttime' => 'MaintainStarttime',
        'multiZone' => 'MultiZone',
        'objectStoreSize' => 'ObjectStoreSize',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'resourceCpu' => 'ResourceCpu',
        'resourceGroupId' => 'ResourceGroupId',
        'secGroupConnValid' => 'SecGroupConnValid',
        'serverless' => 'Serverless',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'subDomain' => 'SubDomain',
        'tags' => 'Tags',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->canUpgradeVersions)) {
            Model::validateArray($this->canUpgradeVersions);
        }
        if (\is_array($this->DBClusterList)) {
            Model::validateArray($this->DBClusterList);
        }
        if (\is_array($this->multiZone)) {
            Model::validateArray($this->multiZone);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canUpgradeVersions) {
            if (\is_array($this->canUpgradeVersions)) {
                $res['CanUpgradeVersions'] = [];
                $n1 = 0;
                foreach ($this->canUpgradeVersions as $item1) {
                    $res['CanUpgradeVersions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DBClusterList) {
            if (\is_array($this->DBClusterList)) {
                $res['DBClusterList'] = [];
                $n1 = 0;
                foreach ($this->DBClusterList as $item1) {
                    $res['DBClusterList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->deployScheme) {
            $res['DeployScheme'] = $this->deployScheme;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineMinorVersion) {
            $res['EngineMinorVersion'] = $this->engineMinorVersion;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }

        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }

        if (null !== $this->maintainEndtime) {
            $res['MaintainEndtime'] = $this->maintainEndtime;
        }

        if (null !== $this->maintainStarttime) {
            $res['MaintainStarttime'] = $this->maintainStarttime;
        }

        if (null !== $this->multiZone) {
            if (\is_array($this->multiZone)) {
                $res['MultiZone'] = [];
                $n1 = 0;
                foreach ($this->multiZone as $item1) {
                    $res['MultiZone'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->objectStoreSize) {
            $res['ObjectStoreSize'] = $this->objectStoreSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceCpu) {
            $res['ResourceCpu'] = $this->resourceCpu;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->secGroupConnValid) {
            $res['SecGroupConnValid'] = $this->secGroupConnValid;
        }

        if (null !== $this->serverless) {
            $res['Serverless'] = $this->serverless;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
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

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['CanUpgradeVersions'])) {
            if (!empty($map['CanUpgradeVersions'])) {
                $model->canUpgradeVersions = [];
                $n1 = 0;
                foreach ($map['CanUpgradeVersions'] as $item1) {
                    $model->canUpgradeVersions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DBClusterList'])) {
            if (!empty($map['DBClusterList'])) {
                $model->DBClusterList = [];
                $n1 = 0;
                foreach ($map['DBClusterList'] as $item1) {
                    $model->DBClusterList[$n1] = DBClusterList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DeployScheme'])) {
            $model->deployScheme = $map['DeployScheme'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineMinorVersion'])) {
            $model->engineMinorVersion = $map['EngineMinorVersion'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }

        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }

        if (isset($map['MaintainEndtime'])) {
            $model->maintainEndtime = $map['MaintainEndtime'];
        }

        if (isset($map['MaintainStarttime'])) {
            $model->maintainStarttime = $map['MaintainStarttime'];
        }

        if (isset($map['MultiZone'])) {
            if (!empty($map['MultiZone'])) {
                $model->multiZone = [];
                $n1 = 0;
                foreach ($map['MultiZone'] as $item1) {
                    $model->multiZone[$n1] = multiZone::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ObjectStoreSize'])) {
            $model->objectStoreSize = $map['ObjectStoreSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceCpu'])) {
            $model->resourceCpu = $map['ResourceCpu'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecGroupConnValid'])) {
            $model->secGroupConnValid = $map['SecGroupConnValid'];
        }

        if (isset($map['Serverless'])) {
            $model->serverless = $map['Serverless'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
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

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
