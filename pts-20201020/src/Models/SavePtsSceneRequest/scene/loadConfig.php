<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene;

use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig\apiLoadConfigList;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig\configuration;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig\relationLoadConfigList;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig\vpcLoadConfig;
use AlibabaCloud\Tea\Model;

class loadConfig extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $agentCount;

    /**
     * @var apiLoadConfigList[]
     */
    public $apiLoadConfigList;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoStep;

    /**
     * @var configuration
     */
    public $configuration;

    /**
     * @example 30
     *
     * @var int
     */
    public $increment;

    /**
     * @example 3
     *
     * @var int
     */
    public $keepTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxRunningTime;

    /**
     * @var relationLoadConfigList[]
     */
    public $relationLoadConfigList;

    /**
     * @example concurrency_mode
     *
     * @var string
     */
    public $testMode;

    /**
     * @var vpcLoadConfig
     */
    public $vpcLoadConfig;
    protected $_name = [
        'agentCount'             => 'AgentCount',
        'apiLoadConfigList'      => 'ApiLoadConfigList',
        'autoStep'               => 'AutoStep',
        'configuration'          => 'Configuration',
        'increment'              => 'Increment',
        'keepTime'               => 'KeepTime',
        'maxRunningTime'         => 'MaxRunningTime',
        'relationLoadConfigList' => 'RelationLoadConfigList',
        'testMode'               => 'TestMode',
        'vpcLoadConfig'          => 'VpcLoadConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentCount) {
            $res['AgentCount'] = $this->agentCount;
        }
        if (null !== $this->apiLoadConfigList) {
            $res['ApiLoadConfigList'] = [];
            if (null !== $this->apiLoadConfigList && \is_array($this->apiLoadConfigList)) {
                $n = 0;
                foreach ($this->apiLoadConfigList as $item) {
                    $res['ApiLoadConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->autoStep) {
            $res['AutoStep'] = $this->autoStep;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = null !== $this->configuration ? $this->configuration->toMap() : null;
        }
        if (null !== $this->increment) {
            $res['Increment'] = $this->increment;
        }
        if (null !== $this->keepTime) {
            $res['KeepTime'] = $this->keepTime;
        }
        if (null !== $this->maxRunningTime) {
            $res['MaxRunningTime'] = $this->maxRunningTime;
        }
        if (null !== $this->relationLoadConfigList) {
            $res['RelationLoadConfigList'] = [];
            if (null !== $this->relationLoadConfigList && \is_array($this->relationLoadConfigList)) {
                $n = 0;
                foreach ($this->relationLoadConfigList as $item) {
                    $res['RelationLoadConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->testMode) {
            $res['TestMode'] = $this->testMode;
        }
        if (null !== $this->vpcLoadConfig) {
            $res['VpcLoadConfig'] = null !== $this->vpcLoadConfig ? $this->vpcLoadConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentCount'])) {
            $model->agentCount = $map['AgentCount'];
        }
        if (isset($map['ApiLoadConfigList'])) {
            if (!empty($map['ApiLoadConfigList'])) {
                $model->apiLoadConfigList = [];
                $n                        = 0;
                foreach ($map['ApiLoadConfigList'] as $item) {
                    $model->apiLoadConfigList[$n++] = null !== $item ? apiLoadConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AutoStep'])) {
            $model->autoStep = $map['AutoStep'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = configuration::fromMap($map['Configuration']);
        }
        if (isset($map['Increment'])) {
            $model->increment = $map['Increment'];
        }
        if (isset($map['KeepTime'])) {
            $model->keepTime = $map['KeepTime'];
        }
        if (isset($map['MaxRunningTime'])) {
            $model->maxRunningTime = $map['MaxRunningTime'];
        }
        if (isset($map['RelationLoadConfigList'])) {
            if (!empty($map['RelationLoadConfigList'])) {
                $model->relationLoadConfigList = [];
                $n                             = 0;
                foreach ($map['RelationLoadConfigList'] as $item) {
                    $model->relationLoadConfigList[$n++] = null !== $item ? relationLoadConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TestMode'])) {
            $model->testMode = $map['TestMode'];
        }
        if (isset($map['VpcLoadConfig'])) {
            $model->vpcLoadConfig = vpcLoadConfig::fromMap($map['VpcLoadConfig']);
        }

        return $model;
    }
}
