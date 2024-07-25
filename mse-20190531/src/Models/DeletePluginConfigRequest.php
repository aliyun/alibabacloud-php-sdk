<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeletePluginConfigRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description This parameter is required.
     *
     * @example gw-e2d226bba4b2445c9e29fa7f8216****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description This parameter is required.
     *
     * @example 200
     *
     * @var int
     */
    public $pluginConfigId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'pluginConfigId'  => 'PluginConfigId',
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
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->pluginConfigId) {
            $res['PluginConfigId'] = $this->pluginConfigId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePluginConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['PluginConfigId'])) {
            $model->pluginConfigId = $map['PluginConfigId'];
        }

        return $model;
    }
}
