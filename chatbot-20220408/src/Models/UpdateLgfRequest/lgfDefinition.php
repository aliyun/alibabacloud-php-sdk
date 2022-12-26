<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateLgfRequest;

use AlibabaCloud\Tea\Model;

class lgfDefinition extends Model
{
    /**
     * @example 23234523522
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return lgfDefinition
     */
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
