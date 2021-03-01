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
     * @var string
     */
    public $pandoraVersion;

    /**
     * @var string
     */
    public $pandoraDesc;

    /**
     * @var string
     */
    public $feature;

    /**
     * @var string
     */
    public $pluginInfo;

    /**
     * @var string
     */
    public $tengineDownloadUrl;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $tomcatPath;

    /**
     * @var string
     */
    public $tomcatDesc;

    /**
     * @var string
     */
    public $supportFeatures;

    /**
     * @var string
     */
    public $tomcatDownloadUrl;

    /**
     * @var string
     */
    public $tomcatVersion;

    /**
     * @var string
     */
    public $pandoraDownloadUrl;

    /**
     * @var string
     */
    public $packVersion;

    /**
     * @var bool
     */
    public $multipleTenant;

    /**
     * @var string
     */
    public $tengineImageId;

    /**
     * @var bool
     */
    public $withTengine;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $scriptVersion;
    protected $_name = [
        'configId'           => 'ConfigId',
        'pandoraVersion'     => 'PandoraVersion',
        'pandoraDesc'        => 'PandoraDesc',
        'feature'            => 'Feature',
        'pluginInfo'         => 'PluginInfo',
        'tengineDownloadUrl' => 'TengineDownloadUrl',
        'disabled'           => 'Disabled',
        'tomcatPath'         => 'TomcatPath',
        'tomcatDesc'         => 'TomcatDesc',
        'supportFeatures'    => 'SupportFeatures',
        'tomcatDownloadUrl'  => 'TomcatDownloadUrl',
        'tomcatVersion'      => 'TomcatVersion',
        'pandoraDownloadUrl' => 'PandoraDownloadUrl',
        'packVersion'        => 'PackVersion',
        'multipleTenant'     => 'MultipleTenant',
        'tengineImageId'     => 'TengineImageId',
        'withTengine'        => 'WithTengine',
        'imageId'            => 'ImageId',
        'scriptName'         => 'ScriptName',
        'scriptVersion'      => 'ScriptVersion',
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
        if (null !== $this->pandoraVersion) {
            $res['PandoraVersion'] = $this->pandoraVersion;
        }
        if (null !== $this->pandoraDesc) {
            $res['PandoraDesc'] = $this->pandoraDesc;
        }
        if (null !== $this->feature) {
            $res['Feature'] = $this->feature;
        }
        if (null !== $this->pluginInfo) {
            $res['PluginInfo'] = $this->pluginInfo;
        }
        if (null !== $this->tengineDownloadUrl) {
            $res['TengineDownloadUrl'] = $this->tengineDownloadUrl;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->tomcatPath) {
            $res['TomcatPath'] = $this->tomcatPath;
        }
        if (null !== $this->tomcatDesc) {
            $res['TomcatDesc'] = $this->tomcatDesc;
        }
        if (null !== $this->supportFeatures) {
            $res['SupportFeatures'] = $this->supportFeatures;
        }
        if (null !== $this->tomcatDownloadUrl) {
            $res['TomcatDownloadUrl'] = $this->tomcatDownloadUrl;
        }
        if (null !== $this->tomcatVersion) {
            $res['TomcatVersion'] = $this->tomcatVersion;
        }
        if (null !== $this->pandoraDownloadUrl) {
            $res['PandoraDownloadUrl'] = $this->pandoraDownloadUrl;
        }
        if (null !== $this->packVersion) {
            $res['PackVersion'] = $this->packVersion;
        }
        if (null !== $this->multipleTenant) {
            $res['MultipleTenant'] = $this->multipleTenant;
        }
        if (null !== $this->tengineImageId) {
            $res['TengineImageId'] = $this->tengineImageId;
        }
        if (null !== $this->withTengine) {
            $res['WithTengine'] = $this->withTengine;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }
        if (null !== $this->scriptVersion) {
            $res['ScriptVersion'] = $this->scriptVersion;
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
        if (isset($map['PandoraVersion'])) {
            $model->pandoraVersion = $map['PandoraVersion'];
        }
        if (isset($map['PandoraDesc'])) {
            $model->pandoraDesc = $map['PandoraDesc'];
        }
        if (isset($map['Feature'])) {
            $model->feature = $map['Feature'];
        }
        if (isset($map['PluginInfo'])) {
            $model->pluginInfo = $map['PluginInfo'];
        }
        if (isset($map['TengineDownloadUrl'])) {
            $model->tengineDownloadUrl = $map['TengineDownloadUrl'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['TomcatPath'])) {
            $model->tomcatPath = $map['TomcatPath'];
        }
        if (isset($map['TomcatDesc'])) {
            $model->tomcatDesc = $map['TomcatDesc'];
        }
        if (isset($map['SupportFeatures'])) {
            $model->supportFeatures = $map['SupportFeatures'];
        }
        if (isset($map['TomcatDownloadUrl'])) {
            $model->tomcatDownloadUrl = $map['TomcatDownloadUrl'];
        }
        if (isset($map['TomcatVersion'])) {
            $model->tomcatVersion = $map['TomcatVersion'];
        }
        if (isset($map['PandoraDownloadUrl'])) {
            $model->pandoraDownloadUrl = $map['PandoraDownloadUrl'];
        }
        if (isset($map['PackVersion'])) {
            $model->packVersion = $map['PackVersion'];
        }
        if (isset($map['MultipleTenant'])) {
            $model->multipleTenant = $map['MultipleTenant'];
        }
        if (isset($map['TengineImageId'])) {
            $model->tengineImageId = $map['TengineImageId'];
        }
        if (isset($map['WithTengine'])) {
            $model->withTengine = $map['WithTengine'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }
        if (isset($map['ScriptVersion'])) {
            $model->scriptVersion = $map['ScriptVersion'];
        }

        return $model;
    }
}
