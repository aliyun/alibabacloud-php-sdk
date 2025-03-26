<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleHooksResponseBody\lifecycleHooks;

class DescribeLifecycleHooksResponseBody extends Model
{
    /**
     * @var lifecycleHooks[]
     */
    public $lifecycleHooks;

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
        'lifecycleHooks' => 'LifecycleHooks',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->lifecycleHooks)) {
            Model::validateArray($this->lifecycleHooks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lifecycleHooks) {
            if (\is_array($this->lifecycleHooks)) {
                $res['LifecycleHooks'] = [];
                $n1 = 0;
                foreach ($this->lifecycleHooks as $item1) {
                    $res['LifecycleHooks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LifecycleHooks'])) {
            if (!empty($map['LifecycleHooks'])) {
                $model->lifecycleHooks = [];
                $n1 = 0;
                foreach ($map['LifecycleHooks'] as $item1) {
                    $model->lifecycleHooks[$n1++] = lifecycleHooks::fromMap($item1);
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
