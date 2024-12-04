<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension\cycleUnfinished;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension\error;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension\instanceErrorCount;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension\instanceErrorPercentage;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension\instanceTransferFluctuate;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension\timeout;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateAlertRuleRequest\triggerCondition\extension\unFinished;
use AlibabaCloud\Tea\Model;

class extension extends Model
{
    /**
     * @description The configuration for an alert of the CycleUnfinished type.
     *
     * @var cycleUnfinished
     */
    public $cycleUnfinished;

    /**
     * @description The configuration for an alert of the Error type.
     *
     * @var error
     */
    public $error;

    /**
     * @description The configuration for an alert of the InstanceErrorCount type.
     *
     * @var instanceErrorCount
     */
    public $instanceErrorCount;

    /**
     * @description The configuration for an alert of the InstanceErrorPercentage type.
     *
     * @var instanceErrorPercentage
     */
    public $instanceErrorPercentage;

    /**
     * @description The configuration for an alert of the InstanceTransferFluctuate type.
     *
     * @var instanceTransferFluctuate
     */
    public $instanceTransferFluctuate;

    /**
     * @description The configuration for an alert of the Timeout type.
     *
     * @var timeout
     */
    public $timeout;

    /**
     * @description The configuration for an alert of the UnFinished type.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycleUnfinished) {
            $res['CycleUnfinished'] = null !== $this->cycleUnfinished ? $this->cycleUnfinished->toMap() : null;
        }
        if (null !== $this->error) {
            $res['Error'] = null !== $this->error ? $this->error->toMap() : null;
        }
        if (null !== $this->instanceErrorCount) {
            $res['InstanceErrorCount'] = null !== $this->instanceErrorCount ? $this->instanceErrorCount->toMap() : null;
        }
        if (null !== $this->instanceErrorPercentage) {
            $res['InstanceErrorPercentage'] = null !== $this->instanceErrorPercentage ? $this->instanceErrorPercentage->toMap() : null;
        }
        if (null !== $this->instanceTransferFluctuate) {
            $res['InstanceTransferFluctuate'] = null !== $this->instanceTransferFluctuate ? $this->instanceTransferFluctuate->toMap() : null;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = null !== $this->timeout ? $this->timeout->toMap() : null;
        }
        if (null !== $this->unFinished) {
            $res['UnFinished'] = null !== $this->unFinished ? $this->unFinished->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extension
     */
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
