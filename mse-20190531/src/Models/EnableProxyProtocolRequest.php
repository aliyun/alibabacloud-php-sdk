<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class EnableProxyProtocolRequest extends Model
{
    /**
     * @description The language in which you want to display the results. Valid values: zh and en. zh indicates Chinese, which is the default value. en indicates English.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Specifies whether to use the proxy protocol to preserve client IP addresses. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enableProxyProtocol;

    /**
     * @description The unique ID of the gateway.
     *
     * This parameter is required.
     *
     * @example gw-c9bc5afd61014165bd58f621b491*****
     *
     * @var string
     */
    public $gatewayUniqueId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'enableProxyProtocol' => 'EnableProxyProtocol',
        'gatewayUniqueId' => 'GatewayUniqueId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->enableProxyProtocol) {
            $res['EnableProxyProtocol'] = $this->enableProxyProtocol;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableProxyProtocolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['EnableProxyProtocol'])) {
            $model->enableProxyProtocol = $map['EnableProxyProtocol'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        return $model;
    }
}
