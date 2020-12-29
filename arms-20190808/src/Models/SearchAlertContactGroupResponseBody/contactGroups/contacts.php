<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupResponseBody\contactGroups;

use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $dingRobot;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $contactId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var bool
     */
    public $systemNoc;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'updateTime'  => 'UpdateTime',
        'dingRobot'   => 'DingRobot',
        'email'       => 'Email',
        'contactId'   => 'ContactId',
        'createTime'  => 'CreateTime',
        'userId'      => 'UserId',
        'contactName' => 'ContactName',
        'systemNoc'   => 'SystemNoc',
        'phone'       => 'Phone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->dingRobot) {
            $res['DingRobot'] = $this->dingRobot;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->systemNoc) {
            $res['SystemNoc'] = $this->systemNoc;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['DingRobot'])) {
            $model->dingRobot = $map['DingRobot'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['SystemNoc'])) {
            $model->systemNoc = $map['SystemNoc'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        return $model;
    }
}
