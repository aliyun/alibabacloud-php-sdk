<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreatePluginConfigRequest extends Model
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
     * @var string
     */
    public $config;

    /**
     * @description The application scope of the plug-in. Valid values:
     *
     *   0: global
     *   1: route
     *   2: domain name
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $configLevel;

    /**
     * @description Indicates whether the plug-in is enabled.
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The unique ID of the gateway.
     *
     * This parameter is required.
     *
     * @example gw-ubuwqygbq4783gqb2y3f87q****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The gateway plug-in ID.
     *
     * This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pluginId;

    /**
     * @description The domain IDs or route IDs. They are distinguished based on ConfigLevel.
     *
     * @var int[]
     */
    public $resourceIdList;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'config' => 'Config',
        'configLevel' => 'ConfigLevel',
        'enable' => 'Enable',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'pluginId' => 'PluginId',
        'resourceIdList' => 'ResourceIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->configLevel) {
            $res['ConfigLevel'] = $this->configLevel;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }
        if (null !== $this->resourceIdList) {
            $res['ResourceIdList'] = $this->resourceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePluginConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ConfigLevel'])) {
            $model->configLevel = $map['ConfigLevel'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['ResourceIdList'])) {
            if (!empty($map['ResourceIdList'])) {
                $model->resourceIdList = $map['ResourceIdList'];
            }
        }

        return $model;
    }
}
