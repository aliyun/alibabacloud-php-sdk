<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDatabaseUserPermssionsRequest extends Model
{
    /**
     * @description The ID of the database.
     *
     * This parameter is required.
     * @example 123
     *
     * @var string
     */
    public $dbId;

    /**
     * @description Specifies whether the database is a logical database.
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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the permission. Valid values:
     *
     *   DATABASE: permissions on databases
     *   TABLE: permissions on tables
     *   COLUMN: permissions on fields
     *
     * This parameter is required.
     * @example DATABASE
     *
     * @var string
     */
    public $permType;

    /**
     * @description The ID of the tenant.
     *
     * > : To view the ID of the tenant, log on to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html).
     * @example -1
     *
     * @var int
     */
    public $tid;

    /**
     * @description The nickname of the user.
     *
     * @example search_user_name
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbId'       => 'DbId',
        'logic'      => 'Logic',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'permType'   => 'PermType',
        'tid'        => 'Tid',
        'userName'   => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
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
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatabaseUserPermssionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
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
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
