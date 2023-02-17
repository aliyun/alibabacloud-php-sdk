<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetShipperStatusRequest extends Model
{
    /**
     * @example 1409529600
     *
     * @var int
     */
    public $from;

    /**
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @example 100
     *
     * @var int
     */
    public $size;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example 1627269085
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'from'   => 'from',
        'offset' => 'offset',
        'size'   => 'size',
        'status' => 'status',
        'to'     => 'to',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->to) {
            $res['to'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetShipperStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        return $model;
    }
}
