<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListLibraryInstallTasksResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $libraryBizId;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskGroupId;

    /**
     * @var int
     */
    public $taskProcess;

    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var int
     */
    public $executeTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $detail;
    protected $_name = [
        'libraryBizId' => 'LibraryBizId',
        'hostname'     => 'Hostname',
        'endTime'      => 'EndTime',
        'taskType'     => 'TaskType',
        'startTime'    => 'StartTime',
        'taskStatus'   => 'TaskStatus',
        'taskGroupId'  => 'TaskGroupId',
        'taskProcess'  => 'TaskProcess',
        'clusterBizId' => 'ClusterBizId',
        'executeTime'  => 'ExecuteTime',
        'taskId'       => 'TaskId',
        'detail'       => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->libraryBizId) {
            $res['LibraryBizId'] = $this->libraryBizId;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskGroupId) {
            $res['TaskGroupId'] = $this->taskGroupId;
        }
        if (null !== $this->taskProcess) {
            $res['TaskProcess'] = $this->taskProcess;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LibraryBizId'])) {
            $model->libraryBizId = $map['LibraryBizId'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskGroupId'])) {
            $model->taskGroupId = $map['TaskGroupId'];
        }
        if (isset($map['TaskProcess'])) {
            $model->taskProcess = $map['TaskProcess'];
        }
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
