<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetThingPropertySnapshotResponseBody extends Model
{
    /**
     * @example 400
     *
     * @var string
     */
    public $code;

    /**
     * @example {\"StreamVideoQuality\":{\"time\":1699951400324,\"value\":\"0\"},\"MotionDetectSensitivity\":{\"time\":1699951400324,\"value\":\"0\"},\"ImageFlipState\":{\"time\":1699951400324,\"value\":\"0\"},\"SubStreamVideoQuality\":{\"time\":1699951400324,\"value\":\"0\"},\"AlarmSwitch\":{\"time\":1699951400324,\"value\":\"0\"},\"AlarmFrequencyLevel\":{\"time\":1700009930921,\"value\":\"10\"}}
     *
     * @var string
     */
    public $data;

    /**
     * @example Request parameter error.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example E55***B7-4***-4***-8***-D3******F565
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'data'         => 'Data',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetThingPropertySnapshotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
