<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20181015\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceAlertNotification extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isArms;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $sendReminder;

    /**
     * @var string
     */
    public $settings;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'id' => 'id',
        'isArms' => 'isArms',
        'isDefault' => 'isDefault',
        'name' => 'name',
        'sendReminder' => 'sendReminder',
        'settings' => 'settings',
        'type' => 'type',
        'uid' => 'uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isArms) {
            $res['isArms'] = $this->isArms;
        }

        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->sendReminder) {
            $res['sendReminder'] = $this->sendReminder;
        }

        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isArms'])) {
            $model->isArms = $map['isArms'];
        }

        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['sendReminder'])) {
            $model->sendReminder = $map['sendReminder'];
        }

        if (isset($map['settings'])) {
            $model->settings = $map['settings'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
