<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications\children;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications\tags;

class applications extends Model
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
     * @var children[]
     */
    public $children;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $enableIdle;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $instances;

    /**
     * @var bool
     */
    public $isStateful;

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
    public $mseNamespaceId;

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
    public $packageUrl;

    /**
     * @var string
     */
    public $programmingLanguage;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $runningInstances;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'appDeletingStatus' => 'AppDeletingStatus',
        'appDescription' => 'AppDescription',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appType' => 'AppType',
        'baseAppId' => 'BaseAppId',
        'children' => 'Children',
        'cpu' => 'Cpu',
        'diskSize' => 'DiskSize',
        'enableIdle' => 'EnableIdle',
        'imageUrl' => 'ImageUrl',
        'instances' => 'Instances',
        'isStateful' => 'IsStateful',
        'mem' => 'Mem',
        'mseEnabled' => 'MseEnabled',
        'mseNamespaceId' => 'MseNamespaceId',
        'namespaceId' => 'NamespaceId',
        'namespaceName' => 'NamespaceName',
        'newSaeVersion' => 'NewSaeVersion',
        'packageUrl' => 'PackageUrl',
        'programmingLanguage' => 'ProgrammingLanguage',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'runningInstances' => 'RunningInstances',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
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

        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->enableIdle) {
            $res['EnableIdle'] = $this->enableIdle;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
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

        if (null !== $this->mseNamespaceId) {
            $res['MseNamespaceId'] = $this->mseNamespaceId;
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

        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }

        if (null !== $this->programmingLanguage) {
            $res['ProgrammingLanguage'] = $this->programmingLanguage;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->runningInstances) {
            $res['RunningInstances'] = $this->runningInstances;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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

        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = children::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['EnableIdle'])) {
            $model->enableIdle = $map['EnableIdle'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
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

        if (isset($map['MseNamespaceId'])) {
            $model->mseNamespaceId = $map['MseNamespaceId'];
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

        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }

        if (isset($map['ProgrammingLanguage'])) {
            $model->programmingLanguage = $map['ProgrammingLanguage'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RunningInstances'])) {
            $model->runningInstances = $map['RunningInstances'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
