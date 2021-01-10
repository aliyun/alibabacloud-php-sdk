<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceDeploymentResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceDeploymentResponseBody\data\taskList\resourceSnapshotList;
use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var int
     */
    public $status;

    /**
     * @var resourceSnapshotList[]
     */
    public $resourceSnapshotList;

    /**
     * @var int
     */
    public $stage;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @var string
     */
    public $gmtCompleted;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtCompletedTimestamp;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'gmtCreateTimestamp'    => 'GmtCreateTimestamp',
        'status'                => 'Status',
        'resourceSnapshotList'  => 'ResourceSnapshotList',
        'stage'                 => 'Stage',
        'gatewayId'             => 'GatewayId',
        'gmtModifiedTimestamp'  => 'GmtModifiedTimestamp',
        'gmtCompleted'          => 'GmtCompleted',
        'gmtCreate'             => 'GmtCreate',
        'gmtCompletedTimestamp' => 'GmtCompletedTimestamp',
        'gmtModified'           => 'GmtModified',
        'taskId'                => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->gmtCompleted) {
            $res['GmtCompleted'] = $this->gmtCompleted;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCompletedTimestamp) {
            $res['GmtCompletedTimestamp'] = $this->gmtCompletedTimestamp;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['GmtCompleted'])) {
            $model->gmtCompleted = $map['GmtCompleted'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCompletedTimestamp'])) {
            $model->gmtCompletedTimestamp = $map['GmtCompletedTimestamp'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
