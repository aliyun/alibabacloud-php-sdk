<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppPluginResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
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
    public $createdBy;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $display;

    /**
     * @var int
     */
    public $enabled;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $hooks;

    /**
     * @var int
     */
    public $hotCount;

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
    public $skillHeader;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'category' => 'Category',
        'configItems' => 'ConfigItems',
        'createdBy' => 'CreatedBy',
        'description' => 'Description',
        'display' => 'Display',
        'enabled' => 'Enabled',
        'extend' => 'Extend',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'hooks' => 'Hooks',
        'hotCount' => 'HotCount',
        'icon' => 'Icon',
        'pluginId' => 'PluginId',
        'pluginName' => 'PluginName',
        'skillHeader' => 'SkillHeader',
        'status' => 'Status',
        'tags' => 'Tags',
        'version' => 'Version',
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

        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->hooks) {
            $res['Hooks'] = $this->hooks;
        }

        if (null !== $this->hotCount) {
            $res['HotCount'] = $this->hotCount;
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

        if (null !== $this->skillHeader) {
            $res['SkillHeader'] = $this->skillHeader;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Hooks'])) {
            $model->hooks = $map['Hooks'];
        }

        if (isset($map['HotCount'])) {
            $model->hotCount = $map['HotCount'];
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

        if (isset($map['SkillHeader'])) {
            $model->skillHeader = $map['SkillHeader'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
