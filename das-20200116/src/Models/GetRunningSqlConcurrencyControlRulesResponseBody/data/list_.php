<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetRunningSqlConcurrencyControlRulesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetRunningSqlConcurrencyControlRulesResponseBody\data\list_\runningRules;

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
        if (\is_array($this->runningRules)) {
            Model::validateArray($this->runningRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->runningRules) {
            if (\is_array($this->runningRules)) {
                $res['runningRules'] = [];
                $n1                  = 0;
                foreach ($this->runningRules as $item1) {
                    $res['runningRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['runningRules'])) {
            if (!empty($map['runningRules'])) {
                $model->runningRules = [];
                $n1                  = 0;
                foreach ($map['runningRules'] as $item1) {
                    $model->runningRules[$n1++] = runningRules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
