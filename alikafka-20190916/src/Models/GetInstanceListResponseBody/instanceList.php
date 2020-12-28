<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\tags;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\upgradeServiceDetailInfo;
use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var upgradeServiceDetailInfo[]
     */
    public $upgradeServiceDetailInfo;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $deployType;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $diskType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $sslEndPoint;

    /**
     * @var string
     */
    public $securityGroup;

    /**
     * @var int
     */
    public $serviceStatus;

    /**
     * @var int
     */
    public $eipMax;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $msgRetain;

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
    public $topicNumLimit;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $ioMax;

    /**
     * @var int
     */
    public $paidType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $endPoint;
    protected $_name = [
        'vpcId'                    => 'VpcId',
        'upgradeServiceDetailInfo' => 'UpgradeServiceDetailInfo',
        'specType'                 => 'SpecType',
        'createTime'               => 'CreateTime',
        'deployType'               => 'DeployType',
        'diskSize'                 => 'DiskSize',
        'tags'                     => 'Tags',
        'diskType'                 => 'DiskType',
        'instanceId'               => 'InstanceId',
        'sslEndPoint'              => 'SslEndPoint',
        'securityGroup'            => 'SecurityGroup',
        'serviceStatus'            => 'ServiceStatus',
        'eipMax'                   => 'EipMax',
        'regionId'                 => 'RegionId',
        'msgRetain'                => 'MsgRetain',
        'vSwitchId'                => 'VSwitchId',
        'expiredTime'              => 'ExpiredTime',
        'topicNumLimit'            => 'TopicNumLimit',
        'zoneId'                   => 'ZoneId',
        'ioMax'                    => 'IoMax',
        'paidType'                 => 'PaidType',
        'name'                     => 'Name',
        'endPoint'                 => 'EndPoint',
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
        if (null !== $this->upgradeServiceDetailInfo) {
            $res['UpgradeServiceDetailInfo'] = [];
            if (null !== $this->upgradeServiceDetailInfo && \is_array($this->upgradeServiceDetailInfo)) {
                $n = 0;
                foreach ($this->upgradeServiceDetailInfo as $item) {
                    $res['UpgradeServiceDetailInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
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
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->sslEndPoint) {
            $res['SslEndPoint'] = $this->sslEndPoint;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->eipMax) {
            $res['EipMax'] = $this->eipMax;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->msgRetain) {
            $res['MsgRetain'] = $this->msgRetain;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->topicNumLimit) {
            $res['TopicNumLimit'] = $this->topicNumLimit;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->ioMax) {
            $res['IoMax'] = $this->ioMax;
        }
        if (null !== $this->paidType) {
            $res['PaidType'] = $this->paidType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['UpgradeServiceDetailInfo'])) {
            if (!empty($map['UpgradeServiceDetailInfo'])) {
                $model->upgradeServiceDetailInfo = [];
                $n                               = 0;
                foreach ($map['UpgradeServiceDetailInfo'] as $item) {
                    $model->upgradeServiceDetailInfo[$n++] = null !== $item ? upgradeServiceDetailInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
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
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SslEndPoint'])) {
            $model->sslEndPoint = $map['SslEndPoint'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['EipMax'])) {
            $model->eipMax = $map['EipMax'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['MsgRetain'])) {
            $model->msgRetain = $map['MsgRetain'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['TopicNumLimit'])) {
            $model->topicNumLimit = $map['TopicNumLimit'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['IoMax'])) {
            $model->ioMax = $map['IoMax'];
        }
        if (isset($map['PaidType'])) {
            $model->paidType = $map['PaidType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }

        return $model;
    }
}
