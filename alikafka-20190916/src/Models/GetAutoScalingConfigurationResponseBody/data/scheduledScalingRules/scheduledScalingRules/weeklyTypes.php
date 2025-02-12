<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data\scheduledScalingRules\scheduledScalingRules;

use AlibabaCloud\Dara\Model;

class weeklyTypes extends Model
{
    /**
     * @var string[]
     */
    public $weeklyTypes;
    protected $_name = [
        'weeklyTypes' => 'WeeklyTypes',
    ];

    public function validate()
    {
        if (\is_array($this->weeklyTypes)) {
            Model::validateArray($this->weeklyTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->weeklyTypes) {
            if (\is_array($this->weeklyTypes)) {
                $res['WeeklyTypes'] = [];
                $n1                 = 0;
                foreach ($this->weeklyTypes as $item1) {
                    $res['WeeklyTypes'][$n1++] = $item1;
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
        if (isset($map['WeeklyTypes'])) {
            if (!empty($map['WeeklyTypes'])) {
                $model->weeklyTypes = [];
                $n1                 = 0;
                foreach ($map['WeeklyTypes'] as $item1) {
                    $model->weeklyTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
