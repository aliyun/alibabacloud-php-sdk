<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\confluentConfig;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\tags;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\upgradeServiceDetailInfo;
use AlibabaCloud\Tea\Model;

class instanceVO extends Model
{
    /**
     * @description The configurations of the deployed ApsaraMQ for Kafka instance.
     *
     * @example {\"enable.vpc_sasl_ssl\":\"false\",\"kafka.log.retention.hours\":\"66\",\"enable.acl\":\"false\",\"kafka.message.max.bytes\":\"6291456\"}
     *
     * @var string
     */
    public $allConfig;

    /**
     * @var confluentConfig
     */
    public $confluentConfig;

    /**
     * @description The time when the instance was created. Unit: milliseconds.
     *
     * @example 1577961819000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The type of the network in which the instance is deployed. Valid values:
     *
     *   **4**: Internet and VPC
     *   **5**: VPC
     *
     * @example 5
     *
     * @var int
     */
    public $deployType;

    /**
     * @description The disk size. Unit: GB.
     *
     * @example 3600
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The disk type. Valid values:
     *
     *   **0**: ultra disk
     *   **1**: standard SSD
     *
     * @example 1
     *
     * @var int
     */
    public $diskType;

    /**
     * @description The default endpoint of the instance in domain name mode. ApsaraMQ for Kafka instances support endpoints in domain name mode and IP address mode.
     *
     *   Endpoints in domain name mode: An endpoint in this mode consists of the domain name of the instance and a port number. The format of an endpoint in this mode is `{Instance domain name}:{Port number}`.
     *   Endpoints in IP address mode: An endpoint in this mode consists of the IP address of the broker and a port number. The format of an endpoint in this mode is `{Broker IP address}:{Port number}`.
     *
     * @example alikafka-pre-cn-zv**********-1-vpc.alikafka.aliyuncs.com:9092,alikafka-pre-cn-zv**********-2-vpc.alikafka.aliyuncs.com:9092,alikafka-pre-cn-zv**********-3-vpc.alikafka.aliyuncs.com:9092
     *
     * @var string
     */
    public $domainEndpoint;

    /**
     * @description The peak Internet traffic allowed for the instance.
     *
     * @example 20
     *
     * @var int
     */
    public $eipMax;

    /**
     * @description The default endpoint of the instance in IP address mode. ApsaraMQ for Kafka instances support endpoints in domain name mode and IP address mode.
     *
     *   Endpoints in domain name mode: An endpoint in this mode consists of the domain name of the instance and a port number. The format of an endpoint in this mode is `{Instance domain name}:{Port number}`.
     *   Endpoints in IP address mode: An endpoint in this mode consists of the IP address of the broker and a port number. The format of an endpoint in this mode is `{Broker IP address}:{Port number}`.
     *
     * @example 192.168.XX.XX:9092,192.168.XX.XX:9092,192.168.XX.XX:9092
     *
     * @var string
     */
    public $endPoint;

    /**
     * @description The time when the instance expires. Unit: milliseconds.
     *
     * @example 1893581018000
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description The instance ID.
     *
     * @example alikafka_pre-cn-mp919o4v****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The peak traffic allowed for the instance.
     *
     * @example 20
     *
     * @var int
     */
    public $ioMax;

    /**
     * @description The traffic specification.
     *
     * @example alikafka.hw.2xlarge
     *
     * @var string
     */
    public $ioMaxSpec;

    /**
     * @description The ID of the key that is used for disk encryption in the region where the instance is deployed.
     *
     * @example 0d24xxxx-da7b-4786-b981-9a164dxxxxxx
     *
     * @var string
     */
    public $kmsKeyId;

    /**
     * @description The retention period of messages in the instance. Unit: hours.
     *
     * @example 72
     *
     * @var int
     */
    public $msgRetain;

    /**
     * @description The instance name.
     *
     * @example alikafka_post-cn-mp91gnw0****
     *
     * @var string
     */
    public $name;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **0**: subscription
     *   **1**: pay-as-you-go
     *
     * @example 1
     *
     * @var int
     */
    public $paidType;

    /**
     * @description The ID of the region where the instance resides.
     *
     * @example cn-hangzhou
     *
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
     * @description The resource group ID.
     *
     * @example rg-ac***********7q
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The Simple Authentication and Security Layer (SASL) endpoint of the instance in domain name mode. ApsaraMQ for Kafka instances support endpoints in domain name mode and IP address mode.
     *
     *   Endpoints in domain name mode: An endpoint in this mode consists of the domain name of the instance and a port number. The format of an endpoint in this mode is `{Instance domain name}:{Port number}`.
     *   Endpoints in IP address mode: An endpoint in this mode consists of the IP address of the broker and a port number. The format of an endpoint in this mode is `{Broker IP address}:{Port number}`.
     *
     * @example alikafka-pre-cn-zv**********-1-vpc.alikafka.aliyuncs.com:9094,alikafka-pre-cn-zv**********-2-vpc.alikafka.aliyuncs.com:9094,alikafka-pre-cn-zv**********-3-vpc.alikafka.aliyuncs.com:9094
     *
     * @var string
     */
    public $saslDomainEndpoint;

    /**
     * @description The security group of the instance.
     *
     *   If the instance is deployed by using the ApsaraMQ for Kafka console or calling the [StartInstance](~~157786~~) operation without a security group configured, no value is returned.
     *   If the instance is deployed by calling the [StartInstance](~~157786~~) operation with a security group configured, the returned value is the configured security group.
     *
     * @example sg-bp13wfx7kz9pkow****
     *
     * @var string
     */
    public $securityGroup;

