<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SearchTableRequest extends Model
{
    /**
     * @description The type of database. Valid values:
     *
     *   **MySQL**
     *   **SQLServer**
     *   **PostgreSQL**
     *   **Oracle**
     *   **DRDS**
     *   **OceanBase**
     *   **Mongo**
     *   **Redis**
     *
     * @example MySQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the environment to which databases belong. For more information, see [Change the environment type of an instance](~~163309~~).
     *
     * @example PRODUCT
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
     * @description Specifies whether to return the GUID of each table.
     *
     * @example false
     *
     * @var bool
     */
    public $returnGuid;

    /**
     * @description The keyword that is used to query tables.
     *
     * @example test
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The scope of tables that you want to query. Valid values:
     *
     *   **HAS_PERMSSION**: the tables on which the current account has permissions.
     *   **OWNER**: the tables owned by the current account.
     *   **MY_FOCUS**: the tables that the current account follows.
     *   **UNKNOWN**: all tables.
     *
     * @example OWNER
     *
     * @var string
     */
    public $searchRange;

    /**
     * @description The type of table that you want to query. Valid values:
     *
     *   **TABLE**: physical and logical tables
     *   **SINGLE_TABLE**: physical tables
     *   **LOGIC_TABLE**: logical tables
     *
     * @example LOGIC_TABLE
     *
     * @var string
     */
    public $searchTarget;

    /**
     * @description The ID of the tenant.
     *
     * > To view the tenant ID, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the [View information about the current tenant](~~181330~~) section of the "Manage DMS tenants" topic.
     * @example 1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbType'       => 'DbType',
        'envType'      => 'EnvType',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'returnGuid'   => 'ReturnGuid',
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
        if (null !== $this->returnGuid) {
            $res['ReturnGuid'] = $this->returnGuid;
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
     * @return SearchTableRequest
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
        if (isset($map['ReturnGuid'])) {
            $model->returnGuid = $map['ReturnGuid'];
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
