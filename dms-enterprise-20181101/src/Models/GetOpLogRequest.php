<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetOpLogRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-DD HH:mm:ss format.
     *
     * @example 2022-03-29 10:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The functional module for which you want to query operation logs. If you do not specify this parameter, operation logs for all functional modules are returned. Valid values:
     *
     *   **PERMISSION**: permissions
     *   **OWNER**: data owner
     *   **SQL_CONSOLE**: data query
     *   **SQL\_CONSOLE\_EXPORT**: query result export
     *   **DATA_CHANGE**: data change
     *   **DATA_EXPORT**: data export
     *   **SQL_REVIEW**: SQL review
     *   **DT_SYNC**: database and table synchronization
     *   **DT_DETAIL**: database and table details
     *   **DB_TASK**: task management
     *   **INSTANCE_MANAGE**: instance management
     *   **USER_MANAGE**: user management
     *   **SECURITY_RULE**: security rule
     *   **CONFIG_MANAGE**: configuration management
     *   **RESOURCE_AUTH**: resource authorization
     *   **ACCESS\_WHITE\_IP**: access IP address allowlist
     *
     * @example SECURITY_RULE
     *
     * @var string
     */
    public $module;

    /**
     * @description The number of the page to return. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values:
     *
     *   30
     *   50
     *   100
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-DD HH:mm:ss format.
     *
     * @example 2022-03-23 10:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to obtain the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'endTime'    => 'EndTime',
        'module'     => 'Module',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'startTime'  => 'StartTime',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
