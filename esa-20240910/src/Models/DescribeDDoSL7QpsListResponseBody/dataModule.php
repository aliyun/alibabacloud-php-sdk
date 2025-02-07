<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSL7QpsListResponseBody;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
    /**
     * @var int
     */
    public $attack;
    /**
     * @var int
     */
    public $normal;
    /**
     * @var string
     */
    public $timeStamp;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
