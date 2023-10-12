<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateDevicesShrinkRequest extends Model
{
    /**
     * @description 设备ID
     *
     * @example UpdateDevices
     *
     * @var string
     */
    public $deviceIdsShrink;

    /**
     * @example 123456
     *
     * @var string
     */
    public $enablePassword;

    /**
     * @example {\"Role\":\"WIFI-ASW\"}
     *
     * @var string
     */
    public $extAttributes;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

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
     * @example RG-S5750-48GT4XS-HP-H
     *
     * @var string
     */
    public $model;

    /**
     * @example space-1hk5p29yvvzuh9cp
     *
     * @var string
     */
    public $physicalSpaceId;

    /**
     * @example xxx园区
     *
     * @var string
     */
    public $physicalSpaceName;

    /**
     * @example CMN-IT
     *
     * @var string
     */
    public $securityDomain;

    /**
     * @example online
     *
     * @var string
     */
    public $serviceStatus;

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
     * @description Auth PassPhrase
     *
     * @example 123456
     *
     * @var string
     */
    public $snmpAuthPassphrase;

    /**
     * @example MD5
     *
     * @var string
     */
    public $snmpAuthProtocol;

    /**
     * @description Community
     *
     * @example 123456
     *
     * @var string
     */
    public $snmpCommunity;

    /**
     * @description Privacy Passphase
     *
     * @example 123456
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
     * @example H3C
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'deviceIdsShrink'       => 'DeviceIds',
        'enablePassword'        => 'EnablePassword',
        'extAttributes'         => 'ExtAttributes',
        'instanceId'            => 'InstanceId',
        'loginPassword'         => 'LoginPassword',
        'loginType'             => 'LoginType',
        'loginUsername'         => 'LoginUsername',
        'model'                 => 'Model',
        'physicalSpaceId'       => 'PhysicalSpaceId',
        'physicalSpaceName'     => 'PhysicalSpaceName',
        'securityDomain'        => 'SecurityDomain',
        'serviceStatus'         => 'ServiceStatus',
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
        if (null !== $this->deviceIdsShrink) {
            $res['DeviceIds'] = $this->deviceIdsShrink;
        }
        if (null !== $this->enablePassword) {
            $res['EnablePassword'] = $this->enablePassword;
        }
        if (null !== $this->extAttributes) {
            $res['ExtAttributes'] = $this->extAttributes;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }
        if (null !== $this->physicalSpaceName) {
            $res['PhysicalSpaceName'] = $this->physicalSpaceName;
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
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
     * @return UpdateDevicesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceIds'])) {
            $model->deviceIdsShrink = $map['DeviceIds'];
        }
        if (isset($map['EnablePassword'])) {
            $model->enablePassword = $map['EnablePassword'];
        }
        if (isset($map['ExtAttributes'])) {
            $model->extAttributes = $map['ExtAttributes'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }
        if (isset($map['PhysicalSpaceName'])) {
            $model->physicalSpaceName = $map['PhysicalSpaceName'];
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomain = $map['SecurityDomain'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
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
