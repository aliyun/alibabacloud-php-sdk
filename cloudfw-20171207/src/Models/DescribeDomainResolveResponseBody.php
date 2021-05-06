<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveResponseBody\resolveResult;
use AlibabaCloud\Tea\Model;

class DescribeDomainResolveResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resolveResult
     */
    public $resolveResult;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resolveResult' => 'ResolveResult',
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
        if (null !== $this->resolveResult) {
            $res['ResolveResult'] = null !== $this->resolveResult ? $this->resolveResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainResolveResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResolveResult'])) {
            $model->resolveResult = resolveResult::fromMap($map['ResolveResult']);
        }

        return $model;
    }
}
