<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesResponseBody\data\tables;

use AlibabaCloud\Tea\Model;

class nativeColumns extends Model
{
    /**
     * @description The remarks.
     *
     * @example Store name
     *
     * @var string
     */
    public $comment;

    /**
     * @description The security level of the column.
     *
     * @example 0
     *
     * @var string
     */
    public $label;

    /**
     * @description The name of the column.
     *
     * @example shop_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the column.
     *
     * @example STRING
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'comment' => 'comment',
        'label'   => 'label',
        'name'    => 'name',
        'type'    => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nativeColumns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
