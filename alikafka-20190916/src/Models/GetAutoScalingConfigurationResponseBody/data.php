<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data\scheduledScalingRules;

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
        if (null !== $this->scheduledScalingRules) {
            $this->scheduledScalingRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scheduledScalingRules) {
            $res['ScheduledScalingRules'] = null !== $this->scheduledScalingRules ? $this->scheduledScalingRules->toArray($noStream) : $this->scheduledScalingRules;
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
            $model->scheduledScalingRules = scheduledScalingRules::fromMap($map['ScheduledScalingRules']);
        }

        return $model;
    }
}
