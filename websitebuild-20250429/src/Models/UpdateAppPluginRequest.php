<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class UpdateAppPluginRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $configItems;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $hooks;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $pluginName;

    /**
     * @var string
     */
    public $pluginVersion;

    /**
     * @var string
     */
    public $skillHeader;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'category' => 'Category',
        'configItems' => 'ConfigItems',
        'description' => 'Description',
        'extend' => 'Extend',
        'hooks' => 'Hooks',
        'icon' => 'Icon',
        'pluginId' => 'PluginId',
        'pluginName' => 'PluginName',
        'pluginVersion' => 'PluginVersion',
        'skillHeader' => 'SkillHeader',
        'tags' => 'Tags',
        'visibility' => 'Visibility',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->configItems) {
            $res['ConfigItems'] = $this->configItems;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->hooks) {
            $res['Hooks'] = $this->hooks;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }

        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }

        if (null !== $this->pluginVersion) {
            $res['PluginVersion'] = $this->pluginVersion;
        }

        if (null !== $this->skillHeader) {
            $res['SkillHeader'] = $this->skillHeader;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ConfigItems'])) {
            $model->configItems = $map['ConfigItems'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['Hooks'])) {
            $model->hooks = $map['Hooks'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }

        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }

        if (isset($map['PluginVersion'])) {
            $model->pluginVersion = $map['PluginVersion'];
        }

        if (isset($map['SkillHeader'])) {
            $model->skillHeader = $map['SkillHeader'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
