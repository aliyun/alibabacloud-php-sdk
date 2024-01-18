<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class StartInstanceRequest extends Model
{
    /**
     * @description The initial configurations of ApsaraMQ for Kafka. The value must be a valid JSON string.
     *
     * If you do not specify this parameter, it is left empty.
     *
     * The following parameters can be configured for **Config**:
     *
     *   **enable.vpc_sasl_ssl**: specifies whether to enable VPC transmission encryption. Valid values:
     *
     *   **true**: enables VPC transmission encryption. If you enable VPC transmission encryption, you must also enable access control list (ACL).
     *   **false**: disables VPC transmission encryption. By default, VPC transmission encryption is disabled.
     *
     *   **enable.acl**: specifies whether to enable ACL. Valid values:
     *
     *   **true**: enables ACL.
     *   **false**: disables ACL. By default, ACL is disabled.
     *
     *   **kafka.log.retention.hours**: the maximum message retention period when the disk capacity is sufficient. Unit: hours. Valid values: 24 to 480. Default value: **72**. When the disk usage reaches 85%, the disk capacity is considered insufficient and the system deletes messages in the order in which they are stored to ensure service availability.
     *
     *   **kafka.message.max.bytes**: the maximum size of messages that ApsaraMQ for Kafka can send and receive. Unit: bytes. Valid values: 1048576 to 10485760. Default value: **1048576**. Before you change the value of this parameter, make sure that the new value matches the corresponding configurations on the producers and consumers.
     *
     * @example {"kafka.log.retention.hours":"33"}
     *
     * @var string
     */
    public $config;

    /**
     * @description Specifies whether cross-zone deployment is required. Valid values:
     *
     *   true
     *   false
     *
     * Default value: true.
     * @example false
     *
     * @var bool
     */
    public $crossZone;

    /**
     * @description The deployment mode of the instance. Valid values:
     *
     *   **vpc**: deploys the instance that allows access only from a VPC.
     *   **eip**: deploys the instance that allows access from the Internet and a VPC.
     *
     * The deployment mode of the instance must match the type of the instance. If the instance allows access only from a VPC, set the value to **vpc**. If the instance allows access from the Internet and a VPC, set the value to **eip**.
     * @example vpc
     *
     * @var string
     */
    public $deployModule;

    /**
     * @description The ID of the instance.
     *
     * @example alikafka_post-cn-v0h1fgs2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether the instance supports elastic IP addresses (EIPs). Valid values:
     *
     *   **true**: supports EIPs and allows access from the Internet and a VPC.
     *   **false**: does not support EIPs and allows access only from a VPC.
     *
     * The value of this parameter must match the type of the instance. For example, if the instance allows access only from a VPC, set this parameter to **false**.
     * @example false
     *
     * @var bool
     */
    public $isEipInner;

    /**
     * @description Specifies whether to forcibly deploy the instance in the selected zones.
     *
     * @example false
     *
     * @var bool
     */
    public $isForceSelectedZones;

    /**
     * @description Specifies whether to set a new username and password. Valid values:
     *
     *   **true**: sets a new username and password.
     *   **false**: does not set a new username or password.
     *
     * This parameter is available only if you deploy an instance that allows access from the Internet and a VPC.
     * @example false
     *
     * @var bool
     */
    public $isSetUserAndPassword;

    /**
     * @description The ID of the key that is used for disk encryption in the region where the instance is deployed. You can obtain the ID of the key in the [Key Management Service (KMS) console](https://kms.console.aliyun.com/?spm=a2c4g.11186623.2.5.336745b8hfiU21) or create a key. For more information, see [Manage CMKs](~~181610~~).
     *
     * If this parameter is configured, disk encryption is enabled for the instance. You cannot disable disk encryption after disk encryption is enabled. When you call this operation, the system checks whether the AliyunServiceRoleForAlikafkaInstanceEncryption service-linked role is created. If the role is not created, the system automatically creates the role. For more information, see [Service-linked roles](~~190460~~).
     * @example 0d24xxxx-da7b-4786-b981-9a164dxxxxxx
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The name of the instance.
     *
     * >  If you specify a value for this parameter, make sure that the specified value is unique in the region of the instance.
     * @example newInstanceName
     *
     * @var string
     */
    public $name;

    /**
     * @description The alert contact.
     *
     * @example Mr. Wang
     *
     * @var string
     */
    public $notifier;

    /**
     * @description The password that corresponds to the username.
     *
     * This parameter is available only if you deploy an instance that allows access from the Internet and a VPC.
     * @example password
     *
     * @var string
     */
    public $password;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The security group of the instance.
     *
     * If you do not specify this parameter, ApsaraMQ for Kafka automatically configures a security group for your instance. If you specify this parameter, you must create a security group in advance. For more information, see [Create a security group](~~25468~~).
     * @example sg-bp13wfx7kz9pko****
     *
     * @var string
     */
    public $securityGroup;

    /**
     * @description The two-dimensional arrays that consist of the candidate set for primary zones and the candidate set for secondary zones.
     *
     *   If you set CrossZone to true and specify Zone H and Zone F as the candidate set for primary zones and Zone K as the candidate set for secondary zones, set this parameter to `[[\"zoneh\",\"zonef\"],[\"zonek\"]]`.
     *
     **
     *
     **Note** If you specify multiple zones as the primary or secondary zones, the system deploys the instance in one of the zones without prioritizing them. For example, if you set this parameter to `[[\"zoneh\",\"zonef\"],[\"zonek\"]]`, the primary zone in which the instance is deployed can be Zone H or Zone F, and the secondary zone is Zone K.
     *
     *   If you set CrossZone to false and want to deploy the instance in Zone K, set this parameter to `[[\"zonek\"],[]]`. In this case, the value of this parameter must still be two-dimensional arrays, but the array that specifies the candidate for secondary zones is left empty.
     *
     * @example [[\"zonel\"],[\"zonek\"]]
     *
     * @var string
     */
    public $selectedZones;

    /**
     * @description The version of ApsaraMQ for Kafka. Valid values: 0.10.2 and 2.2.0.
     *
     * @example 0.10.2
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The mobile phone number of the alert contact.
     *
     * @example 1581234****
     *
     * @var string
     */
    public $userPhoneNum;

    /**
     * @description The username that is used to access the instance.
     *
     * This parameter is available only if you deploy an instance that allows access from the Internet and a VPC.
     * @example username
     *
     * @var string
     */
    public $username;

    /**
     * @description The ID of the vSwitch to which you want to connect the instance.
     *
     * @example vsw-bp1j3sg5979fstnpl****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) in which you want to deploy the instance.
     *
     * @example vpc-bp1r4eg3yrxmygv****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone in which you want to deploy the instance.
     *
     *   The zone ID of the instance must be the same as that of the vSwitch.
     *   The value must be in the format of zoneX or Region ID-X. For example, you can set this parameter to zonea or cn-hangzhou-k.
     *
     * @example cn-hangzhou-k
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'config'               => 'Config',
        'crossZone'            => 'CrossZone',
        'deployModule'         => 'DeployModule',
        'instanceId'           => 'InstanceId',
        'isEipInner'           => 'IsEipInner',
        'isForceSelectedZones' => 'IsForceSelectedZones',
        'isSetUserAndPassword' => 'IsSetUserAndPassword',
        'KMSKeyId'             => 'KMSKeyId',
        'name'                 => 'Name',
        'notifier'             => 'Notifier',
        'password'             => 'Password',
        'regionId'             => 'RegionId',
        'securityGroup'        => 'SecurityGroup',
        'selectedZones'        => 'SelectedZones',
        'serviceVersion'       => 'ServiceVersion',
        'userPhoneNum'         => 'UserPhoneNum',
        'username'             => 'Username',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->crossZone) {
            $res['CrossZone'] = $this->crossZone;
        }
        if (null !== $this->deployModule) {
            $res['DeployModule'] = $this->deployModule;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isEipInner) {
            $res['IsEipInner'] = $this->isEipInner;
        }
        if (null !== $this->isForceSelectedZones) {
            $res['IsForceSelectedZones'] = $this->isForceSelectedZones;
        }
        if (null !== $this->isSetUserAndPassword) {
            $res['IsSetUserAndPassword'] = $this->isSetUserAndPassword;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notifier) {
            $res['Notifier'] = $this->notifier;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->selectedZones) {
            $res['SelectedZones'] = $this->selectedZones;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->userPhoneNum) {
            $res['UserPhoneNum'] = $this->userPhoneNum;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
     * @return StartInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['CrossZone'])) {
            $model->crossZone = $map['CrossZone'];
        }
        if (isset($map['DeployModule'])) {
            $model->deployModule = $map['DeployModule'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsEipInner'])) {
            $model->isEipInner = $map['IsEipInner'];
        }
        if (isset($map['IsForceSelectedZones'])) {
            $model->isForceSelectedZones = $map['IsForceSelectedZones'];
        }
        if (isset($map['IsSetUserAndPassword'])) {
            $model->isSetUserAndPassword = $map['IsSetUserAndPassword'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Notifier'])) {
            $model->notifier = $map['Notifier'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['SelectedZones'])) {
            $model->selectedZones = $map['SelectedZones'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['UserPhoneNum'])) {
            $model->userPhoneNum = $map['UserPhoneNum'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
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
