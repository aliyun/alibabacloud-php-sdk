<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class ReupgradeOTATaskRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string[]
     */
    public $taskId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'jobId' => 'JobId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->taskId)) {
            Model::validateArray($this->taskId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->taskId) {
            if (\is_array($this->taskId)) {
                $res['TaskId'] = [];
                $n1 = 0;
                foreach ($this->taskId as $item1) {
                    $res['TaskId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['TaskId'])) {
            if (!empty($map['TaskId'])) {
                $model->taskId = [];
                $n1 = 0;
                foreach ($map['TaskId'] as $item1) {
                    $model->taskId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
