<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetRunningSqlConcurrencyControlRulesResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetRunningSqlConcurrencyControlRulesResponseBody\data\list_\runningRules;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var runningRules[]
     */
    public $runningRules;
    protected $_name = [
        'runningRules' => 'runningRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->runningRules) {
            $res['runningRules'] = [];
            if (null !== $this->runningRules && \is_array($this->runningRules)) {
                $n = 0;
                foreach ($this->runningRules as $item) {
                    $res['runningRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['runningRules'])) {
            if (!empty($map['runningRules'])) {
                $model->runningRules = [];
                $n                   = 0;
                foreach ($map['runningRules'] as $item) {
                    $model->runningRules[$n++] = null !== $item ? runningRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
