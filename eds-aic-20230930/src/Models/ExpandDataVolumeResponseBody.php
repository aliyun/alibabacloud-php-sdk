<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ExpandDataVolumeResponseBody extends Model
{
    /**
     * @example 22326560487****
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 5C5CEF0A-D6E1-58D3-8750-67DB4F82****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExpandDataVolumeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
