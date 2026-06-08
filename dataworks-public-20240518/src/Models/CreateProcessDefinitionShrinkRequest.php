<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateProcessDefinitionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $approvalNodesShrink;

    /**
     * @var string
     */
    public $clientToken;

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
    public $name;

    /**
     * @var string
     */
    public $notificationServicesShrink;

    /**
     * @var string
     */
    public $ruleConditionsShrink;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'approvalNodesShrink' => 'ApprovalNodes',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'enabled' => 'Enabled',
        'name' => 'Name',
        'notificationServicesShrink' => 'NotificationServices',
        'ruleConditionsShrink' => 'RuleConditions',
        'subType' => 'SubType',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalNodesShrink) {
            $res['ApprovalNodes'] = $this->approvalNodesShrink;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notificationServicesShrink) {
            $res['NotificationServices'] = $this->notificationServicesShrink;
        }

        if (null !== $this->ruleConditionsShrink) {
            $res['RuleConditions'] = $this->ruleConditionsShrink;
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
            $model->approvalNodesShrink = $map['ApprovalNodes'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NotificationServices'])) {
            $model->notificationServicesShrink = $map['NotificationServices'];
        }

        if (isset($map['RuleConditions'])) {
            $model->ruleConditionsShrink = $map['RuleConditions'];
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
