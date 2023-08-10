<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDtsServiceLogRequest extends Model
{
    /**
     * @description The ID of the data migration or synchronization task.
     *
     * @example c1yr56py103****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The end of the time range to query. You can call the [DescribePreCheckStatus](~~209718~~) operation to query the execution time of the subtasks.
     *
     * > *   To obtain the logs that are generated for DTS subtasks within a specific period of time, you can call the [DescribePreCheckStatus](~~209718~~) operation to query the execution time of the subtasks.
     * >*   Specify the time in the 13-digit UNIX timestamp format. Unit: milliseconds. You can use a search engine to obtain a UNIX timestamp converter.
     * @example 1620897227000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The keyword that is passed to specify the query content.
     *
     * >  Fuzzy match is used and the keyword is case-sensitive.
     * @example state = IDLE
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than 0 and less than or equal to the maximum value supported by the integer data type. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of log entries to return on each page. Valid values: **20**, **50**, **100**, **500**, and **1000**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region in which the DTS instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query.
     *
     * > *   To obtain the logs that are generated for Data Transmission Service (DTS) subtasks within a specific period of time, you can call the [DescribePreCheckStatus](~~209718~~) operation to query the execution time of the subtasks.
     * >*   Specify the time in the 13-digit UNIX timestamp format. Unit: milliseconds. You can use a search engine to obtain a UNIX timestamp converter.
     * @example 1620896327000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The log level. Separate multiple log levels with commas (,). Valid values:
     *
     *   **NORMAL**: displays the logs that are generated when the DTS task runs as expected.
     *   **WARN**: displays the logs about severe issues that stop the DTS task from running.
     *   **ERROR**: displays the logs about unexpected issues that stop specific processes form running.
     *
     * @example NORMAL,WARN,ERROR
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of a DTS subtask. Valid values:
     *
     *   **DATA_LOAD**: full migration or full synchronization
     *   **ONLINE_WRITER**: incremental migration
     *   **SYNC_WRITER**: incremental synchronization
     *
     * @example SYNC_WRITER
     *
     * @var string
     */
    public $subJobType;
    protected $_name = [
        'dtsJobId'   => 'DtsJobId',
        'endTime'    => 'EndTime',
        'keyword'    => 'Keyword',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
        'subJobType' => 'SubJobType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subJobType) {
            $res['SubJobType'] = $this->subJobType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDtsServiceLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubJobType'])) {
            $model->subJobType = $map['SubJobType'];
        }

        return $model;
    }
}
