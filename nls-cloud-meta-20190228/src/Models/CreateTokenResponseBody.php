<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlscloudmeta\V20190228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nlscloudmeta\V20190228\Models\CreateTokenResponseBody\token;

class CreateTokenResponseBody extends Model
{
    /**
     * @var int
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $nlsRequestId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var token
     */
    public $token;
    protected $_name = [
        'errCode' => 'ErrCode',
        'errMsg' => 'ErrMsg',
        'nlsRequestId' => 'NlsRequestId',
        'requestId' => 'RequestId',
        'token' => 'Token',
    ];

    public function validate()
    {
        if (null !== $this->token) {
            $this->token->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }

        if (null !== $this->nlsRequestId) {
            $res['NlsRequestId'] = $this->nlsRequestId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->token) {
            $res['Token'] = null !== $this->token ? $this->token->toArray($noStream) : $this->token;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        if (isset($map['NlsRequestId'])) {
            $model->nlsRequestId = $map['NlsRequestId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Token'])) {
            $model->token = token::fromMap($map['Token']);
        }

        return $model;
    }
}