    /**
     * @description The instance status. Valid values:
     *
     *   **0**: pending
     *   **1**: preparing hardware resources
     *   **2**: initializing
     *   **3**: starting
     *   **5**: running
     *   **6**: migrating
     *   **7**: ready for upgrade
     *   **8**: upgrading
     *   **9**: ready for changes
     *   **10**: released
     *   **11**: changing
     *   **15**: expired
     *
     * @example 5
     *
     * @var int
     */
    public $serviceStatus;

    /**
     * @description The instance edition. Valid values:
     *
     *   **professional**: Professional Edition (High Write)
     *   **professionalForHighRead**: Professional Edition (High Read)
     *   **normal**: Standard Edition
     *
     * @example professional
     *
     * @var string
     */
    public $specType;

    /**
     * @description The SSL endpoint of the instance in domain name mode. ApsaraMQ for Kafka instances support endpoints in domain name mode and IP address mode.
     *
     *   Endpoints in domain name mode: An endpoint in this mode consists of the domain name of the instance and a port number. The format of an endpoint in this mode is `{Instance domain name}:{Port number}`.
     *   Endpoints in IP address mode: An endpoint in this mode consists of the IP address of the broker and a port number. The format of an endpoint in this mode is `{Broker IP address}:{Port number}`.
     *
     * @example alikafka-pre-cn-zv**********-1.alikafka.aliyuncs.com:9093,alikafka-pre-cn-zv**********-2.alikafka.aliyuncs.com:9093,alikafka-pre-cn-zv**********-3.alikafka.aliyuncs.com:9093
     *
     * @var string
     */
    public $sslDomainEndpoint;

    /**
     * @description The Secure Sockets Layer (SSL) endpoint of the instance in IP address mode. ApsaraMQ for Kafka instances support endpoints in domain name mode and IP address mode.
     *
     *   Endpoints in domain name mode: An endpoint in this mode consists of the domain name of the instance and a port number. The format of an endpoint in this mode is `{Instance domain name}:{Port number}`.
     *   Endpoints in IP address mode: An endpoint in this mode consists of the IP address of the broker and a port number. The format of an endpoint in this mode is `{Broker IP address}:{Port number}`.
     *
     * @example 192.0.XX.XX:9093,198.51.XX.XX:9093,203.0.XX.XX:9093
     *
     * @var string
     */
    public $sslEndPoint;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-k
     *
     * @var string
     */
    public $standardZoneId;

    /**
     * @description The tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The maximum number of topics on the instance.
     *
     * @example 180
     *
     * @var int
     */
    public $topicNumLimit;

    /**
     * @description The upgrade information of the instance.
     *
     * @var upgradeServiceDetailInfo
     */
    public $upgradeServiceDetailInfo;

    /**
     * @description The number of used groups.
     *
     * @example 10
     *
     * @var int
     */
    public $usedGroupCount;

    /**
     * @description The number of used partitions.
     *
     * @example 25
     *
     * @var int
     */
    public $usedPartitionCount;

    /**
     * @description The number of used topics.
     *
     * @example 3
     *
     * @var int
     */
    public $usedTopicCount;

    /**
     * @description The vSwitch ID of the instance.
     *
     * @example vsw-bp1fvuw0ljd7vzmo3****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-bp1ojac7bv448nifj****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * @example zonei
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allConfig'                 => 'AllConfig',
        'confluentConfig'           => 'ConfluentConfig',
        'createTime'                => 'CreateTime',
        'deployType'                => 'DeployType',
        'diskSize'                  => 'DiskSize',
        'diskType'                  => 'DiskType',
        'domainEndpoint'            => 'DomainEndpoint',
        'eipMax'                    => 'EipMax',
        'endPoint'                  => 'EndPoint',
        'expiredTime'               => 'ExpiredTime',
        'instanceId'                => 'InstanceId',
        'ioMax'                     => 'IoMax',
        'ioMaxSpec'                 => 'IoMaxSpec',
        'kmsKeyId'                  => 'KmsKeyId',
        'msgRetain'                 => 'MsgRetain',
        'name'                      => 'Name',
        'paidType'                  => 'PaidType',
        'regionId'                  => 'RegionId',
        'reservedPublishCapacity'   => 'ReservedPublishCapacity',
        'reservedSubscribeCapacity' => 'ReservedSubscribeCapacity',
        'resourceGroupId'           => 'ResourceGroupId',
        'saslDomainEndpoint'        => 'SaslDomainEndpoint',
        'securityGroup'             => 'SecurityGroup',
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
        'vpcId'                     => 'VpcId',
        'zoneId'                    => 'ZoneId',
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
        if (null !== $this->confluentConfig) {
            $res['ConfluentConfig'] = null !== $this->confluentConfig ? $this->confluentConfig->toMap() : null;
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
        if (null !== $this->ioMaxSpec) {
            $res['IoMaxSpec'] = $this->ioMaxSpec;
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
        if (null !== $this->standardZoneId) {
            $res['StandardZoneId'] = $this->standardZoneId;
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
        if (isset($map['ConfluentConfig'])) {
            $model->confluentConfig = confluentConfig::fromMap($map['ConfluentConfig']);
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
        if (isset($map['IoMaxSpec'])) {
            $model->ioMaxSpec = $map['IoMaxSpec'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
