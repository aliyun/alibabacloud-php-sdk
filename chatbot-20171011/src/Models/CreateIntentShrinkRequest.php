<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateIntentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $intentDefinitionShrink;

    /**
     * @var int
     */
    public $dialogId;
    protected $_name = [
        'intentDefinitionShrink' => 'IntentDefinition',
        'dialogId'               => 'DialogId',
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
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIntentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentDefinition'])) {
            $model->intentDefinitionShrink = $map['IntentDefinition'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }

        return $model;
    }
}
