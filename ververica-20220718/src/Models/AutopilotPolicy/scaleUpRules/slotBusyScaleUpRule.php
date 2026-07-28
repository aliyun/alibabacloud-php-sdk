<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleUpRules;

use AlibabaCloud\Dara\Model;

class slotBusyScaleUpRule extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $slotBusyScaleUpSampleInterval;

    /**
     * @var float
     */
    public $slotBusyScaleUpThreshold;
    protected $_name = [
        'enabled' => 'enabled',
        'slotBusyScaleUpSampleInterval' => 'slotBusyScaleUpSampleInterval',
        'slotBusyScaleUpThreshold' => 'slotBusyScaleUpThreshold',
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

        if (null !== $this->slotBusyScaleUpSampleInterval) {
            $res['slotBusyScaleUpSampleInterval'] = $this->slotBusyScaleUpSampleInterval;
        }

        if (null !== $this->slotBusyScaleUpThreshold) {
            $res['slotBusyScaleUpThreshold'] = $this->slotBusyScaleUpThreshold;
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

        if (isset($map['slotBusyScaleUpSampleInterval'])) {
            $model->slotBusyScaleUpSampleInterval = $map['slotBusyScaleUpSampleInterval'];
        }

        if (isset($map['slotBusyScaleUpThreshold'])) {
            $model->slotBusyScaleUpThreshold = $map['slotBusyScaleUpThreshold'];
        }

        return $model;
    }
}
