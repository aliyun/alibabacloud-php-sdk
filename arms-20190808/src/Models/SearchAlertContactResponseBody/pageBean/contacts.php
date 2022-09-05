<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dingRobot;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var bool
     */
    public $systemNoc;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'contactId'   => 'ContactId',
        'contactName' => 'ContactName',
        'content'     => 'Content',
        'createTime'  => 'CreateTime',
        'dingRobot'   => 'DingRobot',
        'email'       => 'Email',
        'phone'       => 'Phone',
        'systemNoc'   => 'SystemNoc',
        'updateTime'  => 'UpdateTime',
        'userId'      => 'UserId',
        'webhook'     => 'Webhook',
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
