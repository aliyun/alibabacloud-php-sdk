<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListSQLExecAuditLogRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * >  The end time supports fuzzy match. Specify the time in the YYYY-MM-DD hh:mm:ss format. We recommend that you use the StartTime and EndTime parameters to specify a time range that does not exceed one day. The returned entries can be displayed by page to improve query efficiency.
     * @example 2021-11-08 11:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The execution status of the SQL statement. Valid values:
     *
     *   **FAIL**: The SQL statement fails to be executed.
     *   **NOEXE**: The SQL statement has not been executed.
     *   **RUNNING**: The SQL statement is being executed.
     *   **CANCEL**: The execution of the SQL statement is canceled.
     *   **SUCCESS**: The SQL statement is executed.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $execState;

    /**
     * @description The nickname of the user who wrote the SQL statement.
     *
     * @example test_OpUserName
     *
     * @var string
     */
    public $opUserName;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. The value cannot exceed 100.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the database or instance based on which you want to query SQL statements.
     *
     * >  If the SQL statements to be queried are at the instance level, you can set this parameter to an instance name. If the SQL statements to be queried are at the database level, you can set this parameter to a database name.
     * @example test_SearchName
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The type of the SQL statement. Valid values:
     *
     *   **SELECT**: the SQL statement that is used to query data.
     *   **INSERT**: the SQL statement that is used to insert data.
     *   **DELETE**: the SQL statement that is used to delete data.
     *   **CREATE_TABLE**: the SQL statement that is used to create tables.
     *
     * >  To view more types of SQL statements, log on to the DMS console and click Security and Specifications. In the left-side navigation pane, click **Operation Audit**. Then, you can view all supported types of SQL statements from the **SQL type** drop-down list.
     * @example SELECT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The beginning of the time range to query.
     *
     * >  The start time supports fuzzy match. Specify the time in the YYYY-MM-DD hh:mm:ss format.
     * @example 2021-11-08 11:04:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to obtain the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'endTime'    => 'EndTime',
        'execState'  => 'ExecState',
        'opUserName' => 'OpUserName',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'searchName' => 'SearchName',
        'sqlType'    => 'SqlType',
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
        if (null !== $this->execState) {
            $res['ExecState'] = $this->execState;
        }
        if (null !== $this->opUserName) {
            $res['OpUserName'] = $this->opUserName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
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
     * @return ListSQLExecAuditLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecState'])) {
            $model->execState = $map['ExecState'];
        }
        if (isset($map['OpUserName'])) {
            $model->opUserName = $map['OpUserName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
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
