<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetChatappVerifyCodeResponseBody extends Model
{
    /**
     * @description The HTTP status code returned.
     *
     *   A value of OK indicates that the call is successful.
     *   Other values indicate that the call fails. For more information, see [Error codes](~~196974~~).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned.
     *
     * @example None
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 1612C226-E271-4CFE-9F18-4066D550F91B
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
     * @return GetChatappVerifyCodeResponseBody
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
