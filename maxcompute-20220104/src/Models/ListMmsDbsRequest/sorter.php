<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsDbsRequest;

use AlibabaCloud\Tea\Model;

class sorter extends Model
{
    /**
     * @example desc
     *
     * @var string
     */
    public $numRows;

    /**
     * @example asc
     *
     * @var string
     */
    public $size;

    /**
     * @example 2024-12-17 15:44:17
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'numRows' => 'numRows',
        'size' => 'size',
        'updateTime' => 'updateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->numRows) {
            $res['numRows'] = $this->numRows;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sorter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['numRows'])) {
            $model->numRows = $map['numRows'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
