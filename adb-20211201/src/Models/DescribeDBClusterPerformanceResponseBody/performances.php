<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterPerformanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterPerformanceResponseBody\performances\series;

class performances extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var series[]
     */
    public $series;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'key' => 'Key',
        'series' => 'Series',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        if (\is_array($this->series)) {
            Model::validateArray($this->series);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->series) {
            if (\is_array($this->series)) {
                $res['Series'] = [];
                $n1 = 0;
                foreach ($this->series as $item1) {
                    $res['Series'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Series'])) {
            if (!empty($map['Series'])) {
                $model->series = [];
                $n1 = 0;
                foreach ($map['Series'] as $item1) {
                    $model->series[$n1] = series::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
