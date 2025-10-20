<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class FunctionChange extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var FunctionDefinition
     */
    public $definition;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'action' => 'action',
        'comment' => 'comment',
        'definition' => 'definition',
        'key' => 'key',
        'name' => 'name',
        'value' => 'value',
    ];

    public function validate()
    {
        if (null !== $this->definition) {
            $this->definition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->definition) {
            $res['definition'] = null !== $this->definition ? $this->definition->toArray($noStream) : $this->definition;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['definition'])) {
            $model->definition = FunctionDefinition::fromMap($map['definition']);
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
