<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutonomousNotifyEventsInRangeResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string[]
     */
    public $t;
    protected $_name = [
        't' => 'T',
    ];

    public function validate()
    {
        if (\is_array($this->t)) {
            Model::validateArray($this->t);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->t) {
            if (\is_array($this->t)) {
                $res['T'] = [];
                $n1 = 0;
                foreach ($this->t as $item1) {
                    $res['T'][$n1] = $item1;
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
        if (isset($map['T'])) {
            if (!empty($map['T'])) {
                $model->t = [];
                $n1 = 0;
                foreach ($map['T'] as $item1) {
                    $model->t[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
