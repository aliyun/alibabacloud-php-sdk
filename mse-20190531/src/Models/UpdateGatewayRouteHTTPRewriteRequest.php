<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayRouteHTTPRewriteRequest extends Model
{
    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $httpRewriteJSON;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'gatewayId'       => 'GatewayId',
        'httpRewriteJSON' => 'HttpRewriteJSON',
        'id'              => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->httpRewriteJSON) {
            $res['HttpRewriteJSON'] = $this->httpRewriteJSON;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayRouteHTTPRewriteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['HttpRewriteJSON'])) {
            $model->httpRewriteJSON = $map['HttpRewriteJSON'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
