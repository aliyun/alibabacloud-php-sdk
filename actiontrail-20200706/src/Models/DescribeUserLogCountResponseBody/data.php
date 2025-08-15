<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeUserLogCountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int[]
     */
    public $counts;

    /**
     * @var string[]
     */
    public $dates;
    protected $_name = [
        'counts' => 'Counts',
        'dates' => 'Dates',
    ];

    public function validate()
    {
        if (\is_array($this->counts)) {
            Model::validateArray($this->counts);
        }
        if (\is_array($this->dates)) {
            Model::validateArray($this->dates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->counts) {
            if (\is_array($this->counts)) {
                $res['Counts'] = [];
                $n1 = 0;
                foreach ($this->counts as $item1) {
                    $res['Counts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dates) {
            if (\is_array($this->dates)) {
                $res['Dates'] = [];
                $n1 = 0;
                foreach ($this->dates as $item1) {
                    $res['Dates'][$n1] = $item1;
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
        if (isset($map['Counts'])) {
            if (!empty($map['Counts'])) {
                $model->counts = [];
                $n1 = 0;
                foreach ($map['Counts'] as $item1) {
                    $model->counts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Dates'])) {
            if (!empty($map['Dates'])) {
                $model->dates = [];
                $n1 = 0;
                foreach ($map['Dates'] as $item1) {
                    $model->dates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
