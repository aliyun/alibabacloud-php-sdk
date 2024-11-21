<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateAlertRuleShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description This parameter is required.
     *
     * @example xm_create_test
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @description This parameter is required.
     *
     * @example 279114181716147735
     *
     * @var string
     */
    public $owner;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $triggerConditionShrink;
    protected $_name = [
        'enabled'                => 'Enabled',
        'name'                   => 'Name',
        'notificationShrink'     => 'Notification',
        'owner'                  => 'Owner',
        'triggerConditionShrink' => 'TriggerCondition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->triggerConditionShrink) {
            $res['TriggerCondition'] = $this->triggerConditionShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlertRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['TriggerCondition'])) {
            $model->triggerConditionShrink = $map['TriggerCondition'];
        }

        return $model;
    }
}
