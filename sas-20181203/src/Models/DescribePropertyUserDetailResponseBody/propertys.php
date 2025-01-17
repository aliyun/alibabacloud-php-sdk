<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserDetailResponseBody;

use AlibabaCloud\Dara\Model;

class propertys extends Model
{
    /**
     * @var string
     */
    public $accountsExpirationDate;
    /**
     * @var int
     */
    public $createTimestamp;
    /**
     * @var string[]
     */
    public $groupNames;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $internetIp;
    /**
     * @var string
     */
    public $intranetIp;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var int
     */
    public $isCouldLogin;
    /**
     * @var int
     */
    public $isPasswdExpired;
    /**
     * @var int
     */
    public $isPasswdLocked;
    /**
     * @var string
     */
    public $isRoot;
    /**
     * @var int
     */
    public $isSudoer;
    /**
     * @var int
     */
    public $isUserExpired;
    /**
     * @var string
     */
    public $lastLoginIp;
    /**
     * @var string
     */
    public $lastLoginTime;
    /**
     * @var int
     */
    public $lastLoginTimeDt;
    /**
     * @var int
     */
    public $lastLoginTimestamp;
    /**
     * @var string
     */
    public $passwordExpirationDate;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $user;
    /**
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
        if (\is_array($this->groupNames)) {
            Model::validateArray($this->groupNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountsExpirationDate) {
            $res['AccountsExpirationDate'] = $this->accountsExpirationDate;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->groupNames) {
            if (\is_array($this->groupNames)) {
                $res['GroupNames'] = [];
                $n1                = 0;
                foreach ($this->groupNames as $item1) {
                    $res['GroupNames'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->groupNames = [];
                $n1                = 0;
                foreach ($map['GroupNames'] as $item1) {
                    $model->groupNames[$n1++] = $item1;
                }
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
