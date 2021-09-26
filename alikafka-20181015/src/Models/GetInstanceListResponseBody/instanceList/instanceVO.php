<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponseBody\instanceList;

use AlibabaCloud\SDK\Alikafka\V20181015\Models\GetInstanceListResponseBody\instanceList\instanceVO\upgradeServiceDetailInfo;
use AlibabaCloud\Tea\Model;

class instanceVO extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $deployType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $sslEndPoint;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $endPoint;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var upgradeServiceDetailInfo
     */
    public $upgradeServiceDetailInfo;
    protected $_name = [
        'vpcId'                    => 'VpcId',
        'vSwitchId'                => 'VSwitchId',
        'expiredTime'              => 'ExpiredTime',
        'deployType'               => 'DeployType',
        'createTime'               => 'CreateTime',
        'sslEndPoint'              => 'SslEndPoint',
        'instanceId'               => 'InstanceId',
        'name'                     => 'Name',
        'serviceStatus'            => 'ServiceStatus',
        'endPoint'                 => 'EndPoint',
        'regionId'                 => 'RegionId',
        'upgradeServiceDetailInfo' => 'UpgradeServiceDetailInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sslEndPoint) {
            $res['SslEndPoint'] = $this->sslEndPoint;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->upgradeServiceDetailInfo) {
            $res['UpgradeServiceDetailInfo'] = null !== $this->upgradeServiceDetailInfo ? $this->upgradeServiceDetailInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SslEndPoint'])) {
            $model->sslEndPoint = $map['SslEndPoint'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UpgradeServiceDetailInfo'])) {
            $model->upgradeServiceDetailInfo = upgradeServiceDetailInfo::fromMap($map['UpgradeServiceDetailInfo']);
        }

        return $model;
    }
}
