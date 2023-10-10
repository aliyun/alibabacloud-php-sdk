<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetSecureTokenResponseBody\secureToken;
use AlibabaCloud\Tea\Model;

class GetSecureTokenResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The message returned for the request.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example D16979DC-4D42-*************
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned security token.
     *
     * @var secureToken
     */
    public $secureToken;
    protected $_name = [
        'code'        => 'Code',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'secureToken' => 'SecureToken',
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
        if (null !== $this->secureToken) {
            $res['SecureToken'] = null !== $this->secureToken ? $this->secureToken->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecureTokenResponseBody
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
        if (isset($map['SecureToken'])) {
            $model->secureToken = secureToken::fromMap($map['SecureToken']);
        }

        return $model;
    }
}
