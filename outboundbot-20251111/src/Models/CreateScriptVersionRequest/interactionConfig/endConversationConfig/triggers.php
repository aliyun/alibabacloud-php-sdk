<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\CreateScriptVersionRequest\interactionConfig\endConversationConfig;

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
    public $keywords;

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
        'keywords' => 'Keywords',
        'triggerType' => 'TriggerType',
        'turnLimit' => 'TurnLimit',
    ];

    public function validate()
    {
        if (\is_array($this->keywords)) {
            Model::validateArray($this->keywords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->closingStatement) {
            $res['ClosingStatement'] = $this->closingStatement;
        }

        if (null !== $this->keywords) {
            if (\is_array($this->keywords)) {
                $res['Keywords'] = [];
                $n1 = 0;
                foreach ($this->keywords as $item1) {
                    $res['Keywords'][$n1] = $item1;
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

        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = [];
                $n1 = 0;
                foreach ($map['Keywords'] as $item1) {
                    $model->keywords[$n1] = $item1;
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
