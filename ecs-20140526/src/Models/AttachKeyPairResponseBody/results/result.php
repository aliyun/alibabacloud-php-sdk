<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AttachKeyPairResponseBody\results;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The operation status code returned. 200 indicates that the operation was successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The instance ID.
     *
     * @example i-m5eg7be9ndloji64****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The operation information returned. When the value of Code is 200, the value of Message is successful.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'instanceId' => 'InstanceId',
        'message'    => 'Message',
        'success'    => 'Success',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
