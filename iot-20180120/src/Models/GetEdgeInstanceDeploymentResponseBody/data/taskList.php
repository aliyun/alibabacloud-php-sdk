<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceDeploymentResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceDeploymentResponseBody\data\taskList\resourceSnapshotList;
use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @example jQWf3MVgQjMzcwsY****000101
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example 2019-06-26 18:12:35
     *
     * @var string
     */
    public $gmtCompleted;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtCompletedTimestamp;

    /**
     * @example 2019-06-26 18:12:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @example 2019-06-26 18:12:35
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @var resourceSnapshotList[]
     */
    public $resourceSnapshotList;

    /**
     * @example 32
     *
     * @var int
     */
    public $stage;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @example 49ea651529014bf8b5645d5f9062****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'gatewayId'             => 'GatewayId',
        'gmtCompleted'          => 'GmtCompleted',
        'gmtCompletedTimestamp' => 'GmtCompletedTimestamp',
        'gmtCreate'             => 'GmtCreate',
        'gmtCreateTimestamp'    => 'GmtCreateTimestamp',
        'gmtModified'           => 'GmtModified',
        'gmtModifiedTimestamp'  => 'GmtModifiedTimestamp',
        'resourceSnapshotList'  => 'ResourceSnapshotList',
        'stage'                 => 'Stage',
        'status'                => 'Status',
        'taskId'                => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gmtCompleted) {
            $res['GmtCompleted'] = $this->gmtCompleted;
        }
        if (null !== $this->gmtCompletedTimestamp) {
            $res['GmtCompletedTimestamp'] = $this->gmtCompletedTimestamp;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->resourceSnapshotList) {
            $res['ResourceSnapshotList'] = [];
            if (null !== $this->resourceSnapshotList && \is_array($this->resourceSnapshotList)) {
                $n = 0;
                foreach ($this->resourceSnapshotList as $item) {
                    $res['ResourceSnapshotList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GmtCompleted'])) {
            $model->gmtCompleted = $map['GmtCompleted'];
        }
        if (isset($map['GmtCompletedTimestamp'])) {
            $model->gmtCompletedTimestamp = $map['GmtCompletedTimestamp'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['ResourceSnapshotList'])) {
            if (!empty($map['ResourceSnapshotList'])) {
                $model->resourceSnapshotList = [];
                $n                           = 0;
                foreach ($map['ResourceSnapshotList'] as $item) {
                    $model->resourceSnapshotList[$n++] = null !== $item ? resourceSnapshotList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
