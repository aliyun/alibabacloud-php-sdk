<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

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
        'name'         => 'name',
        'primaryTable' => 'primaryTable',
        'fields'       => 'fields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->primaryTable) {
            $res['primaryTable'] = $this->primaryTable;
        }
        if (null !== $this->fields) {
            $res['fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                foreach ($this->fields as $key => $val) {
                    $res['fields'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SchemaTablesValue
     */
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
            $model->fields = $map['fields'];
        }

        return $model;
    }
}
