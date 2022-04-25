<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models;

use AlibabaCloud\Tea\Model;

class DescribeLabTokenRequest extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $ramUid;
    protected $_name = [
        'orderId' => 'OrderId',
        'ramUid'  => 'RamUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->ramUid) {
            $res['RamUid'] = $this->ramUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLabTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RamUid'])) {
            $model->ramUid = $map['RamUid'];
        }

        return $model;
    }
}
