<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateGlobalAccelerationInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $globalAccelerationInstanceId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'globalAccelerationInstanceId' => 'GlobalAccelerationInstanceId',
        'ipAddress'                    => 'IpAddress',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalAccelerationInstanceId) {
            $res['GlobalAccelerationInstanceId'] = $this->globalAccelerationInstanceId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGlobalAccelerationInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalAccelerationInstanceId'])) {
            $model->globalAccelerationInstanceId = $map['GlobalAccelerationInstanceId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
