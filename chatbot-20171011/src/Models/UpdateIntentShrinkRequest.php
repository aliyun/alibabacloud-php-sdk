<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UpdateIntentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $intentDefinitionShrink;

    /**
     * @var int
     */
    public $intentId;
    protected $_name = [
        'intentDefinitionShrink' => 'IntentDefinition',
        'intentId'               => 'IntentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentDefinitionShrink) {
            $res['IntentDefinition'] = $this->intentDefinitionShrink;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIntentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentDefinition'])) {
            $model->intentDefinitionShrink = $map['IntentDefinition'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }

        return $model;
    }
}
