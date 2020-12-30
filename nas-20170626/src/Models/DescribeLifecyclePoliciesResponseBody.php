<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponseBody\lifecyclePolicies;
use AlibabaCloud\Tea\Model;

class DescribeLifecyclePoliciesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var lifecyclePolicies[]
     */
    public $lifecyclePolicies;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'requestId'         => 'RequestId',
        'pageSize'          => 'PageSize',
        'pageNumber'        => 'PageNumber',
        'lifecyclePolicies' => 'LifecyclePolicies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->lifecyclePolicies) {
            $res['LifecyclePolicies'] = [];
            if (null !== $this->lifecyclePolicies && \is_array($this->lifecyclePolicies)) {
                $n = 0;
                foreach ($this->lifecyclePolicies as $item) {
                    $res['LifecyclePolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['LifecyclePolicies'])) {
            if (!empty($map['LifecyclePolicies'])) {
                $model->lifecyclePolicies = [];
                $n                        = 0;
                foreach ($map['LifecyclePolicies'] as $item) {
                    $model->lifecyclePolicies[$n++] = null !== $item ? lifecyclePolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
