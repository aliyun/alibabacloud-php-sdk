<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceDeploymentResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetEdgeInstanceDeploymentResponse\data\taskList\resourceSnapshotList;
use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gmtCompleted;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $stage;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @var int
     */
    public $gmtCompletedTimestamp;

    /**
     * @var resourceSnapshotList[]
     */
    public $resourceSnapshotList;
    protected $_name = [
        'gmtCreate'             => 'GmtCreate',
        'gmtModified'           => 'GmtModified',
        'gmtCompleted'          => 'GmtCompleted',
        'gatewayId'             => 'GatewayId',
        'taskId'                => 'TaskId',
        'stage'                 => 'Stage',
        'status'                => 'Status',
        'gmtCreateTimestamp'    => 'GmtCreateTimestamp',
        'gmtModifiedTimestamp'  => 'GmtModifiedTimestamp',
        'gmtCompletedTimestamp' => 'GmtCompletedTimestamp',
        'resourceSnapshotList'  => 'ResourceSnapshotList',
    ];

    public function validate()
    {
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('gmtCompleted', $this->gmtCompleted, true);
        Model::validateRequired('gatewayId', $this->gatewayId, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('stage', $this->stage, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('gmtCreateTimestamp', $this->gmtCreateTimestamp, true);
        Model::validateRequired('gmtModifiedTimestamp', $this->gmtModifiedTimestamp, true);
        Model::validateRequired('gmtCompletedTimestamp', $this->gmtCompletedTimestamp, true);
        Model::validateRequired('resourceSnapshotList', $this->resourceSnapshotList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtCompleted) {
            $res['GmtCompleted'] = $this->gmtCompleted;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->gmtCompletedTimestamp) {
            $res['GmtCompletedTimestamp'] = $this->gmtCompletedTimestamp;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtCompleted'])) {
            $model->gmtCompleted = $map['GmtCompleted'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['GmtCompletedTimestamp'])) {
            $model->gmtCompletedTimestamp = $map['GmtCompletedTimestamp'];
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

        return $model;
    }
}
