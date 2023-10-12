<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class Device extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $accountVersion;

    /**
     * @var string
     */
    public $authPassPhrase;

    /**
     * @var string
     */
    public $authProtocol;

    /**
     * @var string
     */
    public $community;

    /**
     * @var string
     */
    public $deviceForm;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceIp;

    /**
     * @var string
     */
    public $deviceMac;

    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $privacyPassPhrase;

    /**
     * @var string
     */
    public $privacyProtocol;

    /**
     * @var string
     */
    public $securityDomain;

    /**
     * @var string
     */
    public $securityLevel;

    /**
     * @var string
     */
    public $space;

    /**
     * @var string
     */
    public $sshAccount;

    /**
     * @var string
     */
    public $sshPassword;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $telnetAccount;

    /**
     * @var string
     */
    public $telnetPassword;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'accountType'       => 'AccountType',
        'accountVersion'    => 'AccountVersion',
        'authPassPhrase'    => 'AuthPassPhrase',
        'authProtocol'      => 'AuthProtocol',
        'community'         => 'Community',
        'deviceForm'        => 'DeviceForm',
        'deviceId'          => 'DeviceId',
        'deviceIp'          => 'DeviceIp',
        'deviceMac'         => 'DeviceMac',
        'deviceSn'          => 'DeviceSn',
        'hostname'          => 'Hostname',
        'model'             => 'Model',
        'privacyPassPhrase' => 'PrivacyPassPhrase',
        'privacyProtocol'   => 'PrivacyProtocol',
        'securityDomain'    => 'SecurityDomain',
        'securityLevel'     => 'SecurityLevel',
        'space'             => 'Space',
        'sshAccount'        => 'SshAccount',
        'sshPassword'       => 'SshPassword',
        'status'            => 'Status',
        'telnetAccount'     => 'TelnetAccount',
        'telnetPassword'    => 'TelnetPassword',
        'userName'          => 'UserName',
        'vendor'            => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->accountVersion) {
            $res['AccountVersion'] = $this->accountVersion;
        }
        if (null !== $this->authPassPhrase) {
            $res['AuthPassPhrase'] = $this->authPassPhrase;
        }
        if (null !== $this->authProtocol) {
            $res['AuthProtocol'] = $this->authProtocol;
        }
        if (null !== $this->community) {
            $res['Community'] = $this->community;
        }
        if (null !== $this->deviceForm) {
            $res['DeviceForm'] = $this->deviceForm;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceIp) {
            $res['DeviceIp'] = $this->deviceIp;
        }
        if (null !== $this->deviceMac) {
            $res['DeviceMac'] = $this->deviceMac;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->privacyPassPhrase) {
            $res['PrivacyPassPhrase'] = $this->privacyPassPhrase;
        }
        if (null !== $this->privacyProtocol) {
            $res['PrivacyProtocol'] = $this->privacyProtocol;
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }
        if (null !== $this->space) {
            $res['Space'] = $this->space;
        }
        if (null !== $this->sshAccount) {
            $res['SshAccount'] = $this->sshAccount;
        }
        if (null !== $this->sshPassword) {
            $res['SshPassword'] = $this->sshPassword;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->telnetAccount) {
            $res['TelnetAccount'] = $this->telnetAccount;
        }
        if (null !== $this->telnetPassword) {
            $res['TelnetPassword'] = $this->telnetPassword;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Device
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AccountVersion'])) {
            $model->accountVersion = $map['AccountVersion'];
        }
        if (isset($map['AuthPassPhrase'])) {
            $model->authPassPhrase = $map['AuthPassPhrase'];
        }
        if (isset($map['AuthProtocol'])) {
            $model->authProtocol = $map['AuthProtocol'];
        }
        if (isset($map['Community'])) {
            $model->community = $map['Community'];
        }
        if (isset($map['DeviceForm'])) {
            $model->deviceForm = $map['DeviceForm'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceIp'])) {
            $model->deviceIp = $map['DeviceIp'];
        }
        if (isset($map['DeviceMac'])) {
            $model->deviceMac = $map['DeviceMac'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['PrivacyPassPhrase'])) {
            $model->privacyPassPhrase = $map['PrivacyPassPhrase'];
        }
        if (isset($map['PrivacyProtocol'])) {
            $model->privacyProtocol = $map['PrivacyProtocol'];
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomain = $map['SecurityDomain'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }
        if (isset($map['Space'])) {
            $model->space = $map['Space'];
        }
        if (isset($map['SshAccount'])) {
            $model->sshAccount = $map['SshAccount'];
        }
        if (isset($map['SshPassword'])) {
            $model->sshPassword = $map['SshPassword'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TelnetAccount'])) {
            $model->telnetAccount = $map['TelnetAccount'];
        }
        if (isset($map['TelnetPassword'])) {
            $model->telnetPassword = $map['TelnetPassword'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
