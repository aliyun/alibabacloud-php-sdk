<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiGatewayAppSecurityRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $gatewayAppId;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'gatewayAppId' => 'GatewayAppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->gatewayAppId) {
            $res['GatewayAppId'] = $this->gatewayAppId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiGatewayAppSecurityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['GatewayAppId'])) {
            $model->gatewayAppId = $map['GatewayAppId'];
        }

        return $model;
    }
}
