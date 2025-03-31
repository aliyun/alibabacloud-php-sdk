<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesResponseBody\pagingInfo\alertRules\triggerCondition;

class alertRules extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
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

    public function validate()
    {
        if (null !== $this->triggerCondition) {
            $this->triggerCondition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['TriggerCondition'] = null !== $this->triggerCondition ? $this->triggerCondition->toArray($noStream) : $this->triggerCondition;
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
