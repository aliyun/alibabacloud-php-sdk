<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryIntentsResponseBody;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryIntentsResponseBody\intents\ruleCheck;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryIntentsResponseBody\intents\slot;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryIntentsResponseBody\intents\userSay;
use AlibabaCloud\Tea\Model;

class intents extends Model
{
    /**
     * @example 2020-11-30T03:03:37Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 83225
     *
     * @var string
     */
    public $createUserId;

    /**
     * @example null
     *
     * @var string
     */
    public $createUserName;

    /**
     * @example 126558
     *
     * @var int
     */
    public $intentId;

    /**
     * @example 2020-11-30T03:03:37Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 83325
     *
     * @var string
     */
    public $modifyUserId;

    /**
     * @example null
     *
     * @var string
     */
    public $modifyUserName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ruleCheck[]
     */
    public $ruleCheck;

    /**
     * @var slot[]
     */
    public $slot;

    /**
     * @var userSay[]
     */
    public $userSay;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'createUserId'   => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'intentId'       => 'IntentId',
        'modifyTime'     => 'ModifyTime',
        'modifyUserId'   => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'name'           => 'Name',
        'ruleCheck'      => 'RuleCheck',
        'slot'           => 'Slot',
        'userSay'        => 'UserSay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->slot) {
            $res['Slot'] = [];
            if (null !== $this->slot && \is_array($this->slot)) {
                $n = 0;
                foreach ($this->slot as $item) {
                    $res['Slot'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['Slot'])) {
            if (!empty($map['Slot'])) {
                $model->slot = [];
                $n           = 0;
                foreach ($map['Slot'] as $item) {
                    $model->slot[$n++] = null !== $item ? slot::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
