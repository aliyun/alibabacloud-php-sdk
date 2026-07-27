<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class UploadAppPluginVersionRequest extends Model
{
    /**
     * @var string
     */
    public $changelog;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $pluginVersion;
    protected $_name = [
        'changelog' => 'Changelog',
        'description' => 'Description',
        'downloadUrl' => 'DownloadUrl',
        'extend' => 'Extend',
        'ossKey' => 'OssKey',
        'pluginId' => 'PluginId',
        'pluginVersion' => 'PluginVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changelog) {
            $res['Changelog'] = $this->changelog;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }

        if (null !== $this->pluginVersion) {
            $res['PluginVersion'] = $this->pluginVersion;
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
        if (isset($map['Changelog'])) {
            $model->changelog = $map['Changelog'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }

        if (isset($map['PluginVersion'])) {
            $model->pluginVersion = $map['PluginVersion'];
        }

        return $model;
    }
}
