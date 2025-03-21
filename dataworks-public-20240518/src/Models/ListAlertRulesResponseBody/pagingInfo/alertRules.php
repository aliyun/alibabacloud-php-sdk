<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesResponseBody\pagingInfo\alertRules\triggerCondition;
use AlibabaCloud\Tea\Model;

class alertRules extends Model
{
    /**
     * @description Indicates whether the rule is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The rule ID.
     *
     * @example 22125
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the rule.
     *
     * @example error_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the Alibaba Cloud account used by the owner of the rule.
     *
     * @example 1933790683****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The alert triggering condition.
     *
     * @var triggerCondition
     */
    public $triggerCondition;
    protected $_name = [
        'enabled' => 'Enabled',
        'id' => 'Id',
        'name' => 'Name',
        'owner' => 'Owner',
        'triggerCondition' => 'TriggerCondition',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->triggerCondition) {
            $res['TriggerCondition'] = null !== $this->triggerCondition ? $this->triggerCondition->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['TriggerCondition'])) {
            $model->triggerCondition = triggerCondition::fromMap($map['TriggerCondition']);
        }

        return $model;
    }
}
