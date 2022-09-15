<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy\loadBalancerSettings;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayServiceResponseBody\data\result\gatewayTrafficPolicy\loadBalancerSettings\consistentHashLBConfig\httpCookie;
use AlibabaCloud\Tea\Model;

class consistentHashLBConfig extends Model
{
    /**
     * @var string
     */
    public $consistentHashLBType;

    /**
     * @var httpCookie
     */
    public $httpCookie;

    /**
     * @var int
     */
    public $minimumRingSize;

    /**
     * @var string
     */
    public $parameterName;
    protected $_name = [
        'consistentHashLBType' => 'ConsistentHashLBType',
        'httpCookie'           => 'HttpCookie',
        'minimumRingSize'      => 'MinimumRingSize',
        'parameterName'        => 'ParameterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consistentHashLBType) {
            $res['ConsistentHashLBType'] = $this->consistentHashLBType;
        }
        if (null !== $this->httpCookie) {
            $res['HttpCookie'] = null !== $this->httpCookie ? $this->httpCookie->toMap() : null;
        }
        if (null !== $this->minimumRingSize) {
            $res['MinimumRingSize'] = $this->minimumRingSize;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consistentHashLBConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsistentHashLBType'])) {
            $model->consistentHashLBType = $map['ConsistentHashLBType'];
        }
        if (isset($map['HttpCookie'])) {
            $model->httpCookie = httpCookie::fromMap($map['HttpCookie']);
        }
        if (isset($map['MinimumRingSize'])) {
            $model->minimumRingSize = $map['MinimumRingSize'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }

        return $model;
    }
}
