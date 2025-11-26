<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\ruleCheck;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\slot;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\userSay;

class intentList extends Model
{
    /**
     * @var string[]
     */
    public $alias;

    /**
     * @var int
     */
    public $botId;

    /**
     * @var string
     */
    public $botName;

    /**
     * @var string
     */
    public $dialogId;

    /**
     * @var int
     */
    public $id;

    /**
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
     * @var int
     */
    public $tableId;

    /**
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

    public function validate()
    {
        if (\is_array($this->alias)) {
            Model::validateArray($this->alias);
        }
        if (\is_array($this->ruleCheck)) {
            Model::validateArray($this->ruleCheck);
        }
        if (\is_array($this->slot)) {
            Model::validateArray($this->slot);
        }
        if (\is_array($this->userSay)) {
            Model::validateArray($this->userSay);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            if (\is_array($this->alias)) {
                $res['Alias'] = [];
                $n1 = 0;
                foreach ($this->alias as $item1) {
                    $res['Alias'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->ruleCheck)) {
                $res['RuleCheck'] = [];
                $n1 = 0;
                foreach ($this->ruleCheck as $item1) {
                    $res['RuleCheck'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->slot) {
            if (\is_array($this->slot)) {
                $res['Slot'] = [];
                $n1 = 0;
                foreach ($this->slot as $item1) {
                    $res['Slot'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->userSay)) {
                $res['UserSay'] = [];
                $n1 = 0;
                foreach ($this->userSay as $item1) {
                    $res['UserSay'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            if (!empty($map['Alias'])) {
                $model->alias = [];
                $n1 = 0;
                foreach ($map['Alias'] as $item1) {
                    $model->alias[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['RuleCheck'] as $item1) {
                    $model->ruleCheck[$n1] = ruleCheck::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Slot'])) {
            if (!empty($map['Slot'])) {
                $model->slot = [];
                $n1 = 0;
                foreach ($map['Slot'] as $item1) {
                    $model->slot[$n1] = slot::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['UserSay'] as $item1) {
                    $model->userSay[$n1] = userSay::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
