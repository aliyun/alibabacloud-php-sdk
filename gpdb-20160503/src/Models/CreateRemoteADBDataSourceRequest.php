<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateRemoteADBDataSourceRequest extends Model
{
    /**
     * @description Customer-specified DataSourceName.
     *
     * @example test
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description Instance ID of the data being used (required).
     *
     * This parameter is required.
     *
     * @example gp-test1
     *
     * @var string
     */
    public $localDBInstanceId;

    /**
     * @description Database name of the data being used (required)
     *
     * This parameter is required.
     *
     * @example db1
     *
     * @var string
     */
    public $localDatabase;

    /**
     * @description Management account of the data-using instance.
     *
     * This parameter is required.
     *
     * @example managerAccount
     *
     * @var string
     */
    public $managerUserName;

    /**
     * @description Password of the management account of the data-using instance.
     *
     * This parameter is required.
     *
     * @example password2
     *
     * @var string
     */
    public $managerUserPassword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Instance ID providing the data (required).
     *
     * This parameter is required.
     *
     * @example gp-test2
     *
     * @var string
     */
    public $remoteDBInstanceId;

    /**
     * @description Database name providing the data (required).
     *
     * This parameter is required.
     *
     * @example db2
     *
     * @var string
     */
    public $remoteDatabase;

    /**
     * @description Account name of the data-providing instance used for user mapping (required).
     *
     * This parameter is required.
     *
     * @example account1
     *
     * @var string
     */
    public $userName;

    /**
     * @description Password of the data-providing instance account used for user mapping.
     *
     * This parameter is required.
     *
     * @example password1
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateRemoteADBDataSourceRequest
     */
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
