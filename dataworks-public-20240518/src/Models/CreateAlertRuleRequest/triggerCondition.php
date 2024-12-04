<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\triggerCondition\extension;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAlertRuleRequest\triggerCondition\target;
use AlibabaCloud\Tea\Model;

class triggerCondition extends Model
{
    /**
     * @description The extended information about the rule. This parameter is required for some trigger conditions.
     *
     * @var extension
     */
    public $extension;

    /**
     * @description The monitored object.
     *
     * @var target
     */
    public $target;

    /**
     * @description The condition for triggering the alert. Valid values:
     *
     *   Finished: The system sends an alert notification when the instance is successfully run.
     *   UnFinished: The system sends an alert notification if the instance is still running at a specified point in time.
     *   Error: The system sends an alert notification if an error occurs when the instance is running.
     *   CycleUnfinished: The system sends an alert notification if the instance is still running at the end of a specified cycle.
     *   Timeout: The system sends an alert notification if the instance is still running after a specified period of time ends.
     *   InstanceTransferComplete: The system sends an alert notification if DataWorks generates auto triggered node instances that need to run the next day before 24:00.
     *   InstanceTransferFluctuate: The system sends an alert notification when the number of auto triggered node instances that are generated in your workspace significantly fluctuates, in comparison with the average number of auto triggered node instances that are historically generated in the workspace.
     *   ExhaustedError: The system sends an alert notification if an error persists after the instance is automatically rerun.
     *   InstanceKeyword: The system sends an alert notification if the instance with errors contain specified keywords.
     *   InstanceErrorCount: The system sends an alert notification if the number of instances on which an error occurs on the current day reaches a specified threshold.
     *   InstanceErrorPercentage: The system sends an alert notification if the proportion of the number of instances on which an error occurs in the workspace to the total number of instances on the current day reaches a specified threshold.
     *   ResourceGroupPercentage: The system sends an alert notification if the value of the ResourceGroupPercentage parameter is greater than a specific percentage for a specific period of time.
     *   ResourceGroupWaitCount: The system sends an alert notification if the value of the ResourceGroupWaitCount parameter is greater than a specific number for a specific period of time.
     *
     * @example Error
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'extension' => 'Extension',
        'target'    => 'Target',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = null !== $this->extension ? $this->extension->toMap() : null;
        }
        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggerCondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extension'])) {
            $model->extension = extension::fromMap($map['Extension']);
        }
        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
