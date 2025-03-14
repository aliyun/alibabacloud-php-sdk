<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBinarySecurityPoliciesResponseBody\binarySecurityPolicies;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBinarySecurityPoliciesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeBinarySecurityPoliciesResponseBody extends Model
{
    /**
     * @description The information about security policies.
     *
     * @var binarySecurityPolicies[]
     */
    public $binarySecurityPolicies;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example 1EE7B150-D67E-53FD-A52D-3E8E669A****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'binarySecurityPolicies' => 'BinarySecurityPolicies',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->binarySecurityPolicies) {
            $res['BinarySecurityPolicies'] = [];
            if (null !== $this->binarySecurityPolicies && \is_array($this->binarySecurityPolicies)) {
                $n = 0;
                foreach ($this->binarySecurityPolicies as $item) {
                    $res['BinarySecurityPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBinarySecurityPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BinarySecurityPolicies'])) {
            if (!empty($map['BinarySecurityPolicies'])) {
                $model->binarySecurityPolicies = [];
                $n = 0;
                foreach ($map['BinarySecurityPolicies'] as $item) {
                    $model->binarySecurityPolicies[$n++] = null !== $item ? binarySecurityPolicies::fromMap($item) : $item;
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
