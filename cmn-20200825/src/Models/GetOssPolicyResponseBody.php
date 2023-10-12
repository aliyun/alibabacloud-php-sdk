<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetOssPolicyResponseBody\ossPolicy;
use AlibabaCloud\Tea\Model;

class GetOssPolicyResponseBody extends Model
{
    /**
     * @description 资源上传规则
     *
     * @var ossPolicy
     */
    public $ossPolicy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ossPolicy' => 'OssPolicy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossPolicy) {
            $res['OssPolicy'] = null !== $this->ossPolicy ? $this->ossPolicy->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssPolicy'])) {
            $model->ossPolicy = ossPolicy::fromMap($map['OssPolicy']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
