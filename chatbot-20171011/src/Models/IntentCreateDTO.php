<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class IntentCreateDTO extends Model
{
    /**
     * @description IntentId
     *
     * @var int
     */
    public $intentId;

    /**
     * @description Name
     *
     * @var string
     */
    public $name;

    /**
     * @description RuleCheck
     *
     * @var RuleMtopDTO[]
     */
    public $ruleCheck;

    /**
     * @var SlotrecordMtopDTO[]
     */
    public $slot;

    /**
     * @description UserSay
     *
     * @var UsersayMtopDTO[]
     */
    public $userSay;
    protected $_name = [
        'intentId'  => 'IntentId',
        'name'      => 'Name',
        'ruleCheck' => 'RuleCheck',
        'slot'      => 'Slot',
        'userSay'   => 'UserSay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
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
     * @return IntentCreateDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleCheck'])) {
            if (!empty($map['RuleCheck'])) {
                $model->ruleCheck = [];
                $n                = 0;
                foreach ($map['RuleCheck'] as $item) {
                    $model->ruleCheck[$n++] = null !== $item ? RuleMtopDTO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Slot'])) {
            if (!empty($map['Slot'])) {
                $model->slot = [];
                $n           = 0;
                foreach ($map['Slot'] as $item) {
                    $model->slot[$n++] = null !== $item ? SlotrecordMtopDTO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserSay'])) {
            if (!empty($map['UserSay'])) {
                $model->userSay = [];
                $n              = 0;
                foreach ($map['UserSay'] as $item) {
                    $model->userSay[$n++] = null !== $item ? UsersayMtopDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
