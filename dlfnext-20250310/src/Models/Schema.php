<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class Schema extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var DataField[]
     */
    public $fields;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string[]
     */
    public $partitionKeys;

    /**
     * @var string[]
     */
    public $primaryKeys;
    protected $_name = [
        'comment' => 'comment',
        'fields' => 'fields',
        'options' => 'options',
        'partitionKeys' => 'partitionKeys',
        'primaryKeys' => 'primaryKeys',
    ];

    public function validate()
    {
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (\is_array($this->partitionKeys)) {
            Model::validateArray($this->partitionKeys);
        }
        if (\is_array($this->primaryKeys)) {
            Model::validateArray($this->primaryKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
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

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['options'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->partitionKeys) {
            if (\is_array($this->partitionKeys)) {
                $res['partitionKeys'] = [];
                $n1 = 0;
                foreach ($this->partitionKeys as $item1) {
                    $res['partitionKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->primaryKeys) {
            if (\is_array($this->primaryKeys)) {
                $res['primaryKeys'] = [];
                $n1 = 0;
                foreach ($this->primaryKeys as $item1) {
                    $res['primaryKeys'][$n1++] = $item1;
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
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
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

        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                foreach ($map['options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        if (isset($map['partitionKeys'])) {
            if (!empty($map['partitionKeys'])) {
                $model->partitionKeys = [];
                $n1 = 0;
                foreach ($map['partitionKeys'] as $item1) {
                    $model->partitionKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['primaryKeys'])) {
            if (!empty($map['primaryKeys'])) {
                $model->primaryKeys = [];
                $n1 = 0;
                foreach ($map['primaryKeys'] as $item1) {
                    $model->primaryKeys[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
