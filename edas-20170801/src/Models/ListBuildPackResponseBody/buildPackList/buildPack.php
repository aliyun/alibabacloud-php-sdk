<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListBuildPackResponseBody\buildPackList;

use AlibabaCloud\Tea\Model;

class buildPack extends Model
{
    /**
     * @description The build package number of EDAS Container.
     *
     * @example 57
     *
     * @var int
     */
    public $configId;

    /**
     * @description Indicates whether the EDAS Container version is disabled. A disabled version cannot be configured for use.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The features of the EDAS Container version, which are released for public preview.
     *
     * @example “”
     *
     * @var string
     */
    public $feature;

    /**
     * @description The ID of the base image that corresponds to EDAS Container.
     *
     * @example registry.aliyuncs.com/ed**\/****-*********:*.*.*
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Indicates whether EDAS Container supports multitenancy.
     *
     * @example true
     *
     * @var bool
     */
    public $multipleTenant;

    /**
     * @description The version of the application.
     *
     * @example 3.5.6
     *
     * @var string
     */
    public $packVersion;

    /**
     * @description The description of the Pandora container.
     *
     * @example test
     *
     * @var string
     */
    public $pandoraDesc;

    /**
     * @description The download URL of the Pandora installer.
     *
     * @example http://edas.oss-cn-hangzhou.aliyuncs.com/edas-plugins/edas.sar.V3.5.6/taobao-hsf.tgz
     *
     * @var string
     */
    public $pandoraDownloadUrl;

    /**
     * @description The version of the Pandora container.
     *
     * @example edas.public.sar.V3.5.6
     *
     * @var string
     */
    public $pandoraVersion;

    /**
     * @description The description of the plug-in.
     *
     * @example 1
     *
     * @var string
     */
    public $pluginInfo;

    /**
     * @description The name of the Shell script that runs EDAS Container.
     *
     * @example default
     *
     * @var string
     */
    public $scriptName;

    /**
     * @description The version of the Shell script that runs EDAS Container.
     *
     * @example 1.0.3
     *
     * @var string
     */
    public $scriptVersion;

    /**
     * @description The features supported by EDAS Container.
     *
     * @example tengine,fatjar,restful,eip_nodeport,dpath
     *
     * @var string
     */
    public $supportFeatures;

    /**
     * @description The download URL of the Tengine installer.
     *
     * @example http://edas.oss-cn-hangzhou.aliyuncs.com/components/tengine/3.4.7/tengine.sh
     *
     * @var string
     */
    public $tengineDownloadUrl;

    /**
     * @description The ID of the Tengine image that corresponds to EDAS Container.
     *
     * @example registry.aliyuncs.com/edas/****-*********-*****:*.*.*
     *
     * @var string
     */
    public $tengineImageId;

    /**
     * @description The description of the Tomcat container.
     *
     * @example 1\. The config-client plug-in is updated. The issue of unread cache in multitenancy scenarios is fixed. 2. The High-Speed Service Framework (HSF) plug-in is updated to fix the issue that the qos command of the Pandora container cannot be executed and the issue that the service address cannot be found if the HSF plug-in subscribes to an excessive number of services. 3. The Fastjson package is updated to the sec06 secure version in all plug-ins that use this package.
     *
     * @var string
     */
    public $tomcatDesc;

    /**
     * @description The download URL of the Tomcat installer.
     *
     * @example http://edas.oss-cn-hangzhou.aliyuncs.com/edas-container/7.0.92/taobao-tomcat-production-7.0.92.tar.gz
     *
     * @var string
     */
    public $tomcatDownloadUrl;

    /**
     * @description The directory of the Tomcat container.
     *
     * @example taobao-tomcat-production-7.0.59.3
     *
     * @var string
     */
    public $tomcatPath;

    /**
     * @description The version of the Tomcat container.
     *
     * @example 8.5.63
     *
     * @var string
     */
    public $tomcatVersion;

    /**
     * @description Indicates whether EDAS Container supports traffic management.
     *
     * @example true
     *
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
