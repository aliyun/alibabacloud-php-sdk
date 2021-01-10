<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateOssPostPolicyResponseBody\ossPostPolicy;
use AlibabaCloud\Tea\Model;

class GenerateOssPostPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ossPostPolicy
     */
    public $ossPostPolicy;
    protected $_name = [
        'requestId'     => 'RequestId',
        'ossPostPolicy' => 'OssPostPolicy',
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
        if (null !== $this->ossPostPolicy) {
            $res['OssPostPolicy'] = null !== $this->ossPostPolicy ? $this->ossPostPolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateOssPostPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OssPostPolicy'])) {
            $model->ossPostPolicy = ossPostPolicy::fromMap($map['OssPostPolicy']);
        }

        return $model;
    }
}
