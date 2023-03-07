<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListJobsWithFiltersRequest extends Model
{
    /**
     * @description Specifies whether to enable asynchronous query.
     *
     * @example false
     *
     * @var bool
     */
    public $async;

    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The latest time when a job is submitted. The value is a UNIX timestamp, which represents the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1647428667
     *
     * @var string
     */
    public $createTimeEnd;

    /**
     * @description The earliest time when a job is submitted. The value is a UNIX timestamp, which represents the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1647427667
     *
     * @var string
     */
    public $createTimeStart;

    /**
     * @description The order in which jobs are sorted based on the execution time. Valid values:
     *
     *   asc: ascending order
     *   desc: descending order
     *
     * @example asc
     *
     * @var string
     */
    public $executeOrder;

    /**
     * @description The name of the job. Fuzzy match is supported.
     *
     * @example job1
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The status of the job. Valid values:
     *
     *   all
     *   finished
     *   notfinish
     *
     * Default value: all
     * @example finished
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @var string[]
     */
    public $nodes;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 50.
     *
     * Default value: 10
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The order in which jobs are sorted based on the time when they queue. Valid values:
     *
     *   asc: ascending order
     *   desc: descending order
     *
     * @example desc
     *
     * @var string
     */
    public $pendOrder;

    /**
     * @var string[]
     */
    public $queues;

    /**
     * @description The ID of the region.
     *
     * You can call the [ListRegions](~~188593~~) operation to query the list of regions where E-HPC is supported.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The order in which jobs are sorted based on the time when they are submitted. Valid values:
     *
     *   asc: ascending order
     *   desc: descending order
     *
     * @example asc
     *
     * @var string
     */
    public $submitOrder;

    /**
     * @var string[]
     */
    public $users;
    protected $_name = [
        'async'           => 'Async',
        'clusterId'       => 'ClusterId',
        'createTimeEnd'   => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'executeOrder'    => 'ExecuteOrder',
        'jobName'         => 'JobName',
        'jobStatus'       => 'JobStatus',
        'nodes'           => 'Nodes',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'pendOrder'       => 'PendOrder',
        'queues'          => 'Queues',
        'regionId'        => 'RegionId',
        'submitOrder'     => 'SubmitOrder',
        'users'           => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }
        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }
        if (null !== $this->executeOrder) {
            $res['ExecuteOrder'] = $this->executeOrder;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pendOrder) {
            $res['PendOrder'] = $this->pendOrder;
        }
        if (null !== $this->queues) {
            $res['Queues'] = $this->queues;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->submitOrder) {
            $res['SubmitOrder'] = $this->submitOrder;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobsWithFiltersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }
        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }
        if (isset($map['ExecuteOrder'])) {
            $model->executeOrder = $map['ExecuteOrder'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = $map['Nodes'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PendOrder'])) {
            $model->pendOrder = $map['PendOrder'];
        }
        if (isset($map['Queues'])) {
            if (!empty($map['Queues'])) {
                $model->queues = $map['Queues'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubmitOrder'])) {
            $model->submitOrder = $map['SubmitOrder'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
