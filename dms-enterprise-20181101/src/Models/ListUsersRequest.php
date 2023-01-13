<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListUsersRequest extends Model
{
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
     * >  Valid values: 10, 20, 50, and 100. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The role that is assigned to the user. Valid values:
     *
     *   **USER**: a regular user role.
     *   **DBA**: a database administrator (DBA) role.
     *   **ADMIN**: a Data Management (DMS) administrator role.
     *   **SECURITY_ADMIN**: a security administrator role.
     *   **STRUCT\_READ\_ONLY**: a schema read-only user role.
     *
     * >  To check your role, move the pointer over the profile picture in the upper-right corner of the DMS console.
     * @example DBA
     *
     * @var string
     */
    public $role;

    /**
     * @description The search keyword. Fuzzy match is supported.
     *
     * @example test
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to query the ID of the tenant.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The status of the user. Valid values:
     *
     *   **NORMAL**: The user is normal.
     *   **DISABLE**: The user is disabled.
     *   **DELETE**: The user is deleted.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $userState;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'role'       => 'Role',
        'searchKey'  => 'SearchKey',
        'tid'        => 'Tid',
        'userState'  => 'UserState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->userState) {
            $res['UserState'] = $this->userState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UserState'])) {
            $model->userState = $map['UserState'];
        }

        return $model;
    }
}
