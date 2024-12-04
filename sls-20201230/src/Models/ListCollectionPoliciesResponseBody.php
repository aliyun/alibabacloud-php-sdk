<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\data;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\statistics;
use AlibabaCloud\Tea\Model;

class ListCollectionPoliciesResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentCount;

    /**
     * @description The data of the policies that are matched against the query conditions. The data is returned based on paginated results.
     *
     * @var data[]
     */
    public $data;

    /**
     * @var statistics[]
     */
    public $statistics;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentCount' => 'currentCount',
        'data'         => 'data',
        'statistics'   => 'statistics',
        'totalCount'   => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentCount) {
            $res['currentCount'] = $this->currentCount;
        }
        if (null !== $this->data) {
            $res['data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->statistics) {
            $res['statistics'] = [];
            if (null !== $this->statistics && \is_array($this->statistics)) {
                $n = 0;
                foreach ($this->statistics as $item) {
                    $res['statistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCollectionPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentCount'])) {
            $model->currentCount = $map['currentCount'];
        }
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['statistics'])) {
            if (!empty($map['statistics'])) {
                $model->statistics = [];
                $n                 = 0;
                foreach ($map['statistics'] as $item) {
                    $model->statistics[$n++] = null !== $item ? statistics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
