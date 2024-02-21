<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutonomousNotifyEventsInRangeResponseBody\data;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->t) {
            $res['T'] = $this->t;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['T'])) {
            if (!empty($map['T'])) {
                $model->t = $map['T'];
            }
        }

        return $model;
    }
}
