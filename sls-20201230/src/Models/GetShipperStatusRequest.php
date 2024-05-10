<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetShipperStatusRequest extends Model
{
    /**
     * @description The start time of the log shipping job. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1409529600
     *
     * @var int
     */
    public $from;

    /**
     * @description The line from which the query starts. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The number of entries per page. Default value: 100. Maximum value: 500.
     *
     * @example 100
     *
     * @var int
     */
    public $size;

    /**
     * @description The status of the log shipping job. This parameter is empty by default, which indicates that log shipping jobs in all states are returned. Valid values: success, fail, and running.
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The end time of the log shipping job. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
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
