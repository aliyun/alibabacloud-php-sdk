<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponseBody\lifecyclePolicies;
use AlibabaCloud\Tea\Model;

class DescribeLifecyclePoliciesResponseBody extends Model
{
    /**
     * @description The queried lifecycle policies.
     *
     * @var lifecyclePolicies[]
     */
    public $lifecyclePolicies;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example BC7C825C-5F65-4B56-BEF6-98C56C7C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of lifecycle policies.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'lifecyclePolicies' => 'LifecyclePolicies',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lifecyclePolicies) {
            $res['LifecyclePolicies'] = [];
            if (null !== $this->lifecyclePolicies && \is_array($this->lifecyclePolicies)) {
                $n = 0;
                foreach ($this->lifecyclePolicies as $item) {
                    $res['LifecyclePolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLifecyclePoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LifecyclePolicies'])) {
            if (!empty($map['LifecyclePolicies'])) {
                $model->lifecyclePolicies = [];
                $n                        = 0;
                foreach ($map['LifecyclePolicies'] as $item) {
                    $model->lifecyclePolicies[$n++] = null !== $item ? lifecyclePolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
