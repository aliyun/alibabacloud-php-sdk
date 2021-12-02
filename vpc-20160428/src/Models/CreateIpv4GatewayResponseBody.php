<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIpv4GatewayResponseBody extends Model
{
    /**
     * @var string
     */
    public $ipv4GatewayId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipv4GatewayId' => 'Ipv4GatewayId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4GatewayId) {
            $res['Ipv4GatewayId'] = $this->ipv4GatewayId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpv4GatewayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4GatewayId'])) {
            $model->ipv4GatewayId = $map['Ipv4GatewayId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
