<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFullNodesSummaryResponseBody;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFullNodesSummaryResponseBody\fullNodesSummary\cleaningNodes;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFullNodesSummaryResponseBody\fullNodesSummary\holingNodes;
use AlibabaCloud\Tea\Model;

class fullNodesSummary extends Model
{
    /**
     * @var int
     */
    public $cleanCount;

    /**
     * @var holingNodes[]
     */
    public $holingNodes;

    /**
     * @var int
     */
    public $holeCount;

    /**
     * @var cleaningNodes[]
     */
    public $cleaningNodes;

    /**
     * @var int
     */
    public $usedCount;

    /**
     * @var int
     */
    public $unUsedCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cleanCount'    => 'CleanCount',
        'holingNodes'   => 'HolingNodes',
        'holeCount'     => 'HoleCount',
        'cleaningNodes' => 'CleaningNodes',
        'usedCount'     => 'UsedCount',
        'unUsedCount'   => 'UnUsedCount',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cleanCount) {
            $res['CleanCount'] = $this->cleanCount;
        }
        if (null !== $this->holingNodes) {
            $res['HolingNodes'] = [];
            if (null !== $this->holingNodes && \is_array($this->holingNodes)) {
                $n = 0;
                foreach ($this->holingNodes as $item) {
                    $res['HolingNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->holeCount) {
            $res['HoleCount'] = $this->holeCount;
        }
        if (null !== $this->cleaningNodes) {
            $res['CleaningNodes'] = [];
            if (null !== $this->cleaningNodes && \is_array($this->cleaningNodes)) {
                $n = 0;
                foreach ($this->cleaningNodes as $item) {
                    $res['CleaningNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usedCount) {
            $res['UsedCount'] = $this->usedCount;
        }
        if (null !== $this->unUsedCount) {
            $res['UnUsedCount'] = $this->unUsedCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullNodesSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CleanCount'])) {
            $model->cleanCount = $map['CleanCount'];
        }
        if (isset($map['HolingNodes'])) {
            if (!empty($map['HolingNodes'])) {
                $model->holingNodes = [];
                $n                  = 0;
                foreach ($map['HolingNodes'] as $item) {
                    $model->holingNodes[$n++] = null !== $item ? holingNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HoleCount'])) {
            $model->holeCount = $map['HoleCount'];
        }
        if (isset($map['CleaningNodes'])) {
            if (!empty($map['CleaningNodes'])) {
                $model->cleaningNodes = [];
                $n                    = 0;
                foreach ($map['CleaningNodes'] as $item) {
                    $model->cleaningNodes[$n++] = null !== $item ? cleaningNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UsedCount'])) {
            $model->usedCount = $map['UsedCount'];
        }
        if (isset($map['UnUsedCount'])) {
            $model->unUsedCount = $map['UnUsedCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
