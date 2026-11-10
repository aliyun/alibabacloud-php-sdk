<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ModelParameters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ModelParameters\responseFormat\jsonSchema;

class responseFormat extends Model
{
    /**
     * @var jsonSchema
     */
    public $jsonSchema;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'jsonSchema' => 'jsonSchema',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->jsonSchema) {
            $this->jsonSchema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jsonSchema) {
            $res['jsonSchema'] = null !== $this->jsonSchema ? $this->jsonSchema->toArray($noStream) : $this->jsonSchema;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['jsonSchema'])) {
            $model->jsonSchema = jsonSchema::fromMap($map['jsonSchema']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
