<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data;

use AlibabaCloud\Tea\Model;

class scheduledScalingRules extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data\scheduledScalingRules\scheduledScalingRules[]
     */
    public $scheduledScalingRules;
    protected $_name = [
        'scheduledScalingRules' => 'ScheduledScalingRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduledScalingRules) {
            $res['ScheduledScalingRules'] = [];
            if (null !== $this->scheduledScalingRules && \is_array($this->scheduledScalingRules)) {
                $n = 0;
                foreach ($this->scheduledScalingRules as $item) {
                    $res['ScheduledScalingRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduledScalingRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduledScalingRules'])) {
            if (!empty($map['ScheduledScalingRules'])) {
                $model->scheduledScalingRules = [];
                $n                            = 0;
                foreach ($map['ScheduledScalingRules'] as $item) {
                    $model->scheduledScalingRules[$n++] = null !== $item ? \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data\scheduledScalingRules\scheduledScalingRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
