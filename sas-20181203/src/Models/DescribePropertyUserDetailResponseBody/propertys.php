<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @description Indicates whether the account is an interactive logon account. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example never
     *
     * @var string
     */
    public $accountsExpirationDate;

    /**
     * @description The last logon time of the account.
     *
     * @example 1649149566000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description Queries the asset fingerprints for an account to which a server belongs.
     *
     * @var string[]
     */
    public $groupNames;

    /**
     * @description The UUID of the server.
     *
     * @example i-hp35tftuh52wbp1g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example hc-host-****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The number of entries returned per page. Default value: **10**.
     *
     * @example 100.104.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The timestamp of the last logon to the account. Unit: milliseconds.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @example 0
     *
     * @var int
     */
    public $isCouldLogin;

    /**
     * @example 1
     *
     * @var int
     */
    public $isPasswdExpired;

    /**
     * @example 1
     *
     * @var int
     */
    public $isPasswdLocked;

    /**
     * @description The IP addresses of the server.
     *
     * @example 0
     *
     * @var string
     */
    public $isRoot;

    /**
     * @example 0
     *
     * @var int
     */
    public $isSudoer;

    /**
     * @example 1
     *
     * @var int
     */
    public $isUserExpired;

    /**
     * @description The pagination information.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $lastLoginIp;

    /**
     * @description Specifies whether the fuzzy search by account name is supported. If you want to use fuzzy search, set the parameter to **1**. If you set the parameter to a different value or leave the parameter empty, fuzzy search is not supported.
     *
     * @example 2022-04-04 18:07:06
     *
     * @var string
     */
    public $lastLoginTime;

    /**
     * @example 1649066826000
     *
     * @var int
     */
    public $lastLoginTimeDt;

    /**
     * @description The source IP address of the last logon to the account.
     *
     * @example 1649066826000
     *
     * @var int
     */
    public $lastLoginTimestamp;

    /**
     * @description Indicates whether the account expires. Valid values:
     *
     *   **0**: yes
     *   **1**: no
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
     * @description The name of the server.
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
