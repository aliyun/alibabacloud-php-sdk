<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactResponseBody\pageBean;

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
     * @description The contact group to which the contact belongs. If your contacts are added to multiple contact groups, the contact groups are separated by vertical bars (|).
     *
     * @example Default Group | SRE Group
     *
     * @var string
     */
    public $content;

    /**
     * @description The timestamp generated when the alert contact was created.
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
     * @description The ID of the resource group.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the alert contact receives system notifications. Valid values:
     *
     *   `true`: The alert contact receives system notifications.
     *   `false`: The alert contact does not receive system notifications.
     *
     * @example false
     *
     * @var bool
     */
    public $systemNoc;

    /**
     * @description The timestamp generated when the alert contact was updated.
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

    /**
     * @description The information about the webhook.
     *
     * @example {\\"body\\":\\"{   \\\\\\"msg_type\\\\\\": \\\\\\"text\\\\\\",   \\\\\\"content\\\\\\": {     \\\\\\"text\\\\\\": \\\\\\"$content\\\\\\"   } }\\",\\"header\\":{\\"Arms-Content-Type\\":\\"json\\"},\\"method\\":\\"post\\",\\"params\\":{},\\"url\\":\\"https://***",\\"userId\\":\\"1131971649***\\"}",
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'contactId'       => 'ContactId',
        'contactName'     => 'ContactName',
        'content'         => 'Content',
        'createTime'      => 'CreateTime',
        'dingRobot'       => 'DingRobot',
        'email'           => 'Email',
        'phone'           => 'Phone',
        'resourceGroupId' => 'ResourceGroupId',
        'systemNoc'       => 'SystemNoc',
        'updateTime'      => 'UpdateTime',
        'userId'          => 'UserId',
        'webhook'         => 'Webhook',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
