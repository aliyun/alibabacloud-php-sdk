<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyRemoteADBDataSourceRequest extends Model
{
    /**
     * @description Service ID
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description Specified dataSourceName.
     *
     * @example test
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The ID of the local data instance being used.
     *
     * This parameter is required.
     *
     * @example gp-test
     *
     * @var string
     */
    public $localDBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description New user name.
     *
     * This parameter is required.
     *
     * @example newUserName
     *
     * @var string
     */
    public $userName;

    /**
     * @description New user password, which must be transmitted in encrypted form.
     *
     * This parameter is required.
     *
     * @example newUserPassword
     *
     * @var string
     */
    public $userPassword;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'dataSourceName' => 'DataSourceName',
        'localDBInstanceId' => 'LocalDBInstanceId',
        'ownerId' => 'OwnerId',
        'userName' => 'UserName',
        'userPassword' => 'UserPassword',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->localDBInstanceId) {
            $res['LocalDBInstanceId'] = $this->localDBInstanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
     * @return ModifyRemoteADBDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['LocalDBInstanceId'])) {
            $model->localDBInstanceId = $map['LocalDBInstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
