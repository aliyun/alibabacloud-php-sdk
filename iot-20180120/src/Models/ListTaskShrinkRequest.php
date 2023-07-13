<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListTaskShrinkRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $deviceShrink;

    /**
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example sGWotgRk***010001
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @example 22dhgg***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example QUEUED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'deviceShrink'  => 'Device',
        'iotInstanceId' => 'IotInstanceId',
        'jobId'         => 'JobId',
        'limit'         => 'Limit',
        'nextToken'     => 'NextToken',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceShrink) {
            $res['Device'] = $this->deviceShrink;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            $model->deviceShrink = $map['Device'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
