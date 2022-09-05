<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupResponseBody\contactGroups;

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
