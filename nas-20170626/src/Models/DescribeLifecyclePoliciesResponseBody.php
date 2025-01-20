<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponseBody\lifecyclePolicies;

class DescribeLifecyclePoliciesResponseBody extends Model
{
    /**
     * @var lifecyclePolicies[]
     */
    public $lifecyclePolicies;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->lifecyclePolicies)) {
            Model::validateArray($this->lifecyclePolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lifecyclePolicies) {
            if (\is_array($this->lifecyclePolicies)) {
                $res['LifecyclePolicies'] = [];
                $n1                       = 0;
                foreach ($this->lifecyclePolicies as $item1) {
                    $res['LifecyclePolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LifecyclePolicies'])) {
            if (!empty($map['LifecyclePolicies'])) {
                $model->lifecyclePolicies = [];
                $n1                       = 0;
                foreach ($map['LifecyclePolicies'] as $item1) {
                    $model->lifecyclePolicies[$n1++] = lifecyclePolicies::fromMap($item1);
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
