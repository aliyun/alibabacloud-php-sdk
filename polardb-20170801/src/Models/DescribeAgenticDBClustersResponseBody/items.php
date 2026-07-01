<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBClustersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBClustersResponseBody\items\tags;

class items extends Model
{
    /**
     * @var string
     */
    public $agenticDbClusterDescription;

    /**
     * @var string
     */
    public $agenticDbClusterId;

    /**
     * @var string
     */
    public $category;

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
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var string
     */
    public $lockMode;

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
    public $scaleMax;

    /**
     * @var string
     */
    public $scaleMin;

    /**
     * @var string
     */
    public $serverlessType;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $storageUsed;

    /**
     * @var tags[]
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
        'agenticDbClusterDescription' => 'AgenticDbClusterDescription',
        'agenticDbClusterId' => 'AgenticDbClusterId',
        'category' => 'Category',
        'createTime' => 'CreateTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId' => 'DBClusterId',
        'DBClusterStatus' => 'DBClusterStatus',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'lockMode' => 'LockMode',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'serverlessType' => 'ServerlessType',
        'storageType' => 'StorageType',
        'storageUsed' => 'StorageUsed',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agenticDbClusterDescription) {
            $res['AgenticDbClusterDescription'] = $this->agenticDbClusterDescription;
        }

        if (null !== $this->agenticDbClusterId) {
            $res['AgenticDbClusterId'] = $this->agenticDbClusterId;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
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

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }

        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }

        if (null !== $this->serverlessType) {
            $res['ServerlessType'] = $this->serverlessType;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
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
        if (isset($map['AgenticDbClusterDescription'])) {
            $model->agenticDbClusterDescription = $map['AgenticDbClusterDescription'];
        }

        if (isset($map['AgenticDbClusterId'])) {
            $model->agenticDbClusterId = $map['AgenticDbClusterId'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
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

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }

        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }

        if (isset($map['ServerlessType'])) {
            $model->serverlessType = $map['ServerlessType'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
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
