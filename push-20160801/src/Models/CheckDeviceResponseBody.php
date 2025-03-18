<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class CheckDeviceResponseBody extends Model
{
    /**
     * @example ture
     *
     * @var bool
     */
    public $available;

    /**
     * @example 9998B3CC-ED9E-4CB3-A8FB-DCC61296BFBC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'available' => 'Available',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
