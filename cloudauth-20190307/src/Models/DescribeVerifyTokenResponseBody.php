<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenResponseBody\ossUploadToken;
use AlibabaCloud\Tea\Model;

class DescribeVerifyTokenResponseBody extends Model
{
    /**
     * @var ossUploadToken
     */
    public $ossUploadToken;

    /**
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @example http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg
     *
     * @var string
     */
    public $verifyPageUrl;

    /**
     * @example c302c0797679457685410ee51a5ba375
     *
     * @var string
     */
    public $verifyToken;
    protected $_name = [
        'ossUploadToken' => 'OssUploadToken',
        'requestId'      => 'RequestId',
        'verifyPageUrl'  => 'VerifyPageUrl',
        'verifyToken'    => 'VerifyToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossUploadToken) {
            $res['OssUploadToken'] = null !== $this->ossUploadToken ? $this->ossUploadToken->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->verifyPageUrl) {
            $res['VerifyPageUrl'] = $this->verifyPageUrl;
        }
        if (null !== $this->verifyToken) {
            $res['VerifyToken'] = $this->verifyToken;
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
        if (isset($map['OssUploadToken'])) {
            $model->ossUploadToken = ossUploadToken::fromMap($map['OssUploadToken']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VerifyPageUrl'])) {
            $model->verifyPageUrl = $map['VerifyPageUrl'];
        }
        if (isset($map['VerifyToken'])) {
            $model->verifyToken = $map['VerifyToken'];
        }

        return $model;
    }
}
