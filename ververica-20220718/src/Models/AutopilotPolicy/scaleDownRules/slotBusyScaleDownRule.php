<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleDownRules;

use AlibabaCloud\Dara\Model;

class slotBusyScaleDownRule extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $slotBusyScaleDownSampleInterval;

    /**
     * @var float
     */
    public $slotBusyScaleDownThreshold;
    protected $_name = [
        'enabled' => 'enabled',
        'slotBusyScaleDownSampleInterval' => 'slotBusyScaleDownSampleInterval',
        'slotBusyScaleDownThreshold' => 'slotBusyScaleDownThreshold',
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

        if (null !== $this->slotBusyScaleDownSampleInterval) {
            $res['slotBusyScaleDownSampleInterval'] = $this->slotBusyScaleDownSampleInterval;
        }

        if (null !== $this->slotBusyScaleDownThreshold) {
            $res['slotBusyScaleDownThreshold'] = $this->slotBusyScaleDownThreshold;
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

        if (isset($map['slotBusyScaleDownSampleInterval'])) {
            $model->slotBusyScaleDownSampleInterval = $map['slotBusyScaleDownSampleInterval'];
        }

        if (isset($map['slotBusyScaleDownThreshold'])) {
            $model->slotBusyScaleDownThreshold = $map['slotBusyScaleDownThreshold'];
        }

        return $model;
    }
}
