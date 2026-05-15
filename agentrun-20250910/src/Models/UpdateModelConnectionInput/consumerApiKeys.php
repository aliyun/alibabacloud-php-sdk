<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\UpdateModelConnectionInput;

use AlibabaCloud\Dara\Model;

class consumerApiKeys extends Model
{
    /**
     * @var string
     */
    public $apiKeyId;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'apiKeyId' => 'apiKeyId',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyId) {
            $res['apiKeyId'] = $this->apiKeyId;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['apiKeyId'])) {
            $model->apiKeyId = $map['apiKeyId'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
