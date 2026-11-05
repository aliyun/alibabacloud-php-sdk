<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeKVCacheInstancesResponseBody\items;

use AlibabaCloud\Dara\Model;

class KVCacheItem extends Model
{
    /**
     * @var string
     */
    public $AIDBClusterId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $DBClusterId;

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
    public $KVCacheInstanceId;

    /**
     * @var string
     */
    public $KVCacheInstanceStatus;

    /**
     * @var int
     */
    public $KVCacheSpace;

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
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'AIDBClusterId' => 'AIDBClusterId',
        'creationTime' => 'CreationTime',
        'DBClusterId' => 'DBClusterId',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'KVCacheInstanceId' => 'KVCacheInstanceId',
        'KVCacheInstanceStatus' => 'KVCacheInstanceStatus',
        'KVCacheSpace' => 'KVCacheSpace',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIDBClusterId) {
            $res['AIDBClusterId'] = $this->AIDBClusterId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->KVCacheInstanceId) {
            $res['KVCacheInstanceId'] = $this->KVCacheInstanceId;
        }

        if (null !== $this->KVCacheInstanceStatus) {
            $res['KVCacheInstanceStatus'] = $this->KVCacheInstanceStatus;
        }

        if (null !== $this->KVCacheSpace) {
            $res['KVCacheSpace'] = $this->KVCacheSpace;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['AIDBClusterId'])) {
            $model->AIDBClusterId = $map['AIDBClusterId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['KVCacheInstanceId'])) {
            $model->KVCacheInstanceId = $map['KVCacheInstanceId'];
        }

        if (isset($map['KVCacheInstanceStatus'])) {
            $model->KVCacheInstanceStatus = $map['KVCacheInstanceStatus'];
        }

        if (isset($map['KVCacheSpace'])) {
            $model->KVCacheSpace = $map['KVCacheSpace'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
