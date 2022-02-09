<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody\DBNodes;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $category;

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
    public $DBClusterNetworkType;

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
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $DBVersionStatus;

    /**
     * @var int
     */
    public $dataLevel1BackupChainSize;

    /**
     * @var int
     */
    public $deletionLock;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @var bool
     */
    public $isProxyLatestVersion;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $proxyCpuCores;

    /**
     * @var string
     */
    public $proxyStatus;

    /**
     * @var string
     */
    public $proxyType;

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
    public $resourceGroupId;

    /**
     * @var int
     */
    public $SQLSize;

    /**
     * @var int
     */
    public $storageMax;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $storageUsed;

    /**
     * @var string
     */
    public $subCategory;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'category'                  => 'Category',
        'creationTime'              => 'CreationTime',
        'DBClusterDescription'      => 'DBClusterDescription',
        'DBClusterId'               => 'DBClusterId',
        'DBClusterNetworkType'      => 'DBClusterNetworkType',
        'DBClusterStatus'           => 'DBClusterStatus',
        'DBNodes'                   => 'DBNodes',
        'DBType'                    => 'DBType',
        'DBVersion'                 => 'DBVersion',
        'DBVersionStatus'           => 'DBVersionStatus',
        'dataLevel1BackupChainSize' => 'DataLevel1BackupChainSize',
        'deletionLock'              => 'DeletionLock',
        'engine'                    => 'Engine',
        'expireTime'                => 'ExpireTime',
        'expired'                   => 'Expired',
        'isLatestVersion'           => 'IsLatestVersion',
        'isProxyLatestVersion'      => 'IsProxyLatestVersion',
        'lockMode'                  => 'LockMode',
        'maintainTime'              => 'MaintainTime',
        'payType'                   => 'PayType',
        'proxyCpuCores'             => 'ProxyCpuCores',
        'proxyStatus'               => 'ProxyStatus',
        'proxyType'                 => 'ProxyType',
        'regionId'                  => 'RegionId',
        'requestId'                 => 'RequestId',
        'resourceGroupId'           => 'ResourceGroupId',
        'SQLSize'                   => 'SQLSize',
        'storageMax'                => 'StorageMax',
        'storageType'               => 'StorageType',
        'storageUsed'               => 'StorageUsed',
        'subCategory'               => 'SubCategory',
        'tags'                      => 'Tags',
        'VPCId'                     => 'VPCId',
        'vSwitchId'                 => 'VSwitchId',
        'zoneIds'                   => 'ZoneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }
        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }
        if (null !== $this->DBNodes) {
            $res['DBNodes'] = [];
            if (null !== $this->DBNodes && \is_array($this->DBNodes)) {
                $n = 0;
                foreach ($this->DBNodes as $item) {
                    $res['DBNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->DBVersionStatus) {
            $res['DBVersionStatus'] = $this->DBVersionStatus;
        }
        if (null !== $this->dataLevel1BackupChainSize) {
            $res['DataLevel1BackupChainSize'] = $this->dataLevel1BackupChainSize;
        }
        if (null !== $this->deletionLock) {
            $res['DeletionLock'] = $this->deletionLock;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->isProxyLatestVersion) {
            $res['IsProxyLatestVersion'] = $this->isProxyLatestVersion;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->proxyCpuCores) {
            $res['ProxyCpuCores'] = $this->proxyCpuCores;
        }
        if (null !== $this->proxyStatus) {
            $res['ProxyStatus'] = $this->proxyStatus;
        }
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->SQLSize) {
            $res['SQLSize'] = $this->SQLSize;
        }
        if (null !== $this->storageMax) {
            $res['StorageMax'] = $this->storageMax;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }
        if (null !== $this->subCategory) {
            $res['SubCategory'] = $this->subCategory;
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
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
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
        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if (isset($map['DBNodes'])) {
            if (!empty($map['DBNodes'])) {
                $model->DBNodes = [];
                $n              = 0;
                foreach ($map['DBNodes'] as $item) {
                    $model->DBNodes[$n++] = null !== $item ? DBNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['DBVersionStatus'])) {
            $model->DBVersionStatus = $map['DBVersionStatus'];
        }
        if (isset($map['DataLevel1BackupChainSize'])) {
            $model->dataLevel1BackupChainSize = $map['DataLevel1BackupChainSize'];
        }
        if (isset($map['DeletionLock'])) {
            $model->deletionLock = $map['DeletionLock'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['IsProxyLatestVersion'])) {
            $model->isProxyLatestVersion = $map['IsProxyLatestVersion'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ProxyCpuCores'])) {
            $model->proxyCpuCores = $map['ProxyCpuCores'];
        }
        if (isset($map['ProxyStatus'])) {
            $model->proxyStatus = $map['ProxyStatus'];
        }
        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SQLSize'])) {
            $model->SQLSize = $map['SQLSize'];
        }
        if (isset($map['StorageMax'])) {
            $model->storageMax = $map['StorageMax'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }
        if (isset($map['SubCategory'])) {
            $model->subCategory = $map['SubCategory'];
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
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }

        return $model;
    }
}
