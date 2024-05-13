<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SearchDatabaseRequest extends Model
{
    /**
     * @description The type of the database. For more information about the valid values of this parameter, see [DbType parameter](https://help.aliyun.com/document_detail/198106.html).
     *
     * @example MYSQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The environment type of the database. For more information, see [Change the environment type of an instance](https://help.aliyun.com/document_detail/163309.html).
     *
     * @example test
     *
     * @var string
     */
    public $envType;

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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The keyword that is used to search for databases.
     *
     * @example testdb
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The query range based on permissions. Valid values:
     *
     *   **HAS_PERMSSION**: searches for databases on which the current user has permissions.
     *   **OWNER**: searches for databases owned by the current user.
     *   **MY_FOCUS**: searches for databases that the current user follows.
     *   **UNKNOWN**: searches for all databases.
     *
     * @example HAS_PERMSSION
     *
     * @var string
     */
    public $searchRange;

    /**
     * @description The category of the database. Valid values:
     *
     *   **DB**: single database or logical database.
     *   **SINGLE_DB**: single database.
     *   **LOGIC_DB**: logical database.
     *
     * @example SINGLE_DB
     *
     * @var string
     */
    public $searchTarget;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbType'       => 'DbType',
        'envType'      => 'EnvType',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'searchKey'    => 'SearchKey',
        'searchRange'  => 'SearchRange',
        'searchTarget' => 'SearchTarget',
        'tid'          => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->searchRange) {
            $res['SearchRange'] = $this->searchRange;
        }
        if (null !== $this->searchTarget) {
            $res['SearchTarget'] = $this->searchTarget;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['SearchRange'])) {
            $model->searchRange = $map['SearchRange'];
        }
        if (isset($map['SearchTarget'])) {
            $model->searchTarget = $map['SearchTarget'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
