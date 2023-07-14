<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceAlertNotification extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isArms;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $sendReminder;

    /**
     * @example {}
     *
     * @var string
     */
    public $settings;

    /**
     * @example Email
     *
     * @var string
     */
    public $type;

    /**
     * @example Xfdf******
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'id'           => 'id',
        'isArms'       => 'isArms',
        'isDefault'    => 'isDefault',
        'name'         => 'name',
        'sendReminder' => 'sendReminder',
        'settings'     => 'settings',
        'type'         => 'type',
        'uid'          => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceAlertNotification
     */
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
