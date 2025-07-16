<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
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
        if (null !== $this->options) {
            $res['options'] = $this->options;
        }
        if (null !== $this->partitionKeys) {
            $res['partitionKeys'] = $this->partitionKeys;
        }
        if (null !== $this->primaryKeys) {
            $res['primaryKeys'] = $this->primaryKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Schema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
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
        if (isset($map['options'])) {
            $model->options = $map['options'];
        }
        if (isset($map['partitionKeys'])) {
            if (!empty($map['partitionKeys'])) {
                $model->partitionKeys = $map['partitionKeys'];
            }
        }
        if (isset($map['primaryKeys'])) {
            if (!empty($map['primaryKeys'])) {
                $model->primaryKeys = $map['primaryKeys'];
            }
        }

        return $model;
    }
}
