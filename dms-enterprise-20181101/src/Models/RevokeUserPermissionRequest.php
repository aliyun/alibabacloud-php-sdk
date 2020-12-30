<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class RevokeUserPermissionRequest extends Model
{
    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string
     */
    public $dbId;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $permTypes;

    /**
     * @var string
     */
    public $userAccessId;
    protected $_name = [
        'tid'          => 'Tid',
        'userId'       => 'UserId',
        'dsType'       => 'DsType',
        'dbId'         => 'DbId',
        'logic'        => 'Logic',
        'tableId'      => 'TableId',
        'tableName'    => 'TableName',
        'permTypes'    => 'PermTypes',
        'userAccessId' => 'UserAccessId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->permTypes) {
            $res['PermTypes'] = $this->permTypes;
        }
        if (null !== $this->userAccessId) {
            $res['UserAccessId'] = $this->userAccessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeUserPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['PermTypes'])) {
            $model->permTypes = $map['PermTypes'];
        }
        if (isset($map['UserAccessId'])) {
            $model->userAccessId = $map['UserAccessId'];
        }

        return $model;
    }
}
