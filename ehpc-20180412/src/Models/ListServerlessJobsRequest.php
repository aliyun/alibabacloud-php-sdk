<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListServerlessJobsRequest extends Model
{
    /**
     * @description The ID of the E-HPC cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The list of serverless job IDs or subtask IDs (array jobs).
     *
     * @var string[]
     */
    public $jobIds;

    /**
     * @description The names of the serverless jobs.
     *
     * @var string[]
     */
    public $jobNames;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID. You can call the [ListRegions](~~188593~~) operation to query the list of regions where E-HPC is supported.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to sort the serverless jobs by the job start time. Valid values:
     *
     *   Asc: ascending order.
     *   Desc: descending order.
     *
     * @example Asc
     *
     * @var string
     */
    public $startOrder;

    /**
     * @description The status of the serverless job. Valid values:
     *
     *   All
     *   Pending
     *   Running
     *   Succeeded
     *   Canceled
     *   Failed
     *
     * Default value: All.
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @description Specifies whether to sort the serverless jobs by the job submission time. Valid values:
     *
     *   Asc: ascending order.
     *   Desc: descending order.
     *
     * @example asc
     *
     * @var string
     */
    public $submitOrder;

    /**
     * @description The latest time at which the job is submitted.
     *
     * >  You can use this parameter to query the job list based on the job submission time.
     * @example 1659521430
     *
     * @var string
     */
    public $submitTimeEnd;

    /**
     * @description The earliest time at which the job is submitted.
     *
     * >  You can use this parameter to query the job list based on the job submission time.
     * @example 1647427667
     *
     * @var string
     */
    public $submitTimeStart;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'jobIds'          => 'JobIds',
        'jobNames'        => 'JobNames',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'startOrder'      => 'StartOrder',
        'state'           => 'State',
        'submitOrder'     => 'SubmitOrder',
        'submitTimeEnd'   => 'SubmitTimeEnd',
        'submitTimeStart' => 'SubmitTimeStart',
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
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }
        if (null !== $this->jobNames) {
            $res['JobNames'] = $this->jobNames;
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
        if (null !== $this->startOrder) {
            $res['StartOrder'] = $this->startOrder;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->submitOrder) {
            $res['SubmitOrder'] = $this->submitOrder;
        }
        if (null !== $this->submitTimeEnd) {
            $res['SubmitTimeEnd'] = $this->submitTimeEnd;
        }
        if (null !== $this->submitTimeStart) {
            $res['SubmitTimeStart'] = $this->submitTimeStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServerlessJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = $map['JobIds'];
            }
        }
        if (isset($map['JobNames'])) {
            if (!empty($map['JobNames'])) {
                $model->jobNames = $map['JobNames'];
            }
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
        if (isset($map['StartOrder'])) {
            $model->startOrder = $map['StartOrder'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SubmitOrder'])) {
            $model->submitOrder = $map['SubmitOrder'];
        }
        if (isset($map['SubmitTimeEnd'])) {
            $model->submitTimeEnd = $map['SubmitTimeEnd'];
        }
        if (isset($map['SubmitTimeStart'])) {
            $model->submitTimeStart = $map['SubmitTimeStart'];
        }

        return $model;
    }
}
