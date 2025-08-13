<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class CreatePluginConfigShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $config;

    /**
     * @var int
     */
    public $configLevel;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var int
     */
    public $pluginId;

    /**
     * @var string
     */
    public $resourceIdListShrink;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'config' => 'Config',
        'configLevel' => 'ConfigLevel',
        'enable' => 'Enable',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'pluginId' => 'PluginId',
        'resourceIdListShrink' => 'ResourceIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
