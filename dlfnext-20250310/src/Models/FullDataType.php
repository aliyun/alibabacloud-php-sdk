<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class FullDataType extends Model
{
    /**
     * @var FullDataType
     */
    public $element;

    /**
     * @var DataField[]
     */
    public $fields;

    /**
     * @var FullDataType
     */
    public $key;

    /**
     * @var string
     */
    public $type;

    /**
     * @var FullDataType
     */
    public $value;
    protected $_name = [
        'element' => 'element',
        'fields' => 'fields',
        'key' => 'key',
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate()
    {
        if (null !== $this->element) {
            $this->element->validate();
        }
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (null !== $this->key) {
            $this->key->validate();
        }
        if (null !== $this->value) {
            $this->value->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->element) {
            $res['element'] = null !== $this->element ? $this->element->toArray($noStream) : $this->element;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['fields'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->key) {
            $res['key'] = null !== $this->key ? $this->key->toArray($noStream) : $this->key;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = null !== $this->value ? $this->value->toArray($noStream) : $this->value;
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
        if (isset($map['element'])) {
            $model->element = self::fromMap($map['element']);
        }

        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['fields'] as $item1) {
                    $model->fields[$n1++] = DataField::fromMap($item1);
                }
            }
        }

        if (isset($map['key'])) {
            $model->key = self::fromMap($map['key']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['value'])) {
            $model->value = self::fromMap($map['value']);
        }

        return $model;
    }
}
