<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateProcessDefinitionShrinkRequest extends Model
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
     * @var string
     */
    public $id;

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
    protected $_name = [
        'approvalNodesShrink' => 'ApprovalNodes',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'notificationServicesShrink' => 'NotificationServices',
        'ruleConditionsShrink' => 'RuleConditions',
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        return $model;
    }
}
