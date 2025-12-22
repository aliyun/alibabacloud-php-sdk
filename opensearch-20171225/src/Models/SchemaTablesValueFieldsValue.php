<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

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
        'name' => 'name',
        'primaryKey' => 'primaryKey',
        'type' => 'type',
        'joinWith' => 'joinWith',
        'label' => 'label',
    ];

    public function validate()
    {
        if (\is_array($this->joinWith)) {
            Model::validateArray($this->joinWith);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->joinWith)) {
                $res['joinWith'] = [];
                $n1 = 0;
                foreach ($this->joinWith as $item1) {
                    $res['joinWith'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
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

        if (isset($map['primaryKey'])) {
            $model->primaryKey = $map['primaryKey'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['joinWith'])) {
            if (!empty($map['joinWith'])) {
                $model->joinWith = [];
                $n1 = 0;
                foreach ($map['joinWith'] as $item1) {
                    $model->joinWith[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        return $model;
    }
}
