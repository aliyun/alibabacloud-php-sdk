<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\CreateDevicesRequest;

use AlibabaCloud\Tea\Model;

class deviceParamModelList extends Model
{
    /**
     * @var string
     */
    public $enablePassword;

    /**
     * @var string
     */
    public $extAttributes;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $loginPassword;

    /**
     * @var string
     */
    public $loginType;

    /**
     * @var string
     */
    public $loginUsername;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $physicalSpaceName;

    /**
     * @var string
     */
    public $securityDomain;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $sn;

    /**
     * @var string
     */
    public $snmpAccountType;

    /**
     * @var string
     */
    public $snmpAccountVersion;

    /**
     * @var string
     */
    public $snmpAuthPassphrase;

    /**
     * @var string
     */
    public $snmpAuthProtocol;

    /**
     * @var string
     */
    public $snmpCommunity;

    /**
     * @var string
     */
    public $snmpPrivacyPassphrase;

    /**
     * @var string
     */
    public $snmpPrivacyProtocol;

    /**
     * @var string
     */
    public $snmpSecurityLevel;

    /**
     * @var string
     */
    public $snmpUsername;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'enablePassword'        => 'EnablePassword',
        'extAttributes'         => 'ExtAttributes',
        'hostName'              => 'HostName',
        'ip'                    => 'Ip',
        'loginPassword'         => 'LoginPassword',
        'loginType'             => 'LoginType',
        'loginUsername'         => 'LoginUsername',
        'mac'                   => 'Mac',
        'model'                 => 'Model',
        'physicalSpaceName'     => 'PhysicalSpaceName',
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
        if (null !== $this->enablePassword) {
            $res['EnablePassword'] = $this->enablePassword;
        }
        if (null !== $this->extAttributes) {
            $res['ExtAttributes'] = $this->extAttributes;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
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
        if (null !== $this->physicalSpaceName) {
            $res['PhysicalSpaceName'] = $this->physicalSpaceName;
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
     * @return deviceParamModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnablePassword'])) {
            $model->enablePassword = $map['EnablePassword'];
        }
        if (isset($map['ExtAttributes'])) {
            $model->extAttributes = $map['ExtAttributes'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
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
        if (isset($map['PhysicalSpaceName'])) {
            $model->physicalSpaceName = $map['PhysicalSpaceName'];
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
