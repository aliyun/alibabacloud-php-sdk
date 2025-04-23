<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponseBody\instanceList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponseBody\instanceList\instanceVO\upgradeServiceDetailInfo;

class instanceVO extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $deployType;

    /**
     * @var string
     */
    public $endPoint;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $sslEndPoint;

    /**
     * @var upgradeServiceDetailInfo
     */
    public $upgradeServiceDetailInfo;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'deployType' => 'DeployType',
        'endPoint' => 'EndPoint',
        'expiredTime' => 'ExpiredTime',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'serviceStatus' => 'ServiceStatus',
        'sslEndPoint' => 'SslEndPoint',
        'upgradeServiceDetailInfo' => 'UpgradeServiceDetailInfo',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->upgradeServiceDetailInfo) {
            $this->upgradeServiceDetailInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }

        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }

        if (null !== $this->sslEndPoint) {
            $res['SslEndPoint'] = $this->sslEndPoint;
        }

        if (null !== $this->upgradeServiceDetailInfo) {
            $res['UpgradeServiceDetailInfo'] = null !== $this->upgradeServiceDetailInfo ? $this->upgradeServiceDetailInfo->toArray($noStream) : $this->upgradeServiceDetailInfo;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }

        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        if (isset($map['SslEndPoint'])) {
            $model->sslEndPoint = $map['SslEndPoint'];
        }

        if (isset($map['UpgradeServiceDetailInfo'])) {
            $model->upgradeServiceDetailInfo = upgradeServiceDetailInfo::fromMap($map['UpgradeServiceDetailInfo']);
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
