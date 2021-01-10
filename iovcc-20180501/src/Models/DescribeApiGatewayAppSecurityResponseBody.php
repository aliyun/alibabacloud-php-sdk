<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeApiGatewayAppSecurityResponseBody\apiGatewayAppSecurity;
use AlibabaCloud\Tea\Model;

class DescribeApiGatewayAppSecurityResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var apiGatewayAppSecurity
     */
    public $apiGatewayAppSecurity;
    protected $_name = [
        'requestId'             => 'RequestId',
        'apiGatewayAppSecurity' => 'ApiGatewayAppSecurity',
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
        if (null !== $this->apiGatewayAppSecurity) {
            $res['ApiGatewayAppSecurity'] = null !== $this->apiGatewayAppSecurity ? $this->apiGatewayAppSecurity->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiGatewayAppSecurityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ApiGatewayAppSecurity'])) {
            $model->apiGatewayAppSecurity = apiGatewayAppSecurity::fromMap($map['ApiGatewayAppSecurity']);
        }

        return $model;
    }
}
