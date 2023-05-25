<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ValidateVpcConnectivityResponseBody extends Model
{
    /**
     * @example True
     *
     * @var bool
     */
    public $connected;

    /**
     * @example ECS
     *
     * @var string
     */
    public $ipType;

    /**
     * @example 9A591B5B-0EC2-5463-B8B8-1984AE3AEBF1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connected' => 'Connected',
        'ipType'    => 'IpType',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connected) {
            $res['Connected'] = $this->connected;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateVpcConnectivityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Connected'])) {
            $model->connected = $map['Connected'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
