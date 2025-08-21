<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateLgfRequest;

use AlibabaCloud\Dara\Model;

class lgfDefinition extends Model
{
    /**
     * @var int
     */
    public $intentId;

    /**
     * @var string
     */
    public $ruleText;
    protected $_name = [
        'intentId' => 'IntentId',
        'ruleText' => 'RuleText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }

        if (null !== $this->ruleText) {
            $res['RuleText'] = $this->ruleText;
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
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }

        if (isset($map['RuleText'])) {
            $model->ruleText = $map['RuleText'];
        }

        return $model;
    }
}
