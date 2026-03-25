<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class EditPluginConfigRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $pluginConfig;

    /**
     * @var string
     */
    public $pluginDesc;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $pluginName;
    protected $_name = [
        'bizId' => 'BizId',
        'pluginConfig' => 'PluginConfig',
        'pluginDesc' => 'PluginDesc',
        'pluginId' => 'PluginId',
        'pluginName' => 'PluginName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->pluginConfig) {
            $res['PluginConfig'] = $this->pluginConfig;
        }

        if (null !== $this->pluginDesc) {
            $res['PluginDesc'] = $this->pluginDesc;
        }

        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }

        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['PluginConfig'])) {
            $model->pluginConfig = $map['PluginConfig'];
        }

        if (isset($map['PluginDesc'])) {
            $model->pluginDesc = $map['PluginDesc'];
        }

        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }

        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }

        return $model;
    }
}
