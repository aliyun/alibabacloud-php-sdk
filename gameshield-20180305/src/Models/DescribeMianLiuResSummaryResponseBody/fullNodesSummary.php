<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeMianLiuResSummaryResponseBody;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeMianLiuResSummaryResponseBody\fullNodesSummary\nodes;
use AlibabaCloud\Tea\Model;

class fullNodesSummary extends Model
{
    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var int
     */
    public $cleanCount;

    /**
     * @var int
     */
    public $holeCount;

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
        'nodes'       => 'Nodes',
        'cleanCount'  => 'CleanCount',
        'holeCount'   => 'HoleCount',
        'usedCount'   => 'UsedCount',
        'unUsedCount' => 'UnUsedCount',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cleanCount) {
            $res['CleanCount'] = $this->cleanCount;
        }
        if (null !== $this->holeCount) {
            $res['HoleCount'] = $this->holeCount;
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
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CleanCount'])) {
            $model->cleanCount = $map['CleanCount'];
        }
        if (isset($map['HoleCount'])) {
            $model->holeCount = $map['HoleCount'];
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
