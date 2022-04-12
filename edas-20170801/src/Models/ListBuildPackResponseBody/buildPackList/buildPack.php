<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListBuildPackResponseBody\buildPackList;

use AlibabaCloud\Tea\Model;

class buildPack extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $multipleTenant;

    /**
     * @var string
     */
    public $packVersion;

    /**
     * @var string
     */
    public $pandoraDesc;

    /**
     * @var string
     */
    public $pandoraDownloadUrl;

    /**
     * @var string
     */
    public $pandoraVersion;

    /**
     * @var string
     */
    public $pluginInfo;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $scriptVersion;

    /**
     * @var string
     */
    public $supportFeatures;

    /**
     * @var string
     */
    public $tengineDownloadUrl;

    /**
     * @var string
     */
    public $tengineImageId;

    /**
     * @var string
     */
    public $tomcatDesc;

    /**
     * @var string
     */
    public $tomcatDownloadUrl;

    /**
     * @var string
     */
    public $tomcatPath;

    /**
     * @var string
     */
    public $tomcatVersion;

    /**
     * @var bool
     */
    public $withTengine;
    protected $_name = [
        'configId'           => 'ConfigId',
        'disabled'           => 'Disabled',
        'feature'            => 'Feature',
        'imageId'            => 'ImageId',
        'multipleTenant'     => 'MultipleTenant',
        'packVersion'        => 'PackVersion',
        'pandoraDesc'        => 'PandoraDesc',
        'pandoraDownloadUrl' => 'PandoraDownloadUrl',
        'pandoraVersion'     => 'PandoraVersion',
        'pluginInfo'         => 'PluginInfo',
        'scriptName'         => 'ScriptName',
        'scriptVersion'      => 'ScriptVersion',
        'supportFeatures'    => 'SupportFeatures',
        'tengineDownloadUrl' => 'TengineDownloadUrl',
        'tengineImageId'     => 'TengineImageId',
        'tomcatDesc'         => 'TomcatDesc',
        'tomcatDownloadUrl'  => 'TomcatDownloadUrl',
        'tomcatPath'         => 'TomcatPath',
        'tomcatVersion'      => 'TomcatVersion',
        'withTengine'        => 'WithTengine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->multipleTenant) {
            $res['MultipleTenant'] = $this->multipleTenant;
        }
        if (null !== $this->packVersion) {
            $res['PackVersion'] = $this->packVersion;
        }
        if (null !== $this->pandoraDesc) {
            $res['PandoraDesc'] = $this->pandoraDesc;
        }
        if (null !== $this->pandoraDownloadUrl) {
            $res['PandoraDownloadUrl'] = $this->pandoraDownloadUrl;
        }
        if (null !== $this->pandoraVersion) {
            $res['PandoraVersion'] = $this->pandoraVersion;
        }
        if (null !== $this->pluginInfo) {
            $res['PluginInfo'] = $this->pluginInfo;
        }
        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }
        if (null !== $this->scriptVersion) {
            $res['ScriptVersion'] = $this->scriptVersion;
        }
        if (null !== $this->supportFeatures) {
            $res['SupportFeatures'] = $this->supportFeatures;
        }
        if (null !== $this->tengineDownloadUrl) {
            $res['TengineDownloadUrl'] = $this->tengineDownloadUrl;
        }
        if (null !== $this->tengineImageId) {
            $res['TengineImageId'] = $this->tengineImageId;
        }
        if (null !== $this->tomcatDesc) {
            $res['TomcatDesc'] = $this->tomcatDesc;
        }
        if (null !== $this->tomcatDownloadUrl) {
            $res['TomcatDownloadUrl'] = $this->tomcatDownloadUrl;
        }
        if (null !== $this->tomcatPath) {
            $res['TomcatPath'] = $this->tomcatPath;
        }
        if (null !== $this->tomcatVersion) {
            $res['TomcatVersion'] = $this->tomcatVersion;
        }
        if (null !== $this->withTengine) {
            $res['WithTengine'] = $this->withTengine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildPack
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['MultipleTenant'])) {
            $model->multipleTenant = $map['MultipleTenant'];
        }
        if (isset($map['PackVersion'])) {
            $model->packVersion = $map['PackVersion'];
        }
        if (isset($map['PandoraDesc'])) {
            $model->pandoraDesc = $map['PandoraDesc'];
        }
        if (isset($map['PandoraDownloadUrl'])) {
            $model->pandoraDownloadUrl = $map['PandoraDownloadUrl'];
        }
        if (isset($map['PandoraVersion'])) {
            $model->pandoraVersion = $map['PandoraVersion'];
        }
        if (isset($map['PluginInfo'])) {
            $model->pluginInfo = $map['PluginInfo'];
        }
        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }
        if (isset($map['ScriptVersion'])) {
            $model->scriptVersion = $map['ScriptVersion'];
        }
        if (isset($map['SupportFeatures'])) {
            $model->supportFeatures = $map['SupportFeatures'];
        }
        if (isset($map['TengineDownloadUrl'])) {
            $model->tengineDownloadUrl = $map['TengineDownloadUrl'];
        }
        if (isset($map['TengineImageId'])) {
            $model->tengineImageId = $map['TengineImageId'];
        }
        if (isset($map['TomcatDesc'])) {
            $model->tomcatDesc = $map['TomcatDesc'];
        }
        if (isset($map['TomcatDownloadUrl'])) {
            $model->tomcatDownloadUrl = $map['TomcatDownloadUrl'];
        }
        if (isset($map['TomcatPath'])) {
            $model->tomcatPath = $map['TomcatPath'];
        }
        if (isset($map['TomcatVersion'])) {
            $model->tomcatVersion = $map['TomcatVersion'];
        }
        if (isset($map['WithTengine'])) {
            $model->withTengine = $map['WithTengine'];
        }

        return $model;
    }
}
