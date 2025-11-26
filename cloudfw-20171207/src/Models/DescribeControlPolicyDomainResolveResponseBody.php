<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeControlPolicyDomainResolveResponseBody\resolveResult;

class DescribeControlPolicyDomainResolveResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resolveResult[]
     */
    public $resolveResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'resolveResult' => 'ResolveResult',
    ];

    public function validate()
    {
        if (\is_array($this->resolveResult)) {
            Model::validateArray($this->resolveResult);
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
            if (\is_array($this->resolveResult)) {
                $res['ResolveResult'] = [];
                $n1 = 0;
                foreach ($this->resolveResult as $item1) {
                    $res['ResolveResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ResolveResult'])) {
                $model->resolveResult = [];
                $n1 = 0;
                foreach ($map['ResolveResult'] as $item1) {
                    $model->resolveResult[$n1] = resolveResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
