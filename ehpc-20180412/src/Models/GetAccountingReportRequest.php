<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetAccountingReportRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The layers at which you want to query the bandwidth and traffic data. Valid values:
     *
     *   user: Query by user.
     *   queue: Query by queue.
     *   instance: Query by instance.
     *
     * @example user
     *
     * @var string
     */
    public $dim;

    /**
     * @description The end of the time range to query. This value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1577441873
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The actual name of the dimension to be queried. Valid values:
     *
     *   If you set the value of the parameter Dim to user, the value of FilterValue is the name of the specified user.
     *   If you set the value of the parameter Dim to queue, the value of FilterValue is the name of the specified queue.
     *   If you set the value of the parameter Dim to instance, the value of FilterValue is the instance name.
     *
     * @example userNo1
     *
     * @var string
     */
    public $filterValue;

    /**
     * @description The ID of the job.
     *
     * @example [{Id: 1.scheduler}]
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 50.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page number of the returned page.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query type. Valid values:
     *
     *   total_report: Queries the number of CPU cores in different dimensions.
     *   job_report: Collects the historical node data of a node.
     *   number_report: Queries job information in different dimensions.
     *
     * @example job_report
     *
     * @var string
     */
    public $reportType;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1576922873
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'dim'         => 'Dim',
        'endTime'     => 'EndTime',
        'filterValue' => 'FilterValue',
        'jobId'       => 'JobId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'reportType'  => 'ReportType',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dim) {
            $res['Dim'] = $this->dim;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->filterValue) {
            $res['FilterValue'] = $this->filterValue;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountingReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Dim'])) {
            $model->dim = $map['Dim'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FilterValue'])) {
            $model->filterValue = $map['FilterValue'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
