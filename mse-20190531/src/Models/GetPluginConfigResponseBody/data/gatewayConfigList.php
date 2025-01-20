<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginConfigResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetPluginConfigResponseBody\data\gatewayConfigList\resourceList;

class gatewayConfigList extends Model
{
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
     * @var int
     */
    public $gatewayId;
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $pluginId;
    /**
     * @var resourceList[]
     */
    public $resourceList;
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
        'resourceList'    => 'ResourceList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->resourceList) {
            if (\is_array($this->resourceList)) {
                $res['ResourceList'] = [];
                $n1                  = 0;
                foreach ($this->resourceList as $item1) {
                    $res['ResourceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n1                  = 0;
                foreach ($map['ResourceList'] as $item1) {
                    $model->resourceList[$n1++] = resourceList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
