<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AddDevicesResponseBody extends Model
{
    /**
     * @description The execution result. If the request was successful, `success` is returned. If the request failed, an error message is returned.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned error message. This parameter is not returned if the value of Code is `success`.
     *
     * @example The parameter is not specified.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example A87DBB05-653A-5E4B-B72B-5F4A1E07****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
