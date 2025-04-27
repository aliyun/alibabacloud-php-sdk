<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateRemoteADBDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $localDBInstanceId;

    /**
     * @var string
     */
    public $localDatabase;

    /**
     * @var string
     */
    public $managerUserName;

    /**
     * @var string
     */
    public $managerUserPassword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $remoteDBInstanceId;

    /**
     * @var string
     */
    public $remoteDatabase;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userPassword;
    protected $_name = [
        'dataSourceName' => 'DataSourceName',
        'localDBInstanceId' => 'LocalDBInstanceId',
        'localDatabase' => 'LocalDatabase',
        'managerUserName' => 'ManagerUserName',
        'managerUserPassword' => 'ManagerUserPassword',
        'ownerId' => 'OwnerId',
        'remoteDBInstanceId' => 'RemoteDBInstanceId',
        'remoteDatabase' => 'RemoteDatabase',
        'userName' => 'UserName',
        'userPassword' => 'UserPassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }

        if (null !== $this->localDBInstanceId) {
            $res['LocalDBInstanceId'] = $this->localDBInstanceId;
        }

        if (null !== $this->localDatabase) {
            $res['LocalDatabase'] = $this->localDatabase;
        }

        if (null !== $this->managerUserName) {
            $res['ManagerUserName'] = $this->managerUserName;
        }

        if (null !== $this->managerUserPassword) {
            $res['ManagerUserPassword'] = $this->managerUserPassword;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->remoteDBInstanceId) {
            $res['RemoteDBInstanceId'] = $this->remoteDBInstanceId;
        }

        if (null !== $this->remoteDatabase) {
            $res['RemoteDatabase'] = $this->remoteDatabase;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userPassword) {
            $res['UserPassword'] = $this->userPassword;
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
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        if (isset($map['LocalDBInstanceId'])) {
            $model->localDBInstanceId = $map['LocalDBInstanceId'];
        }

        if (isset($map['LocalDatabase'])) {
            $model->localDatabase = $map['LocalDatabase'];
        }

        if (isset($map['ManagerUserName'])) {
            $model->managerUserName = $map['ManagerUserName'];
        }

        if (isset($map['ManagerUserPassword'])) {
            $model->managerUserPassword = $map['ManagerUserPassword'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RemoteDBInstanceId'])) {
            $model->remoteDBInstanceId = $map['RemoteDBInstanceId'];
        }

        if (isset($map['RemoteDatabase'])) {
            $model->remoteDatabase = $map['RemoteDatabase'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserPassword'])) {
            $model->userPassword = $map['UserPassword'];
        }

        return $model;
    }
}
