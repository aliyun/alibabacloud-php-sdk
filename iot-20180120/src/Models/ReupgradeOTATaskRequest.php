<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ReupgradeOTATaskRequest extends Model
{
    /**
     * @example iot-v64***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 7glPHmaDYLAYMD1HHutT02****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example y3tOmCDNgpR8F9jnVEzC01****
     *
     * @var string[]
     */
    public $taskId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'jobId'         => 'JobId',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReupgradeOTATaskRequest
     */
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
                $model->taskId = $map['TaskId'];
            }
        }

        return $model;
    }
}
