<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\labelStatChart;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\y;
use AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data\z;

class data extends Model
{
    /**
     * @var labelStatChart[]
     */
    public $labelStatChart;

    /**
     * @var mixed[][]
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

    public function validate()
    {
        if (\is_array($this->labelStatChart)) {
            Model::validateArray($this->labelStatChart);
        }
        if (\is_array($this->totalStat)) {
            Model::validateArray($this->totalStat);
        }
        if (\is_array($this->uids)) {
            Model::validateArray($this->uids);
        }
        if (\is_array($this->x)) {
            Model::validateArray($this->x);
        }
        if (\is_array($this->y)) {
            Model::validateArray($this->y);
        }
        if (\is_array($this->z)) {
            Model::validateArray($this->z);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelStatChart) {
            if (\is_array($this->labelStatChart)) {
                $res['LabelStatChart'] = [];
                $n1 = 0;
                foreach ($this->labelStatChart as $item1) {
                    $res['LabelStatChart'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalStat) {
            if (\is_array($this->totalStat)) {
                $res['TotalStat'] = [];
                foreach ($this->totalStat as $key1 => $value1) {
                    $res['TotalStat'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->uids) {
            if (\is_array($this->uids)) {
                $res['Uids'] = [];
                $n1 = 0;
                foreach ($this->uids as $item1) {
                    $res['Uids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->x) {
            if (\is_array($this->x)) {
                $res['X'] = [];
                $n1 = 0;
                foreach ($this->x as $item1) {
                    $res['X'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->y) {
            if (\is_array($this->y)) {
                $res['Y'] = [];
                $n1 = 0;
                foreach ($this->y as $item1) {
                    $res['Y'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->z) {
            if (\is_array($this->z)) {
                $res['Z'] = [];
                $n1 = 0;
                foreach ($this->z as $item1) {
                    $res['Z'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['LabelStatChart'])) {
            if (!empty($map['LabelStatChart'])) {
                $model->labelStatChart = [];
                $n1 = 0;
                foreach ($map['LabelStatChart'] as $item1) {
                    $model->labelStatChart[$n1] = labelStatChart::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalStat'])) {
            if (!empty($map['TotalStat'])) {
                $model->totalStat = [];
                foreach ($map['TotalStat'] as $key1 => $value1) {
                    $model->totalStat[$key1] = $value1;
                }
            }
        }

        if (isset($map['Uids'])) {
            if (!empty($map['Uids'])) {
                $model->uids = [];
                $n1 = 0;
                foreach ($map['Uids'] as $item1) {
                    $model->uids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['X'])) {
            if (!empty($map['X'])) {
                $model->x = [];
                $n1 = 0;
                foreach ($map['X'] as $item1) {
                    $model->x[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Y'])) {
            if (!empty($map['Y'])) {
                $model->y = [];
                $n1 = 0;
                foreach ($map['Y'] as $item1) {
                    $model->y[$n1] = y::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Z'])) {
            if (!empty($map['Z'])) {
                $model->z = [];
                $n1 = 0;
                foreach ($map['Z'] as $item1) {
                    $model->z[$n1] = z::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
