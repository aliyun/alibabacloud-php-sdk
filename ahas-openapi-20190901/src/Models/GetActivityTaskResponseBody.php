<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetActivityTaskResponseBody\hosts;
use AlibabaCloud\Tea\Model;

class GetActivityTaskResponseBody extends Model
{
    /**
     * @var hosts[]
     */
    public $hosts;

    /**
     * @var string
     */
    public $phase;

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
    public $activityName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $experimentTaskId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $runResult;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'hosts'            => 'Hosts',
        'phase'            => 'Phase',
        'endTime'          => 'EndTime',
        'requestId'        => 'RequestId',
        'activityName'     => 'ActivityName',
        'state'            => 'State',
        'activityId'       => 'ActivityId',
        'experimentTaskId' => 'ExperimentTaskId',
        'httpStatusCode'   => 'HttpStatusCode',
        'startTime'        => 'StartTime',
        'runResult'        => 'RunResult',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hosts) {
            $res['Hosts'] = [];
            if (null !== $this->hosts && \is_array($this->hosts)) {
                $n = 0;
                foreach ($this->hosts as $item) {
                    $res['Hosts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->experimentTaskId) {
            $res['ExperimentTaskId'] = $this->experimentTaskId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->runResult) {
            $res['RunResult'] = $this->runResult;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetActivityTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n            = 0;
                foreach ($map['Hosts'] as $item) {
                    $model->hosts[$n++] = null !== $item ? hosts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['ExperimentTaskId'])) {
            $model->experimentTaskId = $map['ExperimentTaskId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RunResult'])) {
            $model->runResult = $map['RunResult'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
