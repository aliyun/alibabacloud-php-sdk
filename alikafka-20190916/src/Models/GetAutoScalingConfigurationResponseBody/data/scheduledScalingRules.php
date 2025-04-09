<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data\scheduledScalingRules\scheduledScalingRules;

class scheduledScalingRules extends Model
{
    /**
     * @var scheduledScalingRules[]
     */
    public $scheduledScalingRules;
    protected $_name = [
        'scheduledScalingRules' => 'ScheduledScalingRules',
    ];

    public function validate()
    {
        if (\is_array($this->scheduledScalingRules)) {
            Model::validateArray($this->scheduledScalingRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scheduledScalingRules) {
            if (\is_array($this->scheduledScalingRules)) {
                $res['ScheduledScalingRules'] = [];
                $n1 = 0;
                foreach ($this->scheduledScalingRules as $item1) {
                    $res['ScheduledScalingRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ScheduledScalingRules'])) {
            if (!empty($map['ScheduledScalingRules'])) {
                $model->scheduledScalingRules = [];
                $n1 = 0;
                foreach ($map['ScheduledScalingRules'] as $item1) {
                    $model->scheduledScalingRules[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
