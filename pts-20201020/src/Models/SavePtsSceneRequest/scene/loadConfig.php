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
     * @description 指定机器数，并发必须大于250(RPS大于2000)才能使用，最大扩展机器数不能超过 最大并发/250(最大RPS/2000)
     *
     * @var int
     */
    public $agentCount;

    /**
     * @description API的起始、最大RPS值设置，在RPS模式下使用
     *
     * @var apiLoadConfigList[]
     */
    public $apiLoadConfigList;

    /**
     * @description 是否自动递增，只有在并发模式下有效，即 testMode=concurrency_mode 时
     *
     * @var bool
     */
    public $autoStep;

    /**
     * @description 场景施压量级配置信息
     *
     * @var configuration
     */
    public $configuration;

    /**
     * @description 递增百分比，取值范围[10,100]，且是整十倍；只有在并发模式且是自动递增模式下有效，即 testMode=concurrency_mode 且 autoStep=true 时
     *
     * @var int
     */
    public $increment;

    /**
     * @description 是否为VPC测试。默认为false，表示公网测试。当此值为true时，VPC相关配置才会生效。
     *
     * @var string
     */
    public $isVpcTest;

    /**
     * @description 单量级持续时长，单位分钟，一定是小于施压时长 maxRunningTime
     *
     * @var int
     */
    public $keepTime;

    /**
     * @description 施压时长，单位分钟，[1-1440]
     *
     * @var int
     */
    public $maxRunningTime;

    /**
     * @description 链路的起始、最大并发值设置，在并发模式下使用
     *
     * @var relationLoadConfigList[]
     */
    public $relationLoadConfigList;

    /**
     * @description 施压模式，并发模式(concurrency_mode) 和RPS模式(tps_mode)
     *
     * @var string
     */
    public $testMode;

    /**
     * @description VPC配置
     *
     * @var vpcLoadConfig
     */
    public $vpcLoadConfig;
    protected $_name = [
        'agentCount'             => 'AgentCount',
        'apiLoadConfigList'      => 'ApiLoadConfigList',
        'autoStep'               => 'AutoStep',
        'configuration'          => 'Configuration',
        'increment'              => 'Increment',
        'isVpcTest'              => 'IsVpcTest',
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
        if (null !== $this->isVpcTest) {
            $res['IsVpcTest'] = $this->isVpcTest;
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
        if (isset($map['IsVpcTest'])) {
            $model->isVpcTest = $map['IsVpcTest'];
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
