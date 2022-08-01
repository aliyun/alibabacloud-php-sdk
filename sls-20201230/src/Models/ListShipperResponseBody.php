<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListShipperResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string[]
     */
    public $shipper;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'count'   => 'count',
        'shipper' => 'shipper',
        'total'   => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->shipper) {
            $res['shipper'] = $this->shipper;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListShipperResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['shipper'])) {
            if (!empty($map['shipper'])) {
                $model->shipper = $map['shipper'];
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
