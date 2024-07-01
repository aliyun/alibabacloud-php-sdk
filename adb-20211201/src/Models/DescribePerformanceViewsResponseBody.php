<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewsResponseBody\views;
use AlibabaCloud\Tea\Model;

class DescribePerformanceViewsResponseBody extends Model
{
    /**
     * @example {
     * "PolicyType": "AccountLevelIdentityBasedPolicy",
     * "AuthPrincipalOwnerId": "1*****************7",
     * "AuthPrincipalType": "SubUser",
     * "AuthPrincipalDisplayName": "2***************9",
     * }
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @example 3A8F6106-6AFD-5A34-9C80-8DE2C42D06E8
     *
     * @var string
     */
    public $requestId;

    /**
     * @var views[]
     */
    public $views;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'requestId'          => 'RequestId',
        'views'              => 'Views',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->views) {
            $res['Views'] = [];
            if (null !== $this->views && \is_array($this->views)) {
                $n = 0;
                foreach ($this->views as $item) {
                    $res['Views'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePerformanceViewsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Views'])) {
            if (!empty($map['Views'])) {
                $model->views = [];
                $n            = 0;
                foreach ($map['Views'] as $item) {
                    $model->views[$n++] = null !== $item ? views::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
