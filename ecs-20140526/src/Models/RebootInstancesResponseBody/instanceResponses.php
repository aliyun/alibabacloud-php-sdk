<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RebootInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instanceResponses extends Model
{
    /**
     * @var string
     */
    public $currentStatus;

    /**
     * @var string
     */
    public $previousStatus;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'currentStatus'  => 'CurrentStatus',
        'previousStatus' => 'PreviousStatus',
        'code'           => 'Code',
        'message'        => 'Message',
        'instanceId'     => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentStatus) {
            $res['CurrentStatus'] = $this->currentStatus;
        }
        if (null !== $this->previousStatus) {
            $res['PreviousStatus'] = $this->previousStatus;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceResponses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentStatus'])) {
            $model->currentStatus = $map['CurrentStatus'];
        }
        if (isset($map['PreviousStatus'])) {
            $model->previousStatus = $map['PreviousStatus'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
