<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class DeleteDeviceCertificateResponseBody extends Model
{
    /**
     * @description The serial number of the device certificate whose registration information is deleted. The serial number is the unique identifier of a device certificate.
     *
     * @example 356217374433******
     *
     * @var string
     */
    public $deviceSn;

    /**
     * @description The request ID.
     *
     * @example 020F6A43-19E6-4B6E-B846-44EB31DF****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deviceSn'  => 'DeviceSn',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeleteDeviceCertificateResponseBody
     */
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
