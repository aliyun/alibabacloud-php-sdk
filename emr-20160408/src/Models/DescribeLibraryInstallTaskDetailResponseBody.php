<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeLibraryInstallTaskDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskGroupId;

    /**
     * @var int
     */
    public $executeTime;

    /**
     * @var string
     */
    public $hostname;

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
    public $libraryBizId;

    /**
     * @var int
     */
    public $taskProcess;

    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $detail;
    protected $_name = [
        'taskId'       => 'TaskId',
        'endTime'      => 'EndTime',
        'requestId'    => 'RequestId',
        'taskGroupId'  => 'TaskGroupId',
        'executeTime'  => 'ExecuteTime',
        'hostname'     => 'Hostname',
        'startTime'    => 'StartTime',
        'taskStatus'   => 'TaskStatus',
        'libraryBizId' => 'LibraryBizId',
        'taskProcess'  => 'TaskProcess',
        'clusterBizId' => 'ClusterBizId',
        'taskType'     => 'TaskType',
        'detail'       => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskGroupId) {
            $res['TaskGroupId'] = $this->taskGroupId;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->libraryBizId) {
            $res['LibraryBizId'] = $this->libraryBizId;
        }
        if (null !== $this->taskProcess) {
            $res['TaskProcess'] = $this->taskProcess;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskGroupId'])) {
            $model->taskGroupId = $map['TaskGroupId'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['LibraryBizId'])) {
            $model->libraryBizId = $map['LibraryBizId'];
        }
        if (isset($map['TaskProcess'])) {
            $model->taskProcess = $map['TaskProcess'];
        }
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
