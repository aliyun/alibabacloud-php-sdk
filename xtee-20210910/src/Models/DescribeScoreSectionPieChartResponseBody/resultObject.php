<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionPieChartResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionPieChartResponseBody\resultObject\grid;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeScoreSectionPieChartResponseBody\resultObject\series;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var bool
     */
    public $animation;

    /**
     * @var grid
     */
    public $grid;

    /**
     * @var series[]
     */
    public $series;
    protected $_name = [
        'animation' => 'animation',
        'grid'      => 'grid',
        'series'    => 'series',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->animation) {
            $res['animation'] = $this->animation;
        }
        if (null !== $this->grid) {
            $res['grid'] = null !== $this->grid ? $this->grid->toMap() : null;
        }
        if (null !== $this->series) {
            $res['series'] = [];
            if (null !== $this->series && \is_array($this->series)) {
                $n = 0;
                foreach ($this->series as $item) {
                    $res['series'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['animation'])) {
            $model->animation = $map['animation'];
        }
        if (isset($map['grid'])) {
            $model->grid = grid::fromMap($map['grid']);
        }
        if (isset($map['series'])) {
            if (!empty($map['series'])) {
                $model->series = [];
                $n             = 0;
                foreach ($map['series'] as $item) {
                    $model->series[$n++] = null !== $item ? series::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
