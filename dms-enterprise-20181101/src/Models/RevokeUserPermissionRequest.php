<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class RevokeUserPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $dbId;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $permTypes;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $userAccessId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'dbId' => 'DbId',
        'dsType' => 'DsType',
        'instanceId' => 'InstanceId',
        'logic' => 'Logic',
        'permTypes' => 'PermTypes',
        'tableId' => 'TableId',
        'tableName' => 'TableName',
        'tid' => 'Tid',
        'userAccessId' => 'UserAccessId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        if (null !== $this->permTypes) {
            $res['PermTypes'] = $this->permTypes;
        }

        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->userAccessId) {
            $res['UserAccessId'] = $this->userAccessId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        if (isset($map['PermTypes'])) {
            $model->permTypes = $map['PermTypes'];
        }

        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['UserAccessId'])) {
            $model->userAccessId = $map['UserAccessId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
