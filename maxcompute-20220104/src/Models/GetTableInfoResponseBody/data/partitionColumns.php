<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class partitionColumns extends Model
{
    /**
     * @description The comments of the partition key column.
     *
     * @example Sale date.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The sensitivity-level label of the column. For more information, see [Label-based access control](https://www.alibabacloud.com/help/maxcompute/user-guide/label-based-access-control).
     *
     * @example 0
     *
     * @var string
     */
    public $label;

    /**
     * @description The partition name.
     *
     * @example sale_date
     *
     * @var string
     */
    public $name;

    /**
     * @description The partition column type.
     *
     * @example STRING
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'comment' => 'comment',
        'label' => 'label',
        'name' => 'name',
        'type' => 'type',
    ];

    public function validate() {}

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
     * @return partitionColumns
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
