<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeLibraryInstallTaskDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $executeTime;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $libraryBizId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskGroupId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $taskProcess;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'clusterBizId' => 'ClusterBizId',
        'detail'       => 'Detail',
        'endTime'      => 'EndTime',
        'executeTime'  => 'ExecuteTime',
        'hostname'     => 'Hostname',
        'libraryBizId' => 'LibraryBizId',
        'requestId'    => 'RequestId',
        'startTime'    => 'StartTime',
        'taskGroupId'  => 'TaskGroupId',
        'taskId'       => 'TaskId',
        'taskProcess'  => 'TaskProcess',
        'taskStatus'   => 'TaskStatus',
        'taskType'     => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->libraryBizId) {
            $res['LibraryBizId'] = $this->libraryBizId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskGroupId) {
            $res['TaskGroupId'] = $this->taskGroupId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskProcess) {
            $res['TaskProcess'] = $this->taskProcess;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLibraryInstallTaskDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['LibraryBizId'])) {
            $model->libraryBizId = $map['LibraryBizId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskGroupId'])) {
            $model->taskGroupId = $map['TaskGroupId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskProcess'])) {
            $model->taskProcess = $map['TaskProcess'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
