<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTableDetailResponseBody\items;

use AlibabaCloud\Tea\Model;

class shard extends Model
{
    /**
     * @description The ID of the partition. Only the numeric part of the partition name is returned.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The number of rows in the table.
     *
     * @example 0
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'id'   => 'Id',
        'size' => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
