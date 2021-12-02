<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateHaVipResponseBody extends Model
{
    /**
     * @var string
     */
    public $haVipId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'haVipId'   => 'HaVipId',
        'ipAddress' => 'IpAddress',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVipId) {
            $res['HaVipId'] = $this->haVipId;
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
     * @return CreateHaVipResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVipId'])) {
            $model->haVipId = $map['HaVipId'];
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
