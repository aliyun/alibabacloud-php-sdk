<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Opt\V20210730\Models;

use AlibabaCloud\Tea\Model;

class GetOpenStatusResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @example {"gmtModified":"2021-07-27T04:00:00.000+00:00","mpStatus":1,"id":11,"pk":"1084126944995576","gmtCreate":"2021-07-27T04:00:00.000+00:00","parentPk":"1084126944995576"}
     *
     * @var mixed[]
     */
    public $data;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 0EB-FCAC-1B78-BBB8-500ED951E9EB
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
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return GetOpenStatusResponseBody
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
