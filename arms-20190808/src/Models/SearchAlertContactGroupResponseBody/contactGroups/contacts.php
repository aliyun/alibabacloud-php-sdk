<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupResponseBody\contactGroups;

use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @description The ID of the alert contact.
     *
     * @example 123
     *
     * @var int
     */
    public $contactId;

    /**
     * @description The name of the alert contact.
     *
     * @example John Doe
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The time when the alert contact group list was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1572349025000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The webhook URL of the DingTalk chatbot.
     *
     * @example https://oapi.dingtalk.com/robot/send?access_token=91f2f6****
     *
     * @var string
     */
    public $dingRobot;

    /**
     * @description The email address of the alert contact.
     *
     * @example someone@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The mobile number of the alert contact.
     *
     * @example 1381111*****
     *
     * @var string
     */
    public $phone;

    /**
     * @description Indicates whether the alert contact receives system notifications. Valid values:
     *
     *   true: receives system notifications.
     *   false: does not receive system notifications.
     *
     * @example false
     *
     * @var bool
     */
    public $systemNoc;

    /**
     * @description The time when the alert contact group was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1580258717000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the user.
     *
     * @example 113197164949****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'contactId'   => 'ContactId',
        'contactName' => 'ContactName',
        'createTime'  => 'CreateTime',
        'dingRobot'   => 'DingRobot',
        'email'       => 'Email',
        'phone'       => 'Phone',
        'systemNoc'   => 'SystemNoc',
        'updateTime'  => 'UpdateTime',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dingRobot) {
            $res['DingRobot'] = $this->dingRobot;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->systemNoc) {
            $res['SystemNoc'] = $this->systemNoc;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DingRobot'])) {
            $model->dingRobot = $map['DingRobot'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['SystemNoc'])) {
            $model->systemNoc = $map['SystemNoc'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
