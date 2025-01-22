<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition\extension\cycleUnfinished;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition\extension\error;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition\extension\instanceErrorCount;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition\extension\instanceErrorPercentage;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition\extension\instanceTransferFluctuate;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition\extension\timeout;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetAlertRuleResponseBody\alertRule\triggerCondition\extension\unFinished;

class extension extends Model
{
    /**
     * @var cycleUnfinished
     */
    public $cycleUnfinished;
    /**
     * @var error
     */
    public $error;
    /**
     * @var instanceErrorCount
     */
    public $instanceErrorCount;
    /**
     * @var instanceErrorPercentage
     */
    public $instanceErrorPercentage;
    /**
     * @var instanceTransferFluctuate
     */
    public $instanceTransferFluctuate;
    /**
     * @var timeout
     */
    public $timeout;
    /**
     * @var unFinished
     */
    public $unFinished;
    protected $_name = [
        'cycleUnfinished'           => 'CycleUnfinished',
        'error'                     => 'Error',
        'instanceErrorCount'        => 'InstanceErrorCount',
        'instanceErrorPercentage'   => 'InstanceErrorPercentage',
        'instanceTransferFluctuate' => 'InstanceTransferFluctuate',
        'timeout'                   => 'Timeout',
        'unFinished'                => 'UnFinished',
    ];

    public function validate()
    {
        if (null !== $this->cycleUnfinished) {
            $this->cycleUnfinished->validate();
        }
        if (null !== $this->error) {
            $this->error->validate();
        }
        if (null !== $this->instanceErrorCount) {
            $this->instanceErrorCount->validate();
        }
        if (null !== $this->instanceErrorPercentage) {
            $this->instanceErrorPercentage->validate();
        }
        if (null !== $this->instanceTransferFluctuate) {
            $this->instanceTransferFluctuate->validate();
        }
        if (null !== $this->timeout) {
            $this->timeout->validate();
        }
        if (null !== $this->unFinished) {
            $this->unFinished->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cycleUnfinished) {
            $res['CycleUnfinished'] = null !== $this->cycleUnfinished ? $this->cycleUnfinished->toArray($noStream) : $this->cycleUnfinished;
        }

        if (null !== $this->error) {
            $res['Error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->instanceErrorCount) {
            $res['InstanceErrorCount'] = null !== $this->instanceErrorCount ? $this->instanceErrorCount->toArray($noStream) : $this->instanceErrorCount;
        }

        if (null !== $this->instanceErrorPercentage) {
            $res['InstanceErrorPercentage'] = null !== $this->instanceErrorPercentage ? $this->instanceErrorPercentage->toArray($noStream) : $this->instanceErrorPercentage;
        }

        if (null !== $this->instanceTransferFluctuate) {
            $res['InstanceTransferFluctuate'] = null !== $this->instanceTransferFluctuate ? $this->instanceTransferFluctuate->toArray($noStream) : $this->instanceTransferFluctuate;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = null !== $this->timeout ? $this->timeout->toArray($noStream) : $this->timeout;
        }

        if (null !== $this->unFinished) {
            $res['UnFinished'] = null !== $this->unFinished ? $this->unFinished->toArray($noStream) : $this->unFinished;
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
        if (isset($map['CycleUnfinished'])) {
            $model->cycleUnfinished = cycleUnfinished::fromMap($map['CycleUnfinished']);
        }

        if (isset($map['Error'])) {
            $model->error = error::fromMap($map['Error']);
        }

        if (isset($map['InstanceErrorCount'])) {
            $model->instanceErrorCount = instanceErrorCount::fromMap($map['InstanceErrorCount']);
        }

        if (isset($map['InstanceErrorPercentage'])) {
            $model->instanceErrorPercentage = instanceErrorPercentage::fromMap($map['InstanceErrorPercentage']);
        }

        if (isset($map['InstanceTransferFluctuate'])) {
            $model->instanceTransferFluctuate = instanceTransferFluctuate::fromMap($map['InstanceTransferFluctuate']);
        }

        if (isset($map['Timeout'])) {
            $model->timeout = timeout::fromMap($map['Timeout']);
        }

        if (isset($map['UnFinished'])) {
            $model->unFinished = unFinished::fromMap($map['UnFinished']);
        }

        return $model;
    }
}
