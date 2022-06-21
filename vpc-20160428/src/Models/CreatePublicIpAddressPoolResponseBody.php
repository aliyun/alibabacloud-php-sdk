<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreatePublicIpAddressPoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $pulbicIpAddressPoolId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pulbicIpAddressPoolId' => 'PulbicIpAddressPoolId',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pulbicIpAddressPoolId) {
            $res['PulbicIpAddressPoolId'] = $this->pulbicIpAddressPoolId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePublicIpAddressPoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PulbicIpAddressPoolId'])) {
            $model->pulbicIpAddressPoolId = $map['PulbicIpAddressPoolId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
