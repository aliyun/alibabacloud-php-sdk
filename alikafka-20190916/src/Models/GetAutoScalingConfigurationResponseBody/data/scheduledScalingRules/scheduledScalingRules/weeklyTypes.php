<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data\scheduledScalingRules\scheduledScalingRules;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->weeklyTypes) {
            $res['WeeklyTypes'] = $this->weeklyTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return weeklyTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WeeklyTypes'])) {
            if (!empty($map['WeeklyTypes'])) {
                $model->weeklyTypes = $map['WeeklyTypes'];
            }
        }

        return $model;
    }
}
