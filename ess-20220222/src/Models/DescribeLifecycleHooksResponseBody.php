<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeLifecycleHooksResponseBody\lifecycleHooks;
use AlibabaCloud\Tea\Model;

class DescribeLifecycleHooksResponseBody extends Model
{
    /**
     * @var lifecycleHooks[]
     */
    public $lifecycleHooks;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'lifecycleHooks' => 'LifecycleHooks',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lifecycleHooks) {
            $res['LifecycleHooks'] = [];
            if (null !== $this->lifecycleHooks && \is_array($this->lifecycleHooks)) {
                $n = 0;
                foreach ($this->lifecycleHooks as $item) {
                    $res['LifecycleHooks'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeLifecycleHooksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LifecycleHooks'])) {
            if (!empty($map['LifecycleHooks'])) {
                $model->lifecycleHooks = [];
                $n                     = 0;
                foreach ($map['LifecycleHooks'] as $item) {
                    $model->lifecycleHooks[$n++] = null !== $item ? lifecycleHooks::fromMap($item) : $item;
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
