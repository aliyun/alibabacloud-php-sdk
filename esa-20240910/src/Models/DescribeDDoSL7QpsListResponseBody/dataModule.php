<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSL7QpsListResponseBody;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $attack;

    /**
     * @example 4
     *
     * @var int
     */
    public $normal;

    /**
     * @example 2023-04-19T16:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example 9
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'attack'    => 'Attack',
        'normal'    => 'Normal',
        'timeStamp' => 'TimeStamp',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attack) {
            $res['Attack'] = $this->attack;
        }
        if (null !== $this->normal) {
            $res['Normal'] = $this->normal;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attack'])) {
            $model->attack = $map['Attack'];
        }
        if (isset($map['Normal'])) {
            $model->normal = $map['Normal'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
