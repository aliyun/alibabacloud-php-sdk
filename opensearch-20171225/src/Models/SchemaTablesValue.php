<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class SchemaTablesValue extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $primaryTable;

    /**
     * @var SchemaTablesValueFieldsValue[]
     */
    public $fields;
    protected $_name = [
        'name' => 'name',
        'primaryTable' => 'primaryTable',
        'fields' => 'fields',
    ];

    public function validate()
    {
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->primaryTable) {
            $res['primaryTable'] = $this->primaryTable;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                foreach ($this->fields as $key1 => $value1) {
                    $res['fields'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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

        if (isset($map['primaryTable'])) {
            $model->primaryTable = $map['primaryTable'];
        }

        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                foreach ($map['fields'] as $key1 => $value1) {
                    $model->fields[$key1] = SchemaTablesValueFieldsValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
