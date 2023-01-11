<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\RenewResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 21450******0275
     *
     * @var string
     */
    public $orderNo;

    /**
     * @example 12345678
     *
     * @var string
     */
    public $serialNo;
    protected $_name = [
        'orderNo'  => 'OrderNo',
        'serialNo' => 'SerialNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        return $model;
    }
}
