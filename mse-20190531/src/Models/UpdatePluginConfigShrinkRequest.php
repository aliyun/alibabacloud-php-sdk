<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdatePluginConfigShrinkRequest extends Model
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
     * @var string
     */
    public $resourceIdListShrink;
    protected $_name = [
        'acceptLanguage'       => 'AcceptLanguage',
        'config'               => 'Config',
        'configLevel'          => 'ConfigLevel',
        'enable'               => 'Enable',
        'gatewayId'            => 'GatewayId',
        'gatewayUniqueId'      => 'GatewayUniqueId',
        'gmtCreate'            => 'GmtCreate',
        'gmtModified'          => 'GmtModified',
        'id'                   => 'Id',
        'pluginId'             => 'PluginId',
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

        if (isset($map['ResourceIdList'])) {
            $model->resourceIdListShrink = $map['ResourceIdList'];
        }

        return $model;
    }
}
