<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody;

use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\labelStatChart;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\y;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\z;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var labelStatChart[]
     */
    public $labelStatChart;

    /**
     * @var mixed[]
     */
    public $totalStat;

    /**
     * @var string[]
     */
    public $uids;

    /**
     * @var string[]
     */
    public $x;

    /**
     * @var y[]
     */
    public $y;

    /**
     * @var z[]
     */
    public $z;
    protected $_name = [
        'labelStatChart' => 'LabelStatChart',
        'totalStat' => 'TotalStat',
        'uids' => 'Uids',
        'x' => 'X',
        'y' => 'Y',
        'z' => 'Z',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelStatChart) {
            $res['LabelStatChart'] = [];
            if (null !== $this->labelStatChart && \is_array($this->labelStatChart)) {
                $n = 0;
                foreach ($this->labelStatChart as $item) {
                    $res['LabelStatChart'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalStat) {
            $res['TotalStat'] = $this->totalStat;
        }
        if (null !== $this->uids) {
            $res['Uids'] = $this->uids;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = [];
            if (null !== $this->y && \is_array($this->y)) {
                $n = 0;
                foreach ($this->y as $item) {
                    $res['Y'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->z) {
            $res['Z'] = [];
            if (null !== $this->z && \is_array($this->z)) {
                $n = 0;
                foreach ($this->z as $item) {
                    $res['Z'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelStatChart'])) {
            if (!empty($map['LabelStatChart'])) {
                $model->labelStatChart = [];
                $n = 0;
                foreach ($map['LabelStatChart'] as $item) {
                    $model->labelStatChart[$n++] = null !== $item ? labelStatChart::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalStat'])) {
            $model->totalStat = $map['TotalStat'];
        }
        if (isset($map['Uids'])) {
            if (!empty($map['Uids'])) {
                $model->uids = $map['Uids'];
            }
        }
        if (isset($map['X'])) {
            if (!empty($map['X'])) {
                $model->x = $map['X'];
            }
        }
        if (isset($map['Y'])) {
            if (!empty($map['Y'])) {
                $model->y = [];
                $n = 0;
                foreach ($map['Y'] as $item) {
                    $model->y[$n++] = null !== $item ? y::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Z'])) {
            if (!empty($map['Z'])) {
                $model->z = [];
                $n = 0;
                foreach ($map['Z'] as $item) {
                    $model->z[$n++] = null !== $item ? z::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
