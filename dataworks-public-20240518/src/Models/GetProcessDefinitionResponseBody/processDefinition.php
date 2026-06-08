<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessDefinitionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessDefinitionResponseBody\processDefinition\approvalNodes;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessDefinitionResponseBody\processDefinition\notificationServices;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessDefinitionResponseBody\processDefinition\ruleConditions;

class processDefinition extends Model
{
    /**
     * @var approvalNodes[]
     */
    public $approvalNodes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isSystem;

    /**
     * @var string
     */
    public $name;

    /**
     * @var notificationServices[]
     */
    public $notificationServices;

    /**
     * @var ruleConditions[]
     */
    public $ruleConditions;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'approvalNodes' => 'ApprovalNodes',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'id' => 'Id',
        'isSystem' => 'IsSystem',
        'name' => 'Name',
        'notificationServices' => 'NotificationServices',
        'ruleConditions' => 'RuleConditions',
        'subType' => 'SubType',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->approvalNodes)) {
            Model::validateArray($this->approvalNodes);
        }
        if (\is_array($this->notificationServices)) {
            Model::validateArray($this->notificationServices);
        }
        if (\is_array($this->ruleConditions)) {
            Model::validateArray($this->ruleConditions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalNodes) {
            if (\is_array($this->approvalNodes)) {
                $res['ApprovalNodes'] = [];
                $n1 = 0;
                foreach ($this->approvalNodes as $item1) {
                    $res['ApprovalNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isSystem) {
            $res['IsSystem'] = $this->isSystem;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notificationServices) {
            if (\is_array($this->notificationServices)) {
                $res['NotificationServices'] = [];
                $n1 = 0;
                foreach ($this->notificationServices as $item1) {
                    $res['NotificationServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleConditions) {
            if (\is_array($this->ruleConditions)) {
                $res['RuleConditions'] = [];
                $n1 = 0;
                foreach ($this->ruleConditions as $item1) {
                    $res['RuleConditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ApprovalNodes'])) {
            if (!empty($map['ApprovalNodes'])) {
                $model->approvalNodes = [];
                $n1 = 0;
                foreach ($map['ApprovalNodes'] as $item1) {
                    $model->approvalNodes[$n1] = approvalNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsSystem'])) {
            $model->isSystem = $map['IsSystem'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NotificationServices'])) {
            if (!empty($map['NotificationServices'])) {
                $model->notificationServices = [];
                $n1 = 0;
                foreach ($map['NotificationServices'] as $item1) {
                    $model->notificationServices[$n1] = notificationServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleConditions'])) {
            if (!empty($map['RuleConditions'])) {
                $model->ruleConditions = [];
                $n1 = 0;
                foreach ($map['RuleConditions'] as $item1) {
                    $model->ruleConditions[$n1] = ruleConditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
