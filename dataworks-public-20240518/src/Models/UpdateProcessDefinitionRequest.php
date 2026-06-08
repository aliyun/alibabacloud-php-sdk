<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateProcessDefinitionRequest\approvalNodes;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateProcessDefinitionRequest\notificationServices;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateProcessDefinitionRequest\ruleConditions;

class UpdateProcessDefinitionRequest extends Model
{
    /**
     * @var approvalNodes[]
     */
    public $approvalNodes;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

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
    protected $_name = [
        'approvalNodes' => 'ApprovalNodes',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'notificationServices' => 'NotificationServices',
        'ruleConditions' => 'RuleConditions',
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        return $model;
    }
}
