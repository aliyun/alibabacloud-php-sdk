<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListUserPermissionsRequest extends Model
{
    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $permType;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $searchKey;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'tid'          => 'Tid',
        'permType'     => 'PermType',
        'userId'       => 'UserId',
        'databaseName' => 'DatabaseName',
        'searchKey'    => 'SearchKey',
        'logic'        => 'Logic',
        'envType'      => 'EnvType',
        'dbType'       => 'DbType',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
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
        if (null !== $this->permType) {
            $res['PermType'] = $this->permType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['PermType'])) {
            $model->permType = $map['PermType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
