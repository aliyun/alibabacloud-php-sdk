<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleDownRules\memoryScaleDownRule;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleDownRules\slotBusyScaleDownRule;

class scaleDownRules extends Model
{
    /**
     * @var memoryScaleDownRule
     */
    public $memoryScaleDownRule;

    /**
     * @var slotBusyScaleDownRule
     */
    public $slotBusyScaleDownRule;
    protected $_name = [
        'memoryScaleDownRule' => 'memoryScaleDownRule',
        'slotBusyScaleDownRule' => 'slotBusyScaleDownRule',
    ];

    public function validate()
    {
        if (null !== $this->memoryScaleDownRule) {
            $this->memoryScaleDownRule->validate();
        }
        if (null !== $this->slotBusyScaleDownRule) {
            $this->slotBusyScaleDownRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memoryScaleDownRule) {
            $res['memoryScaleDownRule'] = null !== $this->memoryScaleDownRule ? $this->memoryScaleDownRule->toArray($noStream) : $this->memoryScaleDownRule;
        }

        if (null !== $this->slotBusyScaleDownRule) {
            $res['slotBusyScaleDownRule'] = null !== $this->slotBusyScaleDownRule ? $this->slotBusyScaleDownRule->toArray($noStream) : $this->slotBusyScaleDownRule;
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
        if (isset($map['memoryScaleDownRule'])) {
            $model->memoryScaleDownRule = memoryScaleDownRule::fromMap($map['memoryScaleDownRule']);
        }

        if (isset($map['slotBusyScaleDownRule'])) {
            $model->slotBusyScaleDownRule = slotBusyScaleDownRule::fromMap($map['slotBusyScaleDownRule']);
        }

        return $model;
    }
}
