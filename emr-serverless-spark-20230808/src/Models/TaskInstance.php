<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class TaskInstance extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $creator;

    /**
     * @var string
     */
    public $fenixRunId;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $taskBizId;

    /**
     * @var Task
     */
    public $taskInfo;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $workspaceBizId;
    protected $_name = [
        'bizId'          => 'bizId',
        'creator'        => 'creator',
        'fenixRunId'     => 'fenixRunId',
        'gmtCreated'     => 'gmtCreated',
        'taskBizId'      => 'taskBizId',
        'taskInfo'       => 'taskInfo',
        'taskStatus'     => 'taskStatus',
        'workspaceBizId' => 'workspaceBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->fenixRunId) {
            $res['fenixRunId'] = $this->fenixRunId;
        }
        if (null !== $this->gmtCreated) {
            $res['gmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->taskBizId) {
            $res['taskBizId'] = $this->taskBizId;
        }
        if (null !== $this->taskInfo) {
            $res['taskInfo'] = null !== $this->taskInfo ? $this->taskInfo->toMap() : null;
        }
        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
        }
        if (null !== $this->workspaceBizId) {
            $res['workspaceBizId'] = $this->workspaceBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['fenixRunId'])) {
            $model->fenixRunId = $map['fenixRunId'];
        }
        if (isset($map['gmtCreated'])) {
            $model->gmtCreated = $map['gmtCreated'];
        }
        if (isset($map['taskBizId'])) {
            $model->taskBizId = $map['taskBizId'];
        }
        if (isset($map['taskInfo'])) {
            $model->taskInfo = Task::fromMap($map['taskInfo']);
        }
        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }
        if (isset($map['workspaceBizId'])) {
            $model->workspaceBizId = $map['workspaceBizId'];
        }

        return $model;
    }
}
