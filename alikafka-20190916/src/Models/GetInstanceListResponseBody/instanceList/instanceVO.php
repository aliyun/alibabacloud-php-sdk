<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\confluentConfig;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\tags;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\upgradeServiceDetailInfo;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\vSwitchIds;

class instanceVO extends Model
{
    /**
     * @var string
     */
    public $allConfig;
    /**
     * @var bool
     */
    public $autoCreateGroupEnable;
    /**
     * @var bool
     */
    public $autoCreateTopicEnable;
    /**
     * @var string
     */
    public $backupZoneId;
    /**
     * @var confluentConfig
     */
    public $confluentConfig;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var int
     */
    public $defaultPartitionNum;
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
    public $ioMaxRead;
    /**
     * @var string
     */
    public $ioMaxSpec;
    /**
     * @var int
     */
    public $ioMaxWrite;
    /**
     * @var string
     */
    public $kmsKeyId;
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
     * @var int
     */
    public $reservedPublishCapacity;
    /**
     * @var int
     */
    public $reservedSubscribeCapacity;
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
    public $saslEndPoint;
    /**
     * @var string
     */
    public $securityGroup;
    /**
     * @var string
     */
    public $series;
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
     * @var string
     */
    public $standardZoneId;
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
     * @var vSwitchIds
     */
    public $vSwitchIds;
    /**
     * @var int
     */
    public $viewInstanceStatusCode;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $vpcSaslDomainEndpoint;
    /**
     * @var string
     */
    public $vpcSaslEndPoint;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allConfig'                 => 'AllConfig',
        'autoCreateGroupEnable'     => 'AutoCreateGroupEnable',
        'autoCreateTopicEnable'     => 'AutoCreateTopicEnable',
        'backupZoneId'              => 'BackupZoneId',
        'confluentConfig'           => 'ConfluentConfig',
        'createTime'                => 'CreateTime',
        'defaultPartitionNum'       => 'DefaultPartitionNum',
        'deployType'                => 'DeployType',
        'diskSize'                  => 'DiskSize',
        'diskType'                  => 'DiskType',
        'domainEndpoint'            => 'DomainEndpoint',
        'eipMax'                    => 'EipMax',
        'endPoint'                  => 'EndPoint',
        'expiredTime'               => 'ExpiredTime',
        'instanceId'                => 'InstanceId',
        'ioMax'                     => 'IoMax',
        'ioMaxRead'                 => 'IoMaxRead',
        'ioMaxSpec'                 => 'IoMaxSpec',
        'ioMaxWrite'                => 'IoMaxWrite',
        'kmsKeyId'                  => 'KmsKeyId',
        'msgRetain'                 => 'MsgRetain',
        'name'                      => 'Name',
        'paidType'                  => 'PaidType',
        'regionId'                  => 'RegionId',
        'reservedPublishCapacity'   => 'ReservedPublishCapacity',
        'reservedSubscribeCapacity' => 'ReservedSubscribeCapacity',
        'resourceGroupId'           => 'ResourceGroupId',
        'saslDomainEndpoint'        => 'SaslDomainEndpoint',
        'saslEndPoint'              => 'SaslEndPoint',
        'securityGroup'             => 'SecurityGroup',
        'series'                    => 'Series',
        'serviceStatus'             => 'ServiceStatus',
        'specType'                  => 'SpecType',
        'sslDomainEndpoint'         => 'SslDomainEndpoint',
        'sslEndPoint'               => 'SslEndPoint',
        'standardZoneId'            => 'StandardZoneId',
        'tags'                      => 'Tags',
        'topicNumLimit'             => 'TopicNumLimit',
        'upgradeServiceDetailInfo'  => 'UpgradeServiceDetailInfo',
        'usedGroupCount'            => 'UsedGroupCount',
        'usedPartitionCount'        => 'UsedPartitionCount',
        'usedTopicCount'            => 'UsedTopicCount',
        'vSwitchId'                 => 'VSwitchId',
        'vSwitchIds'                => 'VSwitchIds',
        'viewInstanceStatusCode'    => 'ViewInstanceStatusCode',
        'vpcId'                     => 'VpcId',
        'vpcSaslDomainEndpoint'     => 'VpcSaslDomainEndpoint',
        'vpcSaslEndPoint'           => 'VpcSaslEndPoint',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->confluentConfig) {
            $this->confluentConfig->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->upgradeServiceDetailInfo) {
            $this->upgradeServiceDetailInfo->validate();
        }
        if (null !== $this->vSwitchIds) {
            $this->vSwitchIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allConfig) {
            $res['AllConfig'] = $this->allConfig;
        }

        if (null !== $this->autoCreateGroupEnable) {
            $res['AutoCreateGroupEnable'] = $this->autoCreateGroupEnable;
        }

        if (null !== $this->autoCreateTopicEnable) {
            $res['AutoCreateTopicEnable'] = $this->autoCreateTopicEnable;
        }

        if (null !== $this->backupZoneId) {
            $res['BackupZoneId'] = $this->backupZoneId;
        }

        if (null !== $this->confluentConfig) {
            $res['ConfluentConfig'] = null !== $this->confluentConfig ? $this->confluentConfig->toArray($noStream) : $this->confluentConfig;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultPartitionNum) {
            $res['DefaultPartitionNum'] = $this->defaultPartitionNum;
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

        if (null !== $this->ioMaxRead) {
            $res['IoMaxRead'] = $this->ioMaxRead;
        }

        if (null !== $this->ioMaxSpec) {
            $res['IoMaxSpec'] = $this->ioMaxSpec;
        }

        if (null !== $this->ioMaxWrite) {
            $res['IoMaxWrite'] = $this->ioMaxWrite;
        }

        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
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

        if (null !== $this->reservedPublishCapacity) {
            $res['ReservedPublishCapacity'] = $this->reservedPublishCapacity;
        }

        if (null !== $this->reservedSubscribeCapacity) {
            $res['ReservedSubscribeCapacity'] = $this->reservedSubscribeCapacity;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->saslDomainEndpoint) {
            $res['SaslDomainEndpoint'] = $this->saslDomainEndpoint;
        }

        if (null !== $this->saslEndPoint) {
            $res['SaslEndPoint'] = $this->saslEndPoint;
        }

        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }

        if (null !== $this->series) {
            $res['Series'] = $this->series;
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

        if (null !== $this->standardZoneId) {
            $res['StandardZoneId'] = $this->standardZoneId;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->topicNumLimit) {
            $res['TopicNumLimit'] = $this->topicNumLimit;
        }

        if (null !== $this->upgradeServiceDetailInfo) {
            $res['UpgradeServiceDetailInfo'] = null !== $this->upgradeServiceDetailInfo ? $this->upgradeServiceDetailInfo->toArray($noStream) : $this->upgradeServiceDetailInfo;
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

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toArray($noStream) : $this->vSwitchIds;
        }

        if (null !== $this->viewInstanceStatusCode) {
            $res['ViewInstanceStatusCode'] = $this->viewInstanceStatusCode;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcSaslDomainEndpoint) {
            $res['VpcSaslDomainEndpoint'] = $this->vpcSaslDomainEndpoint;
        }

        if (null !== $this->vpcSaslEndPoint) {
            $res['VpcSaslEndPoint'] = $this->vpcSaslEndPoint;
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
        if (isset($map['AllConfig'])) {
            $model->allConfig = $map['AllConfig'];
        }

        if (isset($map['AutoCreateGroupEnable'])) {
            $model->autoCreateGroupEnable = $map['AutoCreateGroupEnable'];
        }

        if (isset($map['AutoCreateTopicEnable'])) {
            $model->autoCreateTopicEnable = $map['AutoCreateTopicEnable'];
        }

        if (isset($map['BackupZoneId'])) {
            $model->backupZoneId = $map['BackupZoneId'];
        }

        if (isset($map['ConfluentConfig'])) {
            $model->confluentConfig = confluentConfig::fromMap($map['ConfluentConfig']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefaultPartitionNum'])) {
            $model->defaultPartitionNum = $map['DefaultPartitionNum'];
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

        if (isset($map['IoMaxRead'])) {
            $model->ioMaxRead = $map['IoMaxRead'];
        }

        if (isset($map['IoMaxSpec'])) {
            $model->ioMaxSpec = $map['IoMaxSpec'];
        }

        if (isset($map['IoMaxWrite'])) {
            $model->ioMaxWrite = $map['IoMaxWrite'];
        }

        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
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

        if (isset($map['ReservedPublishCapacity'])) {
            $model->reservedPublishCapacity = $map['ReservedPublishCapacity'];
        }

        if (isset($map['ReservedSubscribeCapacity'])) {
            $model->reservedSubscribeCapacity = $map['ReservedSubscribeCapacity'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SaslDomainEndpoint'])) {
            $model->saslDomainEndpoint = $map['SaslDomainEndpoint'];
        }

        if (isset($map['SaslEndPoint'])) {
            $model->saslEndPoint = $map['SaslEndPoint'];
        }

        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }

        if (isset($map['Series'])) {
            $model->series = $map['Series'];
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

        if (isset($map['StandardZoneId'])) {
            $model->standardZoneId = $map['StandardZoneId'];
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

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }

        if (isset($map['ViewInstanceStatusCode'])) {
            $model->viewInstanceStatusCode = $map['ViewInstanceStatusCode'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcSaslDomainEndpoint'])) {
            $model->vpcSaslDomainEndpoint = $map['VpcSaslDomainEndpoint'];
        }

        if (isset($map['VpcSaslEndPoint'])) {
            $model->vpcSaslEndPoint = $map['VpcSaslEndPoint'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
