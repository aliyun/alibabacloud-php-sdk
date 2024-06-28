<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryUserOmsDataRequest extends Model
{
    /**
     * @description The time type of the usage data. Set the parameter based on the description in the documentation of the specified service. Valid values:
     *
     *   Raw
     *   Hour
     *   Day
     *   Month
     *
     * This parameter is required.
     * @example Hour
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The end of the time range to query.
     *
     * This parameter is required.
     * @example 2020-02-21T12:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the record from which the usage data starts to return. The usage data records whose names are alphabetically after the value of the Marker parameter are returned. By default, the usage data starts to return from the earliest record.
     *
     * @example NextToken
     *
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 200. Default value: 100.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
     * @example 2020-02-20T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The service whose usage data you want to query and the details of the usage data. The parameter value is usually set to the code of a service. Various usage models are provided for different services.
     *
     * This parameter is required.
     * @example rds
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'dataType'  => 'DataType',
        'endTime'   => 'EndTime',
        'marker'    => 'Marker',
        'ownerId'   => 'OwnerId',
        'pageSize'  => 'PageSize',
        'startTime' => 'StartTime',
        'table'     => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUserOmsDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        return $model;
    }
}
