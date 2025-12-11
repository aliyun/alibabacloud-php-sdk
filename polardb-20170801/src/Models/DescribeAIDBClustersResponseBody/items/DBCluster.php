<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClustersResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClustersResponseBody\items\DBCluster\tags;

class DBCluster extends Model
{
    /**
     * @var string
     */
    public $aiNodeType;

    /**
     * @var string
     */
    public $createTime;

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
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $DBType;

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
    public $kubeClusterId;

    /**
     * @var string
     */
    public $lockMode;

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
    public $regionId;

    /**
     * @var string
     */
    public $relativeDBClusterId;

    /**
     * @var string
     */
    public $runType;

    /**
     * @var int
     */
    public $storageSpace;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aiNodeType' => 'AiNodeType',
        'createTime' => 'CreateTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId' => 'DBClusterId',
        'DBClusterStatus' => 'DBClusterStatus',
        'DBNodeClass' => 'DBNodeClass',
        'DBType' => 'DBType',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'kubeClusterId' => 'KubeClusterId',
        'lockMode' => 'LockMode',
        'modelType' => 'ModelType',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'relativeDBClusterId' => 'RelativeDBClusterId',
        'runType' => 'RunType',
        'storageSpace' => 'StorageSpace',
        'storageType' => 'StorageType',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiNodeType) {
            $res['AiNodeType'] = $this->aiNodeType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->kubeClusterId) {
            $res['KubeClusterId'] = $this->kubeClusterId;
        }

        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relativeDBClusterId) {
            $res['RelativeDBClusterId'] = $this->relativeDBClusterId;
        }

        if (null !== $this->runType) {
            $res['RunType'] = $this->runType;
        }

        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (isset($map['AiNodeType'])) {
            $model->aiNodeType = $map['AiNodeType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['KubeClusterId'])) {
            $model->kubeClusterId = $map['KubeClusterId'];
        }

        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelativeDBClusterId'])) {
            $model->relativeDBClusterId = $map['RelativeDBClusterId'];
        }

        if (isset($map['RunType'])) {
            $model->runType = $map['RunType'];
        }

        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
