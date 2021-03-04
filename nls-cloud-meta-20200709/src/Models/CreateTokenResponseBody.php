<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlscloudmeta\V20200709\Models;

use AlibabaCloud\SDK\Nlscloudmeta\V20200709\Models\CreateTokenResponseBody\token;
use AlibabaCloud\Tea\Model;

class CreateTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var token
     */
    public $token;

    /**
     * @var string
     */
    public $nlsRequestId;

    /**
     * @var int
     */
    public $errCode;
    protected $_name = [
        'requestId'    => 'RequestId',
        'errMsg'       => 'ErrMsg',
        'token'        => 'Token',
        'nlsRequestId' => 'NlsRequestId',
        'errCode'      => 'ErrCode',
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
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->token) {
            $res['Token'] = null !== $this->token ? $this->token->toMap() : null;
        }
        if (null !== $this->nlsRequestId) {
            $res['NlsRequestId'] = $this->nlsRequestId;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['Token'])) {
            $model->token = token::fromMap($map['Token']);
        }
        if (isset($map['NlsRequestId'])) {
            $model->nlsRequestId = $map['NlsRequestId'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        return $model;
    }
}
