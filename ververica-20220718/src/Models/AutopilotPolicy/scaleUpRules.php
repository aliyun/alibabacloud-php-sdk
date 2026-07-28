<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleUpRules\delayRule;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleUpRules\gcRule;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleUpRules\memoryScaleUpRule;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleUpRules\oomScaleUpRule;
use AlibabaCloud\SDK\Ververica\V20220718\Models\AutopilotPolicy\scaleUpRules\slotBusyScaleUpRule;

class scaleUpRules extends Model
{
    /**
     * @var delayRule
     */
    public $delayRule;

    /**
     * @var gcRule
     */
    public $gcRule;

    /**
     * @var memoryScaleUpRule
     */
    public $memoryScaleUpRule;

    /**
     * @var oomScaleUpRule
     */
    public $oomScaleUpRule;

    /**
     * @var slotBusyScaleUpRule
     */
    public $slotBusyScaleUpRule;
    protected $_name = [
        'delayRule' => 'delayRule',
        'gcRule' => 'gcRule',
        'memoryScaleUpRule' => 'memoryScaleUpRule',
        'oomScaleUpRule' => 'oomScaleUpRule',
        'slotBusyScaleUpRule' => 'slotBusyScaleUpRule',
    ];

    public function validate()
    {
        if (null !== $this->delayRule) {
            $this->delayRule->validate();
        }
        if (null !== $this->gcRule) {
            $this->gcRule->validate();
        }
        if (null !== $this->memoryScaleUpRule) {
            $this->memoryScaleUpRule->validate();
        }
        if (null !== $this->oomScaleUpRule) {
            $this->oomScaleUpRule->validate();
        }
        if (null !== $this->slotBusyScaleUpRule) {
            $this->slotBusyScaleUpRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delayRule) {
            $res['delayRule'] = null !== $this->delayRule ? $this->delayRule->toArray($noStream) : $this->delayRule;
        }

        if (null !== $this->gcRule) {
            $res['gcRule'] = null !== $this->gcRule ? $this->gcRule->toArray($noStream) : $this->gcRule;
        }

        if (null !== $this->memoryScaleUpRule) {
            $res['memoryScaleUpRule'] = null !== $this->memoryScaleUpRule ? $this->memoryScaleUpRule->toArray($noStream) : $this->memoryScaleUpRule;
        }

        if (null !== $this->oomScaleUpRule) {
            $res['oomScaleUpRule'] = null !== $this->oomScaleUpRule ? $this->oomScaleUpRule->toArray($noStream) : $this->oomScaleUpRule;
        }

        if (null !== $this->slotBusyScaleUpRule) {
            $res['slotBusyScaleUpRule'] = null !== $this->slotBusyScaleUpRule ? $this->slotBusyScaleUpRule->toArray($noStream) : $this->slotBusyScaleUpRule;
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
        if (isset($map['delayRule'])) {
            $model->delayRule = delayRule::fromMap($map['delayRule']);
        }

        if (isset($map['gcRule'])) {
            $model->gcRule = gcRule::fromMap($map['gcRule']);
        }

        if (isset($map['memoryScaleUpRule'])) {
            $model->memoryScaleUpRule = memoryScaleUpRule::fromMap($map['memoryScaleUpRule']);
        }

        if (isset($map['oomScaleUpRule'])) {
            $model->oomScaleUpRule = oomScaleUpRule::fromMap($map['oomScaleUpRule']);
        }

        if (isset($map['slotBusyScaleUpRule'])) {
            $model->slotBusyScaleUpRule = slotBusyScaleUpRule::fromMap($map['slotBusyScaleUpRule']);
        }

        return $model;
    }
}
