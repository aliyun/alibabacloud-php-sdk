<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models;

use AlibabaCloud\Tea\Model;

class SmsConversionResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example F655A8D5-B967-440B-8683-DAD6FF8D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status code. If OK is returned, the request is successful. For more information, see [Error codes](~~180674~~).
     *
     * @example OK
     *
     * @var string
     */
    public $responseCode;

    /**
     * @description The description of the status code.
     *
     * @example OK
     *
     * @var string
     */
    public $responseDescription;
    protected $_name = [
        'requestId'           => 'RequestId',
        'responseCode'        => 'ResponseCode',
        'responseDescription' => 'ResponseDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->responseCode) {
            $res['ResponseCode'] = $this->responseCode;
        }
        if (null !== $this->responseDescription) {
            $res['ResponseDescription'] = $this->responseDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SmsConversionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResponseCode'])) {
            $model->responseCode = $map['ResponseCode'];
        }
        if (isset($map['ResponseDescription'])) {
            $model->responseDescription = $map['ResponseDescription'];
        }

        return $model;
    }
}
