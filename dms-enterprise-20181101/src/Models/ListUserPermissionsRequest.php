<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListUserPermissionsRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example db_name
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The type of the database. For more information about the valid values of this parameter, see [DbType parameter](~~198106~~).
     *
     * @example polardb
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the environment to which the database belongs. Valid values:
     *
     *   product: production environment
     *   dev: development environment
     *   pre: staging environment
     *   test: test environment
     *   sit: SIT environment
     *   uat: user acceptance testing (UAT) environment
     *   pet: stress testing environment
     *   stag: STAG environment
     *
     * @example dev
     *
     * @var string
     */
    public $envType;

    /**
     * @description Specifies whether the database is a logical database. Valid values:
     *
     *   true: The database is a logical database.
     *   false: The database is a physical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The permissions on a specific type of resources that you want to query. Valid values:
     *
     *   DATABASE: permissions on databases
     *   TABLE: permissions on tables
     *   COLUMN: permissions on fields
     *   INSTANCE: permissions on instances
     *
     * @example DATABASE
     *
     * @var string
     */
    public $permType;

    /**
     * @description The keyword used in the query. For example, if you want to query permissions on an instance, you can specify the endpoint of the instance, such as rm-bp144d5ky4l4r****.
     *
     * @example rm-bp144d5ky4l4r****
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the "View information about the current tenant" section of the [Manage DMS tenants](~~181330~~) topic.
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The ID of the user. You can call the [GetUser](~~147098~~) or [ListUsers](~~141938~~) operation to query the ID of the user.
     *
     * >  The user ID is different from the ID of your Alibaba Cloud account.
     * @example 51****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'dbType'       => 'DbType',
        'envType'      => 'EnvType',
        'logic'        => 'Logic',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'permType'     => 'PermType',
        'searchKey'    => 'SearchKey',
        'tid'          => 'Tid',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->permType) {
            $res['PermType'] = $this->permType;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PermType'])) {
            $model->permType = $map['PermType'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
