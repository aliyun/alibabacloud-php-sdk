<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class ActiveDeviceCertificateResponseBody extends Model
{
    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceSn' => 'DeviceSn',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
