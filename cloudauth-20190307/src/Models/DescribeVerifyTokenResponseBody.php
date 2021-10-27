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
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $verifyPageUrl;

    /**
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
