<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstancePerformanceRestrictHistoryResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstancePerformanceRestrictHistoryResponseBody\performanceRestrictHistories\performanceRestrictHistory;
use AlibabaCloud\Tea\Model;

class performanceRestrictHistories extends Model
{
    /**
     * @var performanceRestrictHistory[]
     */
    public $performanceRestrictHistory;
    protected $_name = [
        'performanceRestrictHistory' => 'PerformanceRestrictHistory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->performanceRestrictHistory) {
            $res['PerformanceRestrictHistory'] = [];
            if (null !== $this->performanceRestrictHistory && \is_array($this->performanceRestrictHistory)) {
                $n = 0;
                foreach ($this->performanceRestrictHistory as $item) {
                    $res['PerformanceRestrictHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceRestrictHistories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerformanceRestrictHistory'])) {
            if (!empty($map['PerformanceRestrictHistory'])) {
                $model->performanceRestrictHistory = [];
                $n                                 = 0;
                foreach ($map['PerformanceRestrictHistory'] as $item) {
                    $model->performanceRestrictHistory[$n++] = null !== $item ? performanceRestrictHistory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
