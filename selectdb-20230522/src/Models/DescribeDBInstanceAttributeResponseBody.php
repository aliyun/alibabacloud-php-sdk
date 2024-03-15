<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponseBody\DBClusterList;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceAttributeResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $canUpgradeVersions;

    /**
     * @example Prepaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 2023-08-14T03:00:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var DBClusterList[]
     */
    public $DBClusterList;

    /**
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example selectdb
     *
     * @var string
     */
    public $engine;

    /**
     * @example 3.0.1
     *
     * @var string
     */
    public $engineMinorVersion;

    /**
     * @example 2.4
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example 2023-09-17T00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 2023-08-17T09:58Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example lock
     *
     * @var int
     */
    public $lockMode;

    /**
     * @example nolock
     *
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
     * @example 0
     *
     * @var int
     */
    public $objectStoreSize;

    /**
     * @example 06758CAB-1204-5852-A471-29C87D5C1D0F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 8
     *
     * @var int
     */
    public $resourceCpu;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example ACTIVATION
     *
     * @var string
     */
    public $status;

    /**
     * @example 400
     *
     * @var int
     */
    public $storageSize;

    /**
     * @example cn-beijing-h-aliyun
     *
     * @var string
     */
    public $subDomain;
    protected $_name = [
        'canUpgradeVersions' => 'CanUpgradeVersions',
        'chargeType'         => 'ChargeType',
        'createTime'         => 'CreateTime',
        'DBClusterList'      => 'DBClusterList',
        'DBInstanceId'       => 'DBInstanceId',
        'description'        => 'Description',
        'engine'             => 'Engine',
        'engineMinorVersion' => 'EngineMinorVersion',
        'engineVersion'      => 'EngineVersion',
        'expireTime'         => 'ExpireTime',
        'gmtModified'        => 'GmtModified',
        'lockMode'           => 'LockMode',
        'lockReason'         => 'LockReason',
        'maintainEndtime'    => 'MaintainEndtime',
        'maintainStarttime'  => 'MaintainStarttime',
        'objectStoreSize'    => 'ObjectStoreSize',
        'requestId'          => 'RequestId',
        'resourceCpu'        => 'ResourceCpu',
        'resourceGroupId'    => 'ResourceGroupId',
        'status'             => 'Status',
        'storageSize'        => 'StorageSize',
        'subDomain'          => 'SubDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canUpgradeVersions) {
            $res['CanUpgradeVersions'] = $this->canUpgradeVersions;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBClusterList) {
            $res['DBClusterList'] = [];
            if (null !== $this->DBClusterList && \is_array($this->DBClusterList)) {
                $n = 0;
                foreach ($this->DBClusterList as $item) {
                    $res['DBClusterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->objectStoreSize) {
            $res['ObjectStoreSize'] = $this->objectStoreSize;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanUpgradeVersions'])) {
            if (!empty($map['CanUpgradeVersions'])) {
                $model->canUpgradeVersions = $map['CanUpgradeVersions'];
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
                $n                    = 0;
                foreach ($map['DBClusterList'] as $item) {
                    $model->DBClusterList[$n++] = null !== $item ? DBClusterList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['ObjectStoreSize'])) {
            $model->objectStoreSize = $map['ObjectStoreSize'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }

        return $model;
    }
}
