<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateLgfRequest;

use AlibabaCloud\Tea\Model;

class lgfDefinition extends Model
{
    /**
     * @description 意图ID
     *
     * @var int
     */
    public $intentId;

    /**
     * @description LGF配置
     *
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
