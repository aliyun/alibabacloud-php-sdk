<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBinarySecurityPoliciesResponseBody\binarySecurityPolicies;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBinarySecurityPoliciesResponseBody\pageInfo;

class DescribeBinarySecurityPoliciesResponseBody extends Model
{
    /**
     * @var binarySecurityPolicies[]
     */
    public $binarySecurityPolicies;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'binarySecurityPolicies' => 'BinarySecurityPolicies',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->binarySecurityPolicies)) {
            Model::validateArray($this->binarySecurityPolicies);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->binarySecurityPolicies) {
            if (\is_array($this->binarySecurityPolicies)) {
                $res['BinarySecurityPolicies'] = [];
                $n1 = 0;
                foreach ($this->binarySecurityPolicies as $item1) {
                    $res['BinarySecurityPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['BinarySecurityPolicies'])) {
            if (!empty($map['BinarySecurityPolicies'])) {
                $model->binarySecurityPolicies = [];
                $n1 = 0;
                foreach ($map['BinarySecurityPolicies'] as $item1) {
                    $model->binarySecurityPolicies[$n1] = binarySecurityPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
