<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenResponseBody\ossUploadToken;
use AlibabaCloud\Tea\Model;

class DescribeVerifyTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $verifyPageUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $verifyToken;

    /**
     * @var ossUploadToken
     */
    public $ossUploadToken;
    protected $_name = [
        'verifyPageUrl'  => 'VerifyPageUrl',
        'requestId'      => 'RequestId',
        'verifyToken'    => 'VerifyToken',
        'ossUploadToken' => 'OssUploadToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verifyPageUrl) {
            $res['VerifyPageUrl'] = $this->verifyPageUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->verifyToken) {
            $res['VerifyToken'] = $this->verifyToken;
        }
        if (null !== $this->ossUploadToken) {
            $res['OssUploadToken'] = null !== $this->ossUploadToken ? $this->ossUploadToken->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifyTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VerifyPageUrl'])) {
            $model->verifyPageUrl = $map['VerifyPageUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VerifyToken'])) {
            $model->verifyToken = $map['VerifyToken'];
        }
        if (isset($map['OssUploadToken'])) {
            $model->ossUploadToken = ossUploadToken::fromMap($map['OssUploadToken']);
        }

        return $model;
    }
}
