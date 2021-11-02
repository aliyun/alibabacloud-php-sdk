<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyUserDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @var string
     */
    public $accountsExpirationDate;

    /**
     * @var string
     */
    public $create;

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
     * @var string
     */
    public $isRoot;

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
        'create'                 => 'Create',
        'createTimestamp'        => 'CreateTimestamp',
        'groupNames'             => 'GroupNames',
        'instanceId'             => 'InstanceId',
        'instanceName'           => 'InstanceName',
        'internetIp'             => 'InternetIp',
        'intranetIp'             => 'IntranetIp',
        'ip'                     => 'Ip',
        'isRoot'                 => 'IsRoot',
        'lastLoginIp'            => 'LastLoginIp',
        'lastLoginTime'          => 'LastLoginTime',
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
        if (null !== $this->create) {
            $res['Create'] = $this->create;
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
        if (null !== $this->isRoot) {
            $res['IsRoot'] = $this->isRoot;
        }
        if (null !== $this->lastLoginIp) {
            $res['LastLoginIp'] = $this->lastLoginIp;
        }
        if (null !== $this->lastLoginTime) {
            $res['LastLoginTime'] = $this->lastLoginTime;
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
        if (isset($map['Create'])) {
            $model->create = $map['Create'];
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
        if (isset($map['IsRoot'])) {
            $model->isRoot = $map['IsRoot'];
        }
        if (isset($map['LastLoginIp'])) {
            $model->lastLoginIp = $map['LastLoginIp'];
        }
        if (isset($map['LastLoginTime'])) {
            $model->lastLoginTime = $map['LastLoginTime'];
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
