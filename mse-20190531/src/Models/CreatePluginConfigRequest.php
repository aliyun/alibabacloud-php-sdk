<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class CreatePluginConfigRequest extends Model
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
     * @var int[]
     */
    public $resourceIdList;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'config'          => 'Config',
        'configLevel'     => 'ConfigLevel',
        'enable'          => 'Enable',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'pluginId'        => 'PluginId',
        'resourceIdList'  => 'ResourceIdList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceIdList)) {
            Model::validateArray($this->resourceIdList);
        }
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

        if (null !== $this->resourceIdList) {
            if (\is_array($this->resourceIdList)) {
                $res['ResourceIdList'] = [];
                $n1                    = 0;
                foreach ($this->resourceIdList as $item1) {
                    $res['ResourceIdList'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['ResourceIdList'])) {
                $model->resourceIdList = [];
                $n1                    = 0;
                foreach ($map['ResourceIdList'] as $item1) {
                    $model->resourceIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
