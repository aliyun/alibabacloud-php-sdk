<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListProxySQLExecAuditLogRequest extends Model
{
    /**
     * @description The end of the time range to query. The value of this parameter must be a timestamp that follows the UNIX time format.
     *
     * This parameter is required.
     * @example 1636962846000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The execution status of the SQL statement. Valid values:
     *
     *   **FAIL**: The execution of the SQL statement fails.
     *   **CANCEL**: The execution of the SQL statement is canceled.
     *   **SUCCESS**: The SQL statement is executed.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $execState;

    /**
     * @description The alias of the user.
     *
     * @example testNickName
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
     * @description The number of entries to return on each page. Maximum values: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of SQL statement. Valid values:
     *
     *   **SELECT**
     *   **INSERT**
     *   **DELETE**
     *   **CREATE_TABLE**
     *
     * >  You can choose Operation Audit > Secure Access Proxy in the top navigation bar of the DMS console to view more types of SQL statements.
     * @example SELECT
     *
     * @var string
     */
    public $SQLType;

    /**
     * @description The name of the database instance.
     *
     * @example test
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The beginning of the time range to query. The value of this parameter must be a timestamp that follows the UNIX time format.
     *
     * This parameter is required.
     * @example 1636876446000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) operation to query the tenant ID.
     *
     * @example 14****
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
        'SQLType'    => 'SQLType',
        'searchName' => 'SearchName',
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
        if (null !== $this->SQLType) {
            $res['SQLType'] = $this->SQLType;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
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
     * @return ListProxySQLExecAuditLogRequest
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
        if (isset($map['SQLType'])) {
            $model->SQLType = $map['SQLType'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
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
