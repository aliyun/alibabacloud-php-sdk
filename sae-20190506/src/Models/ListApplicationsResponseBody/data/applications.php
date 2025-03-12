<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications\children;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications\tags;
use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @description Indicates whether the application is being deleted. Valid values:
     *
     *   **true**: The application is being deleted.
     *   **false**: The application is not being deleted.
     *
     * @example false
     *
     * @var bool
     */
    public $appDeletingStatus;

    /**
     * @description The description of the application.
     *
     * @example description
     *
     * @var string
     */
    public $appDescription;

    /**
     * @description The application ID.
     *
     * @example f7730764-d88f-4b9a-8d8e-cd8efbfe****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The application name.
     *
     * @example demo-app
     *
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
     * @description The CPU specifications that are required for each instance. Unit: millicores. This parameter cannot be set to 0. Valid values:
     *
     *   **500**
     *   **1000**
     *   **2000**
     *   **4000**
     *   **8000**
     *   **16000**
     *   **32000**
     *
     * @example 1000
     *
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @description The number of application instances.
     *
     * @example 2
     *
     * @var int
     */
    public $instances;

    /**
     * @description The memory size that is required by each instance. Unit: MB. This parameter cannot be set to 0. The values of this parameter correspond to the values of the Cpu parameter:
     *
     *   This parameter is set to **1024** if the Cpu parameter is set to 500 or 1000.
     *   This parameter is set to **2048** if the Cpu parameter is set to 500, 1000, or 2000.
     *   This parameter is set to **4096** if the Cpu parameter is set to 1000, 2000, or 4000.
     *   This parameter is set to **8192** if the Cpu parameter is set to 2000, 4000, or 8000.
     *   This parameter is set to **12288** if the Cpu parameter is set to 12000.
     *   This parameter is set to **16384** if the Cpu parameter is set to 4000, 8000, or 16000.
     *   This parameter is set to **24576** if the Cpu parameter is set to 12000.
     *   This parameter is set to **32768** if the Cpu parameter is set to 16000.
     *   This parameter is set to **65536** if the Cpu parameter is set to 8000, 16000, or 32000.
     *   This parameter is set to **131072** if the Cpu parameter is set to 32000.
     *
     * @example 1024
     *
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
     * @description The namespace ID.
     *
     * @example cn-beijing:demo
     *
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
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of running instances.
     *
     * @example 2
     *
     * @var int
     */
    public $runningInstances;

    /**
     * @description The tags of the application.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'appDeletingStatus'   => 'AppDeletingStatus',
        'appDescription'      => 'AppDescription',
        'appId'               => 'AppId',
        'appName'             => 'AppName',
        'appType'             => 'AppType',
        'baseAppId'           => 'BaseAppId',
        'children'            => 'Children',
        'cpu'                 => 'Cpu',
        'imageUrl'            => 'ImageUrl',
        'instances'           => 'Instances',
        'mem'                 => 'Mem',
        'mseEnabled'          => 'MseEnabled',
        'mseNamespaceId'      => 'MseNamespaceId',
        'namespaceId'         => 'NamespaceId',
        'namespaceName'       => 'NamespaceName',
        'newSaeVersion'       => 'NewSaeVersion',
        'packageUrl'          => 'PackageUrl',
        'programmingLanguage' => 'ProgrammingLanguage',
        'regionId'            => 'RegionId',
        'runningInstances'    => 'RunningInstances',
        'tags'                => 'Tags',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->children) {
            $res['Children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['Children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
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
        if (null !== $this->runningInstances) {
            $res['RunningInstances'] = $this->runningInstances;
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
     * @return applications
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
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n               = 0;
                foreach ($map['Children'] as $item) {
                    $model->children[$n++] = null !== $item ? children::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
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
        if (isset($map['RunningInstances'])) {
            $model->runningInstances = $map['RunningInstances'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
