<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstancesResponseBody\instanceResponses;

use AlibabaCloud\Tea\Model;

class instanceResponse extends Model
{
    /**
     * @description The error code returned for the instance. A return value of 200 indicates that the operation was successful. For more information, see the "Error codes" section of this topic.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The current status of the instance.
     *
     * @example Stopping
     *
     * @var string
     */
    public $currentStatus;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The error message returned for the instance. A return value of success indicates that the operation was successful. For more information, see the "Error codes" section of this topic.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The status of the instance before the operation was called.
     *
     * @example Running
     *
     * @var string
     */
    public $previousStatus;
    protected $_name = [
        'code'           => 'Code',
        'currentStatus'  => 'CurrentStatus',
        'instanceId'     => 'InstanceId',
        'message'        => 'Message',
        'previousStatus' => 'PreviousStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->currentStatus) {
            $res['CurrentStatus'] = $this->currentStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->previousStatus) {
            $res['PreviousStatus'] = $this->previousStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CurrentStatus'])) {
            $model->currentStatus = $map['CurrentStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PreviousStatus'])) {
            $model->previousStatus = $map['PreviousStatus'];
        }

        return $model;
    }
}
