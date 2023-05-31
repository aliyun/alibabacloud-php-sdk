<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @description The date on which the account expires.
     *
     * @example never
     *
     * @var string
     */
    public $accountsExpirationDate;

    /**
     * @description The timestamp at which the last asset fingerprint collection is performed. Unit: milliseconds.
     *
     * @example 1649149566000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The details of the user groups to which the account belongs.
     *
     * @var string[]
     */
    public $groupNames;

    /**
     * @description The ID of the server.
     *
     * @example i-hp35tftuh52wbp1g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example hc-host-****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 100.104.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The IP addresses of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description Indicates whether the account is an interactive logon account. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $isCouldLogin;

    /**
     * @description Indicates whether the password expires. Valid values:
     *
     *   **0**: yes
     *   **1**: no
     *
     * @example 1
     *
     * @var int
     */
    public $isPasswdExpired;

    /**
     * @description Indicates whether the password is locked. Valid values:
     *
     *   **0**: yes
     *   **1**: no
     *
     * @example 1
     *
     * @var int
     */
    public $isPasswdLocked;

    /**
     * @description Indicates whether the account has root permissions. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var string
     */
    public $isRoot;

    /**
     * @description Indicates whether the account is a sudo account. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $isSudoer;

    /**
     * @description Indicates whether the account expires. Valid values:
     *
     *   **0**: yes
     *   **1**: no
     *
     * @example 1
     *
     * @var int
     */
    public $isUserExpired;

    /**
     * @description The source IP address of the last logon to the account.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $lastLoginIp;

    /**
     * @description The last logon time of the account.
     *
     * @example 2022-04-04 18:07:06
     *
     * @var string
     */
    public $lastLoginTime;

    /**
     * @description The timestamp of the last logon to the account. Unit: milliseconds.
     *
     * @example 1649066826000
     *
     * @var int
     */
    public $lastLoginTimeDt;

    /**
     * @description The timestamp of the last logon to the account. Unit: milliseconds.
     *
     * @example 1649066826000
     *
     * @var int
     */
    public $lastLoginTimestamp;

    /**
     * @description The date on which the password of the account expires.
     *
     * @example never
     *
     * @var string
     */
    public $passwordExpirationDate;

    /**
     * @description This parameter is deprecated. You can ignore it.
     *
     * @example **
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the account.
     *
     * @example bin
     *
     * @var string
     */
    public $user;

    /**
     * @description The UUID of the server.
     *
     * @example 162eb349-c2d9-4f8b-805c-75b43d4c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'accountsExpirationDate' => 'AccountsExpirationDate',
        'createTimestamp'        => 'CreateTimestamp',
        'groupNames'             => 'GroupNames',
        'instanceId'             => 'InstanceId',
        'instanceName'           => 'InstanceName',
        'internetIp'             => 'InternetIp',
        'intranetIp'             => 'IntranetIp',
        'ip'                     => 'Ip',
        'isCouldLogin'           => 'IsCouldLogin',
        'isPasswdExpired'        => 'IsPasswdExpired',
        'isPasswdLocked'         => 'IsPasswdLocked',
        'isRoot'                 => 'IsRoot',
        'isSudoer'               => 'IsSudoer',
        'isUserExpired'          => 'IsUserExpired',
        'lastLoginIp'            => 'LastLoginIp',
        'lastLoginTime'          => 'LastLoginTime',
        'lastLoginTimeDt'        => 'LastLoginTimeDt',
        'lastLoginTimestamp'     => 'LastLoginTimestamp',
        'passwordExpirationDate' => 'PasswordExpirationDate',
        'status'                 => 'Status',
        'user'                   => 'User',
        'uuid'                   => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountsExpirationDate) {
            $res['AccountsExpirationDate'] = $this->accountsExpirationDate;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->groupNames) {
            $res['GroupNames'] = $this->groupNames;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->isCouldLogin) {
            $res['IsCouldLogin'] = $this->isCouldLogin;
        }
        if (null !== $this->isPasswdExpired) {
            $res['IsPasswdExpired'] = $this->isPasswdExpired;
        }
        if (null !== $this->isPasswdLocked) {
            $res['IsPasswdLocked'] = $this->isPasswdLocked;
        }
        if (null !== $this->isRoot) {
            $res['IsRoot'] = $this->isRoot;
        }
        if (null !== $this->isSudoer) {
            $res['IsSudoer'] = $this->isSudoer;
        }
        if (null !== $this->isUserExpired) {
            $res['IsUserExpired'] = $this->isUserExpired;
        }
        if (null !== $this->lastLoginIp) {
            $res['LastLoginIp'] = $this->lastLoginIp;
        }
        if (null !== $this->lastLoginTime) {
            $res['LastLoginTime'] = $this->lastLoginTime;
        }
        if (null !== $this->lastLoginTimeDt) {
            $res['LastLoginTimeDt'] = $this->lastLoginTimeDt;
        }
        if (null !== $this->lastLoginTimestamp) {
            $res['LastLoginTimestamp'] = $this->lastLoginTimestamp;
        }
        if (null !== $this->passwordExpirationDate) {
            $res['PasswordExpirationDate'] = $this->passwordExpirationDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountsExpirationDate'])) {
            $model->accountsExpirationDate = $map['AccountsExpirationDate'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['GroupNames'])) {
            if (!empty($map['GroupNames'])) {
                $model->groupNames = $map['GroupNames'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IsCouldLogin'])) {
            $model->isCouldLogin = $map['IsCouldLogin'];
        }
        if (isset($map['IsPasswdExpired'])) {
            $model->isPasswdExpired = $map['IsPasswdExpired'];
        }
        if (isset($map['IsPasswdLocked'])) {
            $model->isPasswdLocked = $map['IsPasswdLocked'];
        }
        if (isset($map['IsRoot'])) {
            $model->isRoot = $map['IsRoot'];
        }
        if (isset($map['IsSudoer'])) {
            $model->isSudoer = $map['IsSudoer'];
        }
        if (isset($map['IsUserExpired'])) {
            $model->isUserExpired = $map['IsUserExpired'];
        }
        if (isset($map['LastLoginIp'])) {
            $model->lastLoginIp = $map['LastLoginIp'];
        }
        if (isset($map['LastLoginTime'])) {
            $model->lastLoginTime = $map['LastLoginTime'];
        }
        if (isset($map['LastLoginTimeDt'])) {
            $model->lastLoginTimeDt = $map['LastLoginTimeDt'];
        }
        if (isset($map['LastLoginTimestamp'])) {
            $model->lastLoginTimestamp = $map['LastLoginTimestamp'];
        }
        if (isset($map['PasswordExpirationDate'])) {
            $model->passwordExpirationDate = $map['PasswordExpirationDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
