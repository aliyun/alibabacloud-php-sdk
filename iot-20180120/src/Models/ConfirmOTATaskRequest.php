<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ConfirmOTATaskRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string[]
     */
    public $taskId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmOTATaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['TaskId'])) {
            if (!empty($map['TaskId'])) {
                $model->taskId = $map['TaskId'];
            }
        }

        return $model;
    }
}
