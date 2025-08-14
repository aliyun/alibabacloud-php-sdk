<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveResponseBody\resolveResult;

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
        'requestId' => 'RequestId',
        'resolveResult' => 'ResolveResult',
    ];

    public function validate()
    {
        if (null !== $this->resolveResult) {
            $this->resolveResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resolveResult) {
            $res['ResolveResult'] = null !== $this->resolveResult ? $this->resolveResult->toArray($noStream) : $this->resolveResult;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResolveResult'])) {
            $model->resolveResult = resolveResult::fromMap($map['ResolveResult']);
        }

        return $model;
    }
}
