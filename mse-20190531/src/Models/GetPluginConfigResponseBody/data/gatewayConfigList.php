<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class gatewayConfigList extends Model
{
    /**
     * @description The plug-in configuration.
     *
     * @example \# The configuration includes the fields required for checking, such as name, age, and friends. Sample configuration: name: John age: 18 friends: - David - Anne
     *
     * @var string
     */
    public $config;

    /**
     * @description The application scope of the plug-in.
     *
     * 2: routes
     * @example 0
     *
     * @var int
     */
    public $configLevel;

    /**
     * @description Indicates whether the plug-in is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The ID of the gateway.
     *
     * @example 1
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-ubuwqygbq4783gqb2y3f87q****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The creation time.
     *
     * @example 1667309705000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The update time.
     *
     * @example 1667309705000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the plug-in configuration.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the gateway plug-in.
     *
     * @example 1
     *
     * @var int
     */
    public $pluginId;
    protected $_name = [
        'config'          => 'Config',
        'configLevel'     => 'ConfigLevel',
        'enable'          => 'Enable',
        'gatewayId'       => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'pluginId'        => 'PluginId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->configLevel) {
            $res['ConfigLevel'] = $this->configLevel;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ConfigLevel'])) {
            $model->configLevel = $map['ConfigLevel'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }

        return $model;
    }
}
