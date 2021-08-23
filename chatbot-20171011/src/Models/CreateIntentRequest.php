<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateIntentRequest extends Model
{
    /**
     * @var IntentCreateDTO
     */
    public $intentDefinition;

    /**
     * @var int
     */
    public $dialogId;
    protected $_name = [
        'intentDefinition' => 'IntentDefinition',
        'dialogId'         => 'DialogId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentDefinition) {
            $res['IntentDefinition'] = null !== $this->intentDefinition ? $this->intentDefinition->toMap() : null;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
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
        if (isset($map['IntentDefinition'])) {
            $model->intentDefinition = IntentCreateDTO::fromMap($map['IntentDefinition']);
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }

        return $model;
    }
}
