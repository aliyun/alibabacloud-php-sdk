<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications\tags;
use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @description demo-app
     *
     * @example false
     *
     * @var bool
     */
    public $appDeletingStatus;

    /**
     * @description \[{"key":"key","value":"value"}]
     *
     * @example description
     *
     * @var string
     */
    public $appDescription;

    /**
     * @description The total number of applications.
     *
     * @example f7730764-d88f-4b9a-8d8e-cd8efbfe****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the application.
     *
     * @example demo-app
     *
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @description The total number of applications.
     *
     * @example 2
     *
     * @var int
     */
    public $instances;

    /**
     * @var int
     */
    public $mem;

    /**
     * @description demo-app
     *
     * @example cn-beijing:demo
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The number of running instances.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The value of the tag.
     *
     * @example 2
     *
     * @var int
     */
    public $runningInstances;

    /**
     * @description cn-beijing:demo
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'appDeletingStatus' => 'AppDeletingStatus',
        'appDescription'    => 'AppDescription',
        'appId'             => 'AppId',
        'appName'           => 'AppName',
        'cpu'               => 'Cpu',
        'instances'         => 'Instances',
        'mem'               => 'Mem',
        'namespaceId'       => 'NamespaceId',
        'regionId'          => 'RegionId',
        'runningInstances'  => 'RunningInstances',
        'tags'              => 'Tags',
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
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
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
