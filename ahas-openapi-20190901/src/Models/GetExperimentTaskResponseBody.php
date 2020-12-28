<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetExperimentTaskResponseBody\activities;
use AlibabaCloud\Tea\Model;

class GetExperimentTaskResponseBody extends Model
{
    /**
     * @var activities[]
     */
    public $activities;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $experimentName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'activities'     => 'Activities',
        'taskId'         => 'TaskId',
        'requestId'      => 'RequestId',
        'experimentName' => 'ExperimentName',
        'state'          => 'State',
        'experimentId'   => 'ExperimentId',
        'httpStatusCode' => 'HttpStatusCode',
        'startTime'      => 'StartTime',
        'success'        => 'Success',
        'result'         => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activities) {
            $res['Activities'] = [];
            if (null !== $this->activities && \is_array($this->activities)) {
                $n = 0;
                foreach ($this->activities as $item) {
                    $res['Activities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->experimentName) {
            $res['ExperimentName'] = $this->experimentName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExperimentTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Activities'])) {
            if (!empty($map['Activities'])) {
                $model->activities = [];
                $n                 = 0;
                foreach ($map['Activities'] as $item) {
                    $model->activities[$n++] = null !== $item ? activities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExperimentName'])) {
            $model->experimentName = $map['ExperimentName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
