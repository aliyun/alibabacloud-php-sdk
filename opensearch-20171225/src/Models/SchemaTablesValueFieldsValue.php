<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class SchemaTablesValueFieldsValue extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $primaryKey;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $joinWith;

    /**
     * @var string
     */
    public $label;
    protected $_name = [
        'name'       => 'name',
        'primaryKey' => 'primaryKey',
        'type'       => 'type',
        'joinWith'   => 'joinWith',
        'label'      => 'label',
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
        if (null !== $this->primaryKey) {
            $res['primaryKey'] = $this->primaryKey;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->joinWith) {
            $res['joinWith'] = $this->joinWith;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SchemaTablesValueFieldsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['primaryKey'])) {
            $model->primaryKey = $map['primaryKey'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['joinWith'])) {
            if (!empty($map['joinWith'])) {
                $model->joinWith = $map['joinWith'];
            }
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        return $model;
    }
}
