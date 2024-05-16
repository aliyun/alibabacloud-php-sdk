<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data\scheduledScalingRules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var scheduledScalingRules
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
            $res['ScheduledScalingRules'] = null !== $this->scheduledScalingRules ? $this->scheduledScalingRules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduledScalingRules'])) {
            $model->scheduledScalingRules = scheduledScalingRules::fromMap($map['ScheduledScalingRules']);
        }

        return $model;
    }
}
