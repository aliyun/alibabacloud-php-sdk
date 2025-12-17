<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetSanityCheckTaskResponseBody\checkDetails;

class GetSanityCheckTaskResponseBody extends Model
{
    /**
     * @var checkDetails[]
     */
    public $checkDetails;

    /**
     * @var string
     */
    public $checkType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $issues;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkDetails' => 'CheckDetails',
        'checkType' => 'CheckType',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'issues' => 'Issues',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->checkDetails)) {
            Model::validateArray($this->checkDetails);
        }
        if (\is_array($this->issues)) {
            Model::validateArray($this->issues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkDetails) {
            if (\is_array($this->checkDetails)) {
                $res['CheckDetails'] = [];
                $n1 = 0;
                foreach ($this->checkDetails as $item1) {
                    $res['CheckDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->issues) {
            if (\is_array($this->issues)) {
                $res['Issues'] = [];
                $n1 = 0;
                foreach ($this->issues as $item1) {
                    $res['Issues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckDetails'])) {
            if (!empty($map['CheckDetails'])) {
                $model->checkDetails = [];
                $n1 = 0;
                foreach ($map['CheckDetails'] as $item1) {
                    $model->checkDetails[$n1] = checkDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Issues'])) {
            if (!empty($map['Issues'])) {
                $model->issues = [];
                $n1 = 0;
                foreach ($map['Issues'] as $item1) {
                    $model->issues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
