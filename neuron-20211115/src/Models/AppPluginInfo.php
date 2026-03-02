<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class AppPluginInfo extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var int
     */
    public $appVersionId;

    /**
     * @var MobiPluginConfig
     */
    public $config;

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
     * @var string
     */
    public $pluginKey;

    /**
     * @var string
     */
    public $pluginType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'appId' => 'appId',
        'appVersion' => 'appVersion',
        'appVersionId' => 'appVersionId',
        'config' => 'config',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'pluginKey' => 'pluginKey',
        'pluginType' => 'pluginType',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->appVersion) {
            $res['appVersion'] = $this->appVersion;
        }

        if (null !== $this->appVersionId) {
            $res['appVersionId'] = $this->appVersionId;
        }

        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->pluginKey) {
            $res['pluginKey'] = $this->pluginKey;
        }

        if (null !== $this->pluginType) {
            $res['pluginType'] = $this->pluginType;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['appVersion'])) {
            $model->appVersion = $map['appVersion'];
        }

        if (isset($map['appVersionId'])) {
            $model->appVersionId = $map['appVersionId'];
        }

        if (isset($map['config'])) {
            $model->config = MobiPluginConfig::fromMap($map['config']);
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['pluginKey'])) {
            $model->pluginKey = $map['pluginKey'];
        }

        if (isset($map['pluginType'])) {
            $model->pluginType = $map['pluginType'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
