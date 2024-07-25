<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreatePluginConfigShrinkRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example status_code: 200
     * body: "{\\"rule\\": \\"global\\"}"
     * @var string
     */
    public $config;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $configLevel;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description This parameter is required.
     *
     * @example gw-ubuwqygbq4783gqb2y3f87q****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pluginId;

    /**
     * @var string
     */
    public $resourceIdListShrink;
    protected $_name = [
        'acceptLanguage'       => 'AcceptLanguage',
        'config'               => 'Config',
        'configLevel'          => 'ConfigLevel',
        'enable'               => 'Enable',
        'gatewayUniqueId'      => 'GatewayUniqueId',
        'pluginId'             => 'PluginId',
        'resourceIdListShrink' => 'ResourceIdList',
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
        if (null !== $this->resourceIdListShrink) {
            $res['ResourceIdList'] = $this->resourceIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePluginConfigShrinkRequest
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
            $model->resourceIdListShrink = $map['ResourceIdList'];
        }

        return $model;
    }
}
