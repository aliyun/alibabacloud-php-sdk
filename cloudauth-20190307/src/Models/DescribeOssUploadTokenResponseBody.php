<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenResponseBody\ossUploadToken;
use AlibabaCloud\Tea\Model;

class DescribeOssUploadTokenResponseBody extends Model
{
    /**
     * @var ossUploadToken
     */
    public $ossUploadToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ossUploadToken' => 'OssUploadToken',
        'requestId'      => 'RequestId',
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
        if (isset($map['OssUploadToken'])) {
            $model->ossUploadToken = ossUploadToken::fromMap($map['OssUploadToken']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
