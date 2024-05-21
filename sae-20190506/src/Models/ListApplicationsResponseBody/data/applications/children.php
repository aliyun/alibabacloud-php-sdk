<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListApplicationsResponseBody\data\applications\children\tags;
use AlibabaCloud\Tea\Model;

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
        'appDeletingStatus'   => 'AppDeletingStatus',
        'appDescription'      => 'AppDescription',
        'appId'               => 'AppId',
        'appName'             => 'AppName',
        'baseAppId'           => 'BaseAppId',
        'cpu'                 => 'Cpu',
        'instances'           => 'Instances',
        'mem'                 => 'Mem',
        'mseEnabled'          => 'MseEnabled',
        'namespaceId'         => 'NamespaceId',
        'programmingLanguage' => 'ProgrammingLanguage',
        'regionId'            => 'RegionId',
        'runningInstances'    => 'RunningInstances',
        'scaleRuleEnabled'    => 'ScaleRuleEnabled',
        'scaleRuleType'       => 'ScaleRuleType',
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
