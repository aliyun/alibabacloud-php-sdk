<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveResponseBody\resolveResult;
use AlibabaCloud\Tea\Model;

class DescribeDomainResolveResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details about the DNS record of the domain name.
     *
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
