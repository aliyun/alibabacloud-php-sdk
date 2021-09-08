<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenResponseBody\ossUploadToken;
use AlibabaCloud\Tea\Model;

class DescribeOssUploadTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ossUploadToken
     */
    public $ossUploadToken;
    protected $_name = [
        'requestId'      => 'RequestId',
        'ossUploadToken' => 'OssUploadToken',
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
        if (null !== $this->ossUploadToken) {
            $res['OssUploadToken'] = null !== $this->ossUploadToken ? $this->ossUploadToken->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssUploadTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OssUploadToken'])) {
            $model->ossUploadToken = ossUploadToken::fromMap($map['OssUploadToken']);
        }

        return $model;
    }
}
