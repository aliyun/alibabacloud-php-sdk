<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetEventSubscriptionResponseBody\data;

use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @description The webhook URL of the DingTalk chatbot.
     *
     * @example https://oapi.dingtalk.com/robot/send?access_token=68fa29a9eaf3ba9994f54fxxxc1aa9879700308f90e9c23ebfb3663642c9****
     *
     * @var string
     */
    public $dingtalkHook;

    /**
     * @description The email address of the alert contact.
     *
     * @example a***@example.net
     *
     * @var string
     */
    public $email;

    /**
     * @description The contact groups to which the alert contact belongs.
     *
     * @var string[]
     */
    public $groups;

    /**
     * @description Indicates whether the alert contact name is the same as the contact name on CloudMonitor.
     *
     * **true**
     * **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isCmsReduplicated;

    /**
     * @description The name of the alert contact.
     *
     * @example Mr. Zhang
     *
     * @var string
     */
    public $name;

    /**
     * @description The mobile number of the alert contact.
     *
     * @example 1390000****
     *
     * @var string
     */
    public $phone;

    /**
     * @description The user ID.
     *
     * @example 1088760496****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'dingtalkHook'      => 'dingtalkHook',
        'email'             => 'email',
        'groups'            => 'groups',
        'isCmsReduplicated' => 'isCmsReduplicated',
        'name'              => 'name',
        'phone'             => 'phone',
        'userId'            => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingtalkHook) {
            $res['dingtalkHook'] = $this->dingtalkHook;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->groups) {
            $res['groups'] = $this->groups;
        }
        if (null !== $this->isCmsReduplicated) {
            $res['isCmsReduplicated'] = $this->isCmsReduplicated;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contacts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dingtalkHook'])) {
            $model->dingtalkHook = $map['dingtalkHook'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['groups'])) {
            if (!empty($map['groups'])) {
                $model->groups = $map['groups'];
            }
        }
        if (isset($map['isCmsReduplicated'])) {
            $model->isCmsReduplicated = $map['isCmsReduplicated'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
