<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesRequest;

use AlibabaCloud\Tea\Model;

class sorter extends Model
{
    /**
     * @example desc
     *
     * @var string
     */
    public $lastDdlTime;

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
    protected $_name = [
        'lastDdlTime' => 'lastDdlTime',
        'numRows' => 'numRows',
        'size' => 'size',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastDdlTime) {
            $res['lastDdlTime'] = $this->lastDdlTime;
        }
        if (null !== $this->numRows) {
            $res['numRows'] = $this->numRows;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['lastDdlTime'])) {
            $model->lastDdlTime = $map['lastDdlTime'];
        }
        if (isset($map['numRows'])) {
            $model->numRows = $map['numRows'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
