<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class ModifyRemoteADBDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $localDBInstanceId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $userName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
