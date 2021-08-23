<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UpdateIntentRequest extends Model
{
    /**
     * @var IntentCreateDTO
     */
    public $intentDefinition;

    /**
     * @var int
     */
    public $intentId;
    protected $_name = [
        'intentDefinition' => 'IntentDefinition',
        'intentId'         => 'IntentId',
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
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIntentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentDefinition'])) {
            $model->intentDefinition = IntentCreateDTO::fromMap($map['IntentDefinition']);
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }

        return $model;
    }
}
