<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class EnableHttp2Request extends Model
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
     * @description Specifies whether to enable HTTP/2 for negotiation between the server and client. This parameter applies to requests. Valid values:
     *
     *   **true**
     *   **false**
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $enableHttp2;

    /**
     * @description The unique ID of the gateway.
     *
     * This parameter is required.
     * @example gw-0adf3ad751284cc69fcf9669fba*****
     *
     * @var string
     */
    public $gatewayUniqueId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'enableHttp2'     => 'EnableHttp2',
        'gatewayUniqueId' => 'GatewayUniqueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->enableHttp2) {
            $res['EnableHttp2'] = $this->enableHttp2;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableHttp2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['EnableHttp2'])) {
            $model->enableHttp2 = $map['EnableHttp2'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        return $model;
    }
}
