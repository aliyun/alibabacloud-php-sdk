<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeOssUploadTokenResponseBody\ossUploadToken;

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
        if (null !== $this->ossUploadToken) {
            $this->ossUploadToken->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossUploadToken) {
            $res['OssUploadToken'] = null !== $this->ossUploadToken ? $this->ossUploadToken->toArray($noStream) : $this->ossUploadToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OssUploadToken'])) {
            $model->ossUploadToken = ossUploadToken::fromMap($map['OssUploadToken']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
