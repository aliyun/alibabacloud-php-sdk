<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateIntentRequest extends Model
{
    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var IntentCreateDTO
     */
    public $intentDefinition;
    protected $_name = [
        'dialogId'         => 'DialogId',
        'intentDefinition' => 'IntentDefinition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->intentDefinition) {
            $res['IntentDefinition'] = null !== $this->intentDefinition ? $this->intentDefinition->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIntentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['IntentDefinition'])) {
            $model->intentDefinition = IntentCreateDTO::fromMap($map['IntentDefinition']);
        }

        return $model;
    }
}
