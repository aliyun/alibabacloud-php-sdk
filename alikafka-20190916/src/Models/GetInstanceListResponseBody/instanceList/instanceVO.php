<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\tags;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\upgradeServiceDetailInfo;
use AlibabaCloud\Tea\Model;

class instanceVO extends Model
{
    /**
     * @var string
     */
    public $allConfig;

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
     * @var int
     */
    public $diskType;

    /**
     * @var string
     */
    public $domainEndpoint;

    /**
     * @var int
     */
    public $eipMax;

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
     * @var int
     */
    public $ioMax;

    /**
     * @var int
     */
    public $msgRetain;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $paidType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $saslDomainEndpoint;

    /**
     * @var string
     */
    public $securityGroup;

    /**
     * @var int
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $sslDomainEndpoint;

    /**
     * @var string
     */
    public $sslEndPoint;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var int
     */
    public $topicNumLimit;

    /**
     * @var upgradeServiceDetailInfo
     */
    public $upgradeServiceDetailInfo;

    /**
     * @var int
     */
    public $usedGroupCount;

    /**
     * @var int
     */
    public $usedPartitionCount;

    /**
     * @var int
     */
    public $usedTopicCount;

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
        'allConfig'                => 'AllConfig',
        'createTime'               => 'CreateTime',
        'deployType'               => 'DeployType',
        'diskSize'                 => 'DiskSize',
        'diskType'                 => 'DiskType',
        'domainEndpoint'           => 'DomainEndpoint',
        'eipMax'                   => 'EipMax',
        'endPoint'                 => 'EndPoint',
        'expiredTime'              => 'ExpiredTime',
        'instanceId'               => 'InstanceId',
        'ioMax'                    => 'IoMax',
        'msgRetain'                => 'MsgRetain',
        'name'                     => 'Name',
        'paidType'                 => 'PaidType',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'saslDomainEndpoint'       => 'SaslDomainEndpoint',
        'securityGroup'            => 'SecurityGroup',
        'serviceStatus'            => 'ServiceStatus',
        'specType'                 => 'SpecType',
        'sslDomainEndpoint'        => 'SslDomainEndpoint',
        'sslEndPoint'              => 'SslEndPoint',
        'tags'                     => 'Tags',
        'topicNumLimit'            => 'TopicNumLimit',
        'upgradeServiceDetailInfo' => 'UpgradeServiceDetailInfo',
        'usedGroupCount'           => 'UsedGroupCount',
        'usedPartitionCount'       => 'UsedPartitionCount',
        'usedTopicCount'           => 'UsedTopicCount',
        'vSwitchId'                => 'VSwitchId',
        'vpcId'                    => 'VpcId',
        'zoneId'                   => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allConfig) {
            $res['AllConfig'] = $this->allConfig;
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
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->domainEndpoint) {
            $res['DomainEndpoint'] = $this->domainEndpoint;
        }
        if (null !== $this->eipMax) {
            $res['EipMax'] = $this->eipMax;
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
        if (null !== $this->ioMax) {
            $res['IoMax'] = $this->ioMax;
        }
        if (null !== $this->msgRetain) {
            $res['MsgRetain'] = $this->msgRetain;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paidType) {
            $res['PaidType'] = $this->paidType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->saslDomainEndpoint) {
            $res['SaslDomainEndpoint'] = $this->saslDomainEndpoint;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->sslDomainEndpoint) {
            $res['SslDomainEndpoint'] = $this->sslDomainEndpoint;
        }
        if (null !== $this->sslEndPoint) {
            $res['SslEndPoint'] = $this->sslEndPoint;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->topicNumLimit) {
            $res['TopicNumLimit'] = $this->topicNumLimit;
        }
        if (null !== $this->upgradeServiceDetailInfo) {
            $res['UpgradeServiceDetailInfo'] = null !== $this->upgradeServiceDetailInfo ? $this->upgradeServiceDetailInfo->toMap() : null;
        }
        if (null !== $this->usedGroupCount) {
            $res['UsedGroupCount'] = $this->usedGroupCount;
        }
        if (null !== $this->usedPartitionCount) {
            $res['UsedPartitionCount'] = $this->usedPartitionCount;
        }
        if (null !== $this->usedTopicCount) {
            $res['UsedTopicCount'] = $this->usedTopicCount;
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

    /**
     * @param array $map
     *
     * @return instanceVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllConfig'])) {
            $model->allConfig = $map['AllConfig'];
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
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['DomainEndpoint'])) {
            $model->domainEndpoint = $map['DomainEndpoint'];
        }
        if (isset($map['EipMax'])) {
            $model->eipMax = $map['EipMax'];
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
        if (isset($map['IoMax'])) {
            $model->ioMax = $map['IoMax'];
        }
        if (isset($map['MsgRetain'])) {
            $model->msgRetain = $map['MsgRetain'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PaidType'])) {
            $model->paidType = $map['PaidType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SaslDomainEndpoint'])) {
            $model->saslDomainEndpoint = $map['SaslDomainEndpoint'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['SslDomainEndpoint'])) {
            $model->sslDomainEndpoint = $map['SslDomainEndpoint'];
        }
        if (isset($map['SslEndPoint'])) {
            $model->sslEndPoint = $map['SslEndPoint'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TopicNumLimit'])) {
            $model->topicNumLimit = $map['TopicNumLimit'];
        }
        if (isset($map['UpgradeServiceDetailInfo'])) {
            $model->upgradeServiceDetailInfo = upgradeServiceDetailInfo::fromMap($map['UpgradeServiceDetailInfo']);
        }
        if (isset($map['UsedGroupCount'])) {
            $model->usedGroupCount = $map['UsedGroupCount'];
        }
        if (isset($map['UsedPartitionCount'])) {
            $model->usedPartitionCount = $map['UsedPartitionCount'];
        }
        if (isset($map['UsedTopicCount'])) {
            $model->usedTopicCount = $map['UsedTopicCount'];
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
