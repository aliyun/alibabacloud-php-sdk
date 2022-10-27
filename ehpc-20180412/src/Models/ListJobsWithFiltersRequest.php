<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListJobsWithFiltersRequest extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $createTimeEnd;

    /**
     * @var string
     */
    public $createTimeStart;

    /**
     * @var string
     */
    public $executeOrder;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string[]
     */
    public $nodes;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pendOrder;

    /**
     * @var string[]
     */
    public $queues;

    /**
     * @var string
     */
    public $regionId;

    /**
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
