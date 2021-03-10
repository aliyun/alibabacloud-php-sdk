<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $deviceShrink;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'limit'         => 'Limit',
        'jobId'         => 'JobId',
        'nextToken'     => 'NextToken',
        'deviceShrink'  => 'Device',
        'status'        => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('limit', $this->limit, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->deviceShrink) {
            $res['Device'] = $this->deviceShrink;
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Device'])) {
            $model->deviceShrink = $map['Device'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
