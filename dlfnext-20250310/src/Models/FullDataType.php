<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->element) {
            $res['element'] = null !== $this->element ? $this->element->toMap() : null;
        }
        if (null !== $this->fields) {
            $res['fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->key) {
            $res['key'] = null !== $this->key ? $this->key->toMap() : null;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = null !== $this->value ? $this->value->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FullDataType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['element'])) {
            $model->element = self::fromMap($map['element']);
        }
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n = 0;
                foreach ($map['fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? DataField::fromMap($item) : $item;
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
