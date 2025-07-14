<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\ruleCheck;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\slot;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\userSay;
use AlibabaCloud\Tea\Model;

class intentList extends Model
{
    /**
     * @var string[]
     */
    public $alias;

    /**
     * @example chatbot-cn-n7QmzrUnNe
     *
     * @var int
     */
    public $botId;

    /**
     * @example 111
     *
     * @var string
     */
    public $botName;

    /**
     * @example 50099
     *
     * @var string
     */
    public $dialogId;

    /**
     * @example 10717802
     *
     * @var int
     */
    public $id;

    /**
     * @example zh-cn
     *
     * @var string
     */
    public $language;

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
     * @example 43258
     *
     * @var int
     */
    public $tableId;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @var userSay[]
     */
    public $userSay;
    protected $_name = [
        'alias' => 'Alias',
        'botId' => 'BotId',
        'botName' => 'BotName',
        'dialogId' => 'DialogId',
        'id' => 'Id',
        'language' => 'Language',
        'name' => 'Name',
        'ruleCheck' => 'RuleCheck',
        'slot' => 'Slot',
        'tableId' => 'TableId',
        'type' => 'Type',
        'userSay' => 'UserSay',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->botId) {
            $res['BotId'] = $this->botId;
        }
        if (null !== $this->botName) {
            $res['BotName'] = $this->botName;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
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
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
     * @return intentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            if (!empty($map['Alias'])) {
                $model->alias = $map['Alias'];
            }
        }
        if (isset($map['BotId'])) {
            $model->botId = $map['BotId'];
        }
        if (isset($map['BotName'])) {
            $model->botName = $map['BotName'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleCheck'])) {
            if (!empty($map['RuleCheck'])) {
                $model->ruleCheck = [];
                $n = 0;
                foreach ($map['RuleCheck'] as $item) {
                    $model->ruleCheck[$n++] = null !== $item ? ruleCheck::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Slot'])) {
            if (!empty($map['Slot'])) {
                $model->slot = [];
                $n = 0;
                foreach ($map['Slot'] as $item) {
                    $model->slot[$n++] = null !== $item ? slot::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserSay'])) {
            if (!empty($map['UserSay'])) {
                $model->userSay = [];
                $n = 0;
                foreach ($map['UserSay'] as $item) {
                    $model->userSay[$n++] = null !== $item ? userSay::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
