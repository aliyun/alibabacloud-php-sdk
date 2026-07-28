<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleUpRules;

use AlibabaCloud\Dara\Model;

class memoryScaleUpRule extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var float
     */
    public $memUsageScaleUpThreshold;
    protected $_name = [
        'enabled' => 'enabled',
        'memUsageScaleUpThreshold' => 'memUsageScaleUpThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->memUsageScaleUpThreshold) {
            $res['memUsageScaleUpThreshold'] = $this->memUsageScaleUpThreshold;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['memUsageScaleUpThreshold'])) {
            $model->memUsageScaleUpThreshold = $map['memUsageScaleUpThreshold'];
        }

        return $model;
    }
}
