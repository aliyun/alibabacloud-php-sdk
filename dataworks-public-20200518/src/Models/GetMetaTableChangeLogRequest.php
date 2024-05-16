<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableChangeLogRequest extends Model
{
    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format.
     *
     *   By default, the system uses the current time as the value of this parameter if the time that you specify is invalid.
     *   If both the values of the StartDate and EndDate parameters are invalid, the system automatically queries the change logs that are generated within the last 30 days.
     *
     * @example ALTER_TABLE
     *
     * @var string
     */
    public $changeType;

    /**
     * @description The error message returned.
     *
     * @example 2020-06-02 00:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format.
     *
     *   By default, the system uses the current time as the value of this parameter if the time that you specify is invalid.
     *   If both the values of the StartDate and EndDate parameters are invalid, the system automatically queries the change logs that are generated within the last 30 days.
     *
     * @example TABLE
     *
     * @var string
     */
    public $objectType;

    /**
     * @description The globally unique identifier (GUID) of the table. Specify the GUID in the format of odps.projectName.tableName. You can call the [GetMetaDBTableList](https://help.aliyun.com/document_detail/173916.html) operation to query the GUID of the table.
     *
     * >  To query the change logs of a MaxCompute table, you must call the [GetMetaTableChangeLog](https://help.aliyun.com/document_detail/173925.html) operation.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The type of the change. Valid values: CREATE_TABLE, ALTER_TABLE, DROP_TABLE, ADD_PARTITION, and DROP_PARTITION.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The HTTP status code returned.
     *
     * @example 2020-06-01 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The entity on which the change is made. Valid values: TABLE and PARTITION.
     *
     * This parameter is required.
     * @example odps.engine_name.table_name
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'changeType' => 'ChangeType',
        'endDate'    => 'EndDate',
        'objectType' => 'ObjectType',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'startDate'  => 'StartDate',
        'tableGuid'  => 'TableGuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaTableChangeLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
