<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\AttachKeyPairResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The simple application server ID.
     *
     * @example aa6e71ddb35c46679bc4753d6219d604
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The response message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the key pair is bound to the simple application server successfully. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'instanceId' => 'InstanceId',
        'message' => 'Message',
        'success' => 'Success',
    ];

    public function validate() {}

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
     * @return results
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
