<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class CheckDeviceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $available;
    protected $_name = [
        'requestId' => 'RequestId',
        'available' => 'Available',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->available) {
            $res['Available'] = $this->available;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }

        return $model;
    }
}
