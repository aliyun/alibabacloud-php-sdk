<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications\children\tags;
use AlibabaCloud\Tea\Model;

class children extends Model
{
    /**
     * @description If is deleting this application.
     *
     * @example false
     *
     * @var bool
     */
    public $appDeletingStatus;

    /**
     * @description The application description.
     *
     * @example Test
     *
     * @var string
     */
    public $appDescription;

    /**
     * @description The application ID.
     *
     * @example xxx-xxx-xxx-xxx
     *
     * @var string
     */
    public $appId;

    /**
     * @description The application name.
     *
     * @example app1
     *
     * @var string
     */
    public $appName;

    /**
     * @description The way to deploy applications.
     *
     * @example Image
     *
     * @var string
     */
    public $appType;

    /**
     * @description The base application ID.
     *
     * @example ee99cce6-1c8e-4bfa-96c3-3e2fa9******
     *
     * @var string
     */
    public $baseAppId;

    /**
     * @description The CPU sepcification.
     *
     * @example 2000
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The number of instances.
     *
     * @example 2
     *
     * @var int
     */
    public $instances;

    /**
     * @var bool
     */
    public $isStateful;

    /**
     * @description The memory specification.
     *
     * @example 2048
     *
     * @var int
     */
    public $mem;

    /**
     * @description If this application has enabled MSE.
     *
     * @example true
     *
     * @var bool
     */
    public $mseEnabled;

    /**
     * @description The namespace ID.
     *
     * @example cn-beijing:demo
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The name of the namespace.
     *
     * @example demo
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description The application edition.
     *
     * - lite: the lightweight edition.
     * - std: the standard edition.
     * - pro: the professional edition.
     *
     * @example pro
     *
     * @var string
     */
    public $newSaeVersion;

    /**
     * @description The programming language of this application.
     *
     * @example java
     *
     * @var string
     */
    public $programmingLanguage;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of instances in running state.
     *
     * @example 2
     *
     * @var int
     */
    public $runningInstances;

    /**
     * @description If the scale rule is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $scaleRuleEnabled;

    /**
     * @description The type of the scale rule.
     *
     * @example timing
     *
     * @var string
     */
    public $scaleRuleType;

    /**
     * @description The application tag.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'appDeletingStatus' => 'AppDeletingStatus',
        'appDescription' => 'AppDescription',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appType' => 'AppType',
        'baseAppId' => 'BaseAppId',
        'cpu' => 'Cpu',
        'instances' => 'Instances',
        'isStateful' => 'IsStateful',
        'mem' => 'Mem',
        'mseEnabled' => 'MseEnabled',
        'namespaceId' => 'NamespaceId',
        'namespaceName' => 'NamespaceName',
        'newSaeVersion' => 'NewSaeVersion',
        'programmingLanguage' => 'ProgrammingLanguage',
        'regionId' => 'RegionId',
        'runningInstances' => 'RunningInstances',
        'scaleRuleEnabled' => 'ScaleRuleEnabled',
        'scaleRuleType' => 'ScaleRuleType',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appDeletingStatus) {
            $res['AppDeletingStatus'] = $this->appDeletingStatus;
        }
        if (null !== $this->appDescription) {
            $res['AppDescription'] = $this->appDescription;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->baseAppId) {
            $res['BaseAppId'] = $this->baseAppId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->isStateful) {
            $res['IsStateful'] = $this->isStateful;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->mseEnabled) {
            $res['MseEnabled'] = $this->mseEnabled;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->newSaeVersion) {
            $res['NewSaeVersion'] = $this->newSaeVersion;
        }
        if (null !== $this->programmingLanguage) {
            $res['ProgrammingLanguage'] = $this->programmingLanguage;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->runningInstances) {
            $res['RunningInstances'] = $this->runningInstances;
        }
        if (null !== $this->scaleRuleEnabled) {
            $res['ScaleRuleEnabled'] = $this->scaleRuleEnabled;
        }
        if (null !== $this->scaleRuleType) {
            $res['ScaleRuleType'] = $this->scaleRuleType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return children
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDeletingStatus'])) {
            $model->appDeletingStatus = $map['AppDeletingStatus'];
        }
        if (isset($map['AppDescription'])) {
            $model->appDescription = $map['AppDescription'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['BaseAppId'])) {
            $model->baseAppId = $map['BaseAppId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }
        if (isset($map['IsStateful'])) {
            $model->isStateful = $map['IsStateful'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['MseEnabled'])) {
            $model->mseEnabled = $map['MseEnabled'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['NewSaeVersion'])) {
            $model->newSaeVersion = $map['NewSaeVersion'];
        }
        if (isset($map['ProgrammingLanguage'])) {
            $model->programmingLanguage = $map['ProgrammingLanguage'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RunningInstances'])) {
            $model->runningInstances = $map['RunningInstances'];
        }
        if (isset($map['ScaleRuleEnabled'])) {
            $model->scaleRuleEnabled = $map['ScaleRuleEnabled'];
        }
        if (isset($map['ScaleRuleType'])) {
            $model->scaleRuleType = $map['ScaleRuleType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
