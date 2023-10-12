<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeviceRequest extends Model
{
    /**
     * @description 设备ID
     *
     * @example device-evve560juend5owh
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description enable密码
     *
     * @example pass***
     *
     * @var string
     */
    public $enablePassword;

    /**
     * @description 设备额外属性(JSON)
     *
     * @example {"role":"ASW"}
     *
     * @var string
     */
    public $extAttributes;

    /**
     * @description 主机名
     *
     * @example HZYT_USG6620_A
     *
     * @var string
     */
    public $hostName;

    /**
     * @description 实例ID
     *
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 设备IP
     *
     * @example 10.17.101.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description 设备TELNET账号
     *
     * @example 123456
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description 设备SSH登录账号
     *
     * @example SSH,TELNET
     *
     * @var string
     */
    public $loginType;

    /**
     * @description 设备SSH登录密码
     *
     * @example admin
     *
     * @var string
     */
    public $loginUsername;

    /**
     * @description 设备MAC地址
     *
     * @example b8:27:eb:34:3b:a2
     *
     * @var string
     */
    public $mac;

    /**
     * @description 设备型号
     *
     * @example USG6620
     *
     * @var string
     */
    public $model;

    /**
     * @description 物理空间
     *
     * @example space-ez6zd3w68ma4fsd4
     *
     * @var string
     */
    public $physicalSpaceId;

    /**
     * @description 设备安全域
     *
     * @example IT
     *
     * @var string
     */
    public $securityDomain;

    /**
     * @description 设备状态
     *
     * @example online
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @description 设备SN
     *
     * @example 210235951910K7000016
     *
     * @var string
     */
    public $sn;

    /**
     * @description 账号类型
     *
     * @example get
     *
     * @var string
     */
    public $snmpAccountType;

    /**
     * @description SNMP版本号
     *
     * @example v3
     *
     * @var string
     */
    public $snmpAccountVersion;

    /**
     * @description SNMP Auth PassPhrase
     *
     * @example 123456
     *
     * @var string
     */
    public $snmpAuthPassphrase;

    /**
     * @description Auth Protocol
     *
     * @example MD5
     *
     * @var string
     */
    public $snmpAuthProtocol;

    /**
     * @description SNMP Community
     *
     * @example 123456
     *
     * @var string
     */
    public $snmpCommunity;

    /**
     * @description SNMP Privacy Passphrase
     *
     * @example pass***
     *
     * @var string
     */
    public $snmpPrivacyPassphrase;

    /**
     * @description Privacy Protocol
     *
     * @example DES
     *
     * @var string
     */
    public $snmpPrivacyProtocol;

    /**
     * @description 安全级别
     *
     * @example AUTH_PRIV
     *
     * @var string
     */
    public $snmpSecurityLevel;

    /**
     * @description 用户名
     *
     * @example admin
     *
     * @var string
     */
    public $snmpUsername;

    /**
     * @description 设备厂商
     *
     * @example Huawei
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'deviceId'              => 'DeviceId',
        'enablePassword'        => 'EnablePassword',
        'extAttributes'         => 'ExtAttributes',
        'hostName'              => 'HostName',
        'instanceId'            => 'InstanceId',
        'ip'                    => 'Ip',
        'loginPassword'         => 'LoginPassword',
        'loginType'             => 'LoginType',
        'loginUsername'         => 'LoginUsername',
        'mac'                   => 'Mac',
        'model'                 => 'Model',
        'physicalSpaceId'       => 'PhysicalSpaceId',
        'securityDomain'        => 'SecurityDomain',
        'serviceStatus'         => 'ServiceStatus',
        'sn'                    => 'Sn',
        'snmpAccountType'       => 'SnmpAccountType',
        'snmpAccountVersion'    => 'SnmpAccountVersion',
        'snmpAuthPassphrase'    => 'SnmpAuthPassphrase',
        'snmpAuthProtocol'      => 'SnmpAuthProtocol',
        'snmpCommunity'         => 'SnmpCommunity',
        'snmpPrivacyPassphrase' => 'SnmpPrivacyPassphrase',
        'snmpPrivacyProtocol'   => 'SnmpPrivacyProtocol',
        'snmpSecurityLevel'     => 'SnmpSecurityLevel',
        'snmpUsername'          => 'SnmpUsername',
        'vendor'                => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->enablePassword) {
            $res['EnablePassword'] = $this->enablePassword;
        }
        if (null !== $this->extAttributes) {
            $res['ExtAttributes'] = $this->extAttributes;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->loginPassword) {
            $res['LoginPassword'] = $this->loginPassword;
        }
        if (null !== $this->loginType) {
            $res['LoginType'] = $this->loginType;
        }
        if (null !== $this->loginUsername) {
            $res['LoginUsername'] = $this->loginUsername;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }
        if (null !== $this->snmpAccountType) {
            $res['SnmpAccountType'] = $this->snmpAccountType;
        }
        if (null !== $this->snmpAccountVersion) {
            $res['SnmpAccountVersion'] = $this->snmpAccountVersion;
        }
        if (null !== $this->snmpAuthPassphrase) {
            $res['SnmpAuthPassphrase'] = $this->snmpAuthPassphrase;
        }
        if (null !== $this->snmpAuthProtocol) {
            $res['SnmpAuthProtocol'] = $this->snmpAuthProtocol;
        }
        if (null !== $this->snmpCommunity) {
            $res['SnmpCommunity'] = $this->snmpCommunity;
        }
        if (null !== $this->snmpPrivacyPassphrase) {
            $res['SnmpPrivacyPassphrase'] = $this->snmpPrivacyPassphrase;
        }
        if (null !== $this->snmpPrivacyProtocol) {
            $res['SnmpPrivacyProtocol'] = $this->snmpPrivacyProtocol;
        }
        if (null !== $this->snmpSecurityLevel) {
            $res['SnmpSecurityLevel'] = $this->snmpSecurityLevel;
        }
        if (null !== $this->snmpUsername) {
            $res['SnmpUsername'] = $this->snmpUsername;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['EnablePassword'])) {
            $model->enablePassword = $map['EnablePassword'];
        }
        if (isset($map['ExtAttributes'])) {
            $model->extAttributes = $map['ExtAttributes'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['LoginPassword'])) {
            $model->loginPassword = $map['LoginPassword'];
        }
        if (isset($map['LoginType'])) {
            $model->loginType = $map['LoginType'];
        }
        if (isset($map['LoginUsername'])) {
            $model->loginUsername = $map['LoginUsername'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomain = $map['SecurityDomain'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }
        if (isset($map['SnmpAccountType'])) {
            $model->snmpAccountType = $map['SnmpAccountType'];
        }
        if (isset($map['SnmpAccountVersion'])) {
            $model->snmpAccountVersion = $map['SnmpAccountVersion'];
        }
        if (isset($map['SnmpAuthPassphrase'])) {
            $model->snmpAuthPassphrase = $map['SnmpAuthPassphrase'];
        }
        if (isset($map['SnmpAuthProtocol'])) {
            $model->snmpAuthProtocol = $map['SnmpAuthProtocol'];
        }
        if (isset($map['SnmpCommunity'])) {
            $model->snmpCommunity = $map['SnmpCommunity'];
        }
        if (isset($map['SnmpPrivacyPassphrase'])) {
            $model->snmpPrivacyPassphrase = $map['SnmpPrivacyPassphrase'];
        }
        if (isset($map['SnmpPrivacyProtocol'])) {
            $model->snmpPrivacyProtocol = $map['SnmpPrivacyProtocol'];
        }
        if (isset($map['SnmpSecurityLevel'])) {
            $model->snmpSecurityLevel = $map['SnmpSecurityLevel'];
        }
        if (isset($map['SnmpUsername'])) {
            $model->snmpUsername = $map['SnmpUsername'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
