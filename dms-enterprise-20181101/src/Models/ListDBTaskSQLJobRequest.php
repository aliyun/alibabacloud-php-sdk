<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDBTaskSQLJobRequest extends Model
{
    /**
     * @description The ID of the SQL task group. You can call the [GetStructSyncJobDetail](~~206160~~) operation to obtain this parameter.
     *
     * @example 1324235
     *
     * @var int
     */
    public $DBTaskGroupId;

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
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the tenant.
     *
     * > : To view the ID of the tenant, log on to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [Manage DMS tenants](~~181330~~).
     * @example 1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'DBTaskGroupId' => 'DBTaskGroupId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'tid'           => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBTaskGroupId) {
            $res['DBTaskGroupId'] = $this->DBTaskGroupId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDBTaskSQLJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBTaskGroupId'])) {
            $model->DBTaskGroupId = $map['DBTaskGroupId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
