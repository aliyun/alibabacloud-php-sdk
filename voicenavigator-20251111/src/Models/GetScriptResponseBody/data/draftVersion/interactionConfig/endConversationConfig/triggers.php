<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetScriptResponseBody\data\draftVersion\interactionConfig\endConversationConfig;

use AlibabaCloud\Dara\Model;

class triggers extends Model
{
    /**
     * @var string
     */
    public $closingStatement;

    /**
     * @var string[]
     */
    public $keyWords;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var int
     */
    public $turnLimit;
    protected $_name = [
        'closingStatement' => 'ClosingStatement',
        'keyWords' => 'KeyWords',
        'triggerType' => 'TriggerType',
        'turnLimit' => 'TurnLimit',
    ];

    public function validate()
    {
        if (\is_array($this->keyWords)) {
            Model::validateArray($this->keyWords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->closingStatement) {
            $res['ClosingStatement'] = $this->closingStatement;
        }

        if (null !== $this->keyWords) {
            if (\is_array($this->keyWords)) {
                $res['KeyWords'] = [];
                $n1 = 0;
                foreach ($this->keyWords as $item1) {
                    $res['KeyWords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        if (null !== $this->turnLimit) {
            $res['TurnLimit'] = $this->turnLimit;
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
        if (isset($map['ClosingStatement'])) {
            $model->closingStatement = $map['ClosingStatement'];
        }

        if (isset($map['KeyWords'])) {
            if (!empty($map['KeyWords'])) {
                $model->keyWords = [];
                $n1 = 0;
                foreach ($map['KeyWords'] as $item1) {
                    $model->keyWords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        if (isset($map['TurnLimit'])) {
            $model->turnLimit = $map['TurnLimit'];
        }

        return $model;
    }
}
