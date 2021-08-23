<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeIntentResponseBody\ruleCheck;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeIntentResponseBody\slot;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeIntentResponseBody\userSay;
use AlibabaCloud\Tea\Model;

class DescribeIntentResponseBody extends Model
{
    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $intentId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $modifyUserId;

    /**
     * @var userSay[]
     */
    public $userSay;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var slot[]
     */
    public $slot;

    /**
     * @var ruleCheck[]
     */
    public $ruleCheck;
    protected $_name = [
        'modifyTime'     => 'ModifyTime',
        'requestId'      => 'RequestId',
        'createTime'     => 'CreateTime',
        'dialogId'       => 'DialogId',
        'createUserId'   => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'name'           => 'Name',
        'intentId'       => 'IntentId',
        'type'           => 'Type',
        'modifyUserId'   => 'ModifyUserId',
        'userSay'        => 'UserSay',
        'modifyUserName' => 'ModifyUserName',
        'slot'           => 'Slot',
        'ruleCheck'      => 'RuleCheck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }
        if (null !== $this->userSay) {
            $res['UserSay'] = [];
            if (null !== $this->userSay && \is_array($this->userSay)) {
                $n = 0;
                foreach ($this->userSay as $item) {
                    $res['UserSay'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->slot) {
            $res['Slot'] = [];
            if (null !== $this->slot && \is_array($this->slot)) {
                $n = 0;
                foreach ($this->slot as $item) {
                    $res['Slot'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleCheck) {
            $res['RuleCheck'] = [];
            if (null !== $this->ruleCheck && \is_array($this->ruleCheck)) {
                $n = 0;
                foreach ($this->ruleCheck as $item) {
                    $res['RuleCheck'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIntentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }
        if (isset($map['UserSay'])) {
            if (!empty($map['UserSay'])) {
                $model->userSay = [];
                $n              = 0;
                foreach ($map['UserSay'] as $item) {
                    $model->userSay[$n++] = null !== $item ? userSay::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['Slot'])) {
            if (!empty($map['Slot'])) {
                $model->slot = [];
                $n           = 0;
                foreach ($map['Slot'] as $item) {
                    $model->slot[$n++] = null !== $item ? slot::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleCheck'])) {
            if (!empty($map['RuleCheck'])) {
                $model->ruleCheck = [];
                $n                = 0;
                foreach ($map['RuleCheck'] as $item) {
                    $model->ruleCheck[$n++] = null !== $item ? ruleCheck::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
