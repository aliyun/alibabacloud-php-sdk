<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateKnowledgeBaseResponseBody\data;

use AlibabaCloud\Dara\Model;

class metadataSchema extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueMode;
    protected $_name = [
        'name' => 'name',
        'type' => 'type',
        'value' => 'value',
        'valueMode' => 'valueMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        if (null !== $this->valueMode) {
            $res['valueMode'] = $this->valueMode;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        if (isset($map['valueMode'])) {
            $model->valueMode = $map['valueMode'];
        }

        return $model;
    }
}
