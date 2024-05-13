<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetOpLogRequest extends Model
{
    /**
     * @description DatabaseName.
     *
     * @example dmstest@rm-bp1qb97d4b****.mysql.rds.aliyuncs.com:3306[poc_dev]
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-DD HH:mm:ss format.
     *
     * This parameter is required.
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
     *   **SQL_CONSOLE_EXPORT**: query result export
     *   **DATA_CHANGE**: data change
     *   **DATA_EXPORT**: data export
     *   **SQL_REVIEW**: SQL review
     *   **DT_SYNC**: database and table synchronization
     *   **DT_DETAIL**: database and table details
     *   **DB_TASK**: task management
     *   **INSTANCE_MANAGE**: instance management
     *   **USER_MANAGE**: user management
     *   **SECURITY_RULE**: security rules
     *   **CONFIG_MANAGE**: configuration management
     *   **RESOURCE_AUTH**: resource authorization
     *   **ACCESS_WHITE_IP**: access IP address whitelist
     *   **NDDL**: schema design
     *   **DSQL_CONSOLE**: cross-database data query
     *   **DSQL_CONSOLE_EXPORT**: cross-database query result export
     *   **DATA_TRACT**: data tracking
     *   **DATA_QUALITY**: data quality
     *   **DATALINK_MANAGE** :DBLink management
     *   **DATASEC_MANAGE**: sensitive data management
     *   **SELL**: sales
     *
     * @example SECURITY_RULE
     *
     * @var string
     */
    public $module;

    /**
     * @description The number of the page to return. Pages start from page 1.
     *
     * This parameter is required.
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
     * This parameter is required.
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-DD HH:mm:ss format.
     *
     * This parameter is required.
     * @example 2022-03-23 10:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description UserNick.
     *
     * @example test_name
     *
     * @var string
     */
    public $userNick;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'endTime'      => 'EndTime',
        'module'       => 'Module',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'startTime'    => 'StartTime',
        'tid'          => 'Tid',
        'userNick'     => 'UserNick',
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
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
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
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
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
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
