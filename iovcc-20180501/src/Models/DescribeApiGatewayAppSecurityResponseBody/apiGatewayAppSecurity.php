<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeApiGatewayAppSecurityResponseBody;

use AlibabaCloud\Tea\Model;

class apiGatewayAppSecurity extends Model
{
    /**
     * @var string
     */
    public $gatewayAppId;

    /**
     * @var string
     */
    public $gatewayAppKey;

    /**
     * @var string
     */
    public $gatewayAppSecret;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;
    protected $_name = [
        'gatewayAppId'     => 'GatewayAppId',
        'gatewayAppKey'    => 'GatewayAppKey',
        'gatewayAppSecret' => 'GatewayAppSecret',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayAppId) {
            $res['GatewayAppId'] = $this->gatewayAppId;
        }
        if (null !== $this->gatewayAppKey) {
            $res['GatewayAppKey'] = $this->gatewayAppKey;
        }
        if (null !== $this->gatewayAppSecret) {
            $res['GatewayAppSecret'] = $this->gatewayAppSecret;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiGatewayAppSecurity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayAppId'])) {
            $model->gatewayAppId = $map['GatewayAppId'];
        }
        if (isset($map['GatewayAppKey'])) {
            $model->gatewayAppKey = $map['GatewayAppKey'];
        }
        if (isset($map['GatewayAppSecret'])) {
            $model->gatewayAppSecret = $map['GatewayAppSecret'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}
