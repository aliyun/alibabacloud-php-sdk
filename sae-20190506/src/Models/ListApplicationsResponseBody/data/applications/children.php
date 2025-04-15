<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications\children\tags;

class children extends Model
{
    /**
     * @var bool
     */
    public $appDeletingStatus;

    /**
     * @var string
     */
    public $appDescription;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $baseAppId;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $instances;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var bool
     */
    public $mseEnabled;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $newSaeVersion;

    /**
     * @var string
     */
    public $programmingLanguage;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $runningInstances;

    /**
     * @var bool
     */
    public $scaleRuleEnabled;

    /**
     * @var string
     */
    public $scaleRuleType;

    /**
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

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
