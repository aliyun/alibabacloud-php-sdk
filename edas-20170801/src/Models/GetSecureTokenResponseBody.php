<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetSecureTokenResponseBody\secureToken;
use AlibabaCloud\Tea\Model;

class GetSecureTokenResponseBody extends Model
{
    /**
     * @var secureToken
     */
    public $secureToken;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'secureToken' => 'SecureToken',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'code'        => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secureToken) {
            $res['SecureToken'] = null !== $this->secureToken ? $this->secureToken->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['SecureToken'])) {
            $model->secureToken = secureToken::fromMap($map['SecureToken']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
