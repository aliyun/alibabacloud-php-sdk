<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstancesResponseBody\instanceResponses;

use AlibabaCloud\Tea\Model;

class instanceResponse extends Model
{
    /**
     * @description The error code returned for the instance. A return value of 200 indicates that the operation is successful. For more information, see the "Error codes" section of this topic.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The current state of the instance.
     *
     * @example Stopping
     *
     * @var string
     */
    public $currentStatus;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp1g6zv0ce8oghu7****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The error message that is returned for the operation on the instance. The return value Success indicates that the operation is successful. For more information, see the "Error codes" section of this topic.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The state of the instance before the operation is called.
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
