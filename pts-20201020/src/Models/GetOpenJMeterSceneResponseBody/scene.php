<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene\baseInfo;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene\dnsCacheConfig;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene\fileList;
use AlibabaCloud\Tea\Model;

class scene extends Model
{
    /**
     * @description 施压机数量
     *
     * @var int
     */
    public $agentCount;

    /**
     * @description 基本信息
     *
     * @var baseInfo
     */
    public $baseInfo;

    /**
     * @description 最大并发，并发模式下生效
     *
     * @var int
     */
    public $concurrency;

    /**
     * @description constantThroughputTimerType
     *
     * @var string
     */
    public $constantThroughputTimerType;

    /**
     * @description DNS配置
     *
     * @var dnsCacheConfig
     */
    public $dnsCacheConfig;

    /**
     * @description 压测持续时间，单位为s
     *
     * @var int
     */
    public $duration;

    /**
     * @description 环境id
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description 文件列表
     *
     * @var fileList[]
     */
    public $fileList;

    /**
     * @description 是否为VPC压测
     *
     * @var bool
     */
    public $isVpcTest;

    /**
     * @var int
     */
    public $maxRps;

    /**
     * @description 施压模式，concurrency_mode表示并发压测,tps_mode表示RPS压测
     *
     * @var string
     */
    public $mode;

    /**
     * @description 压力来源。“”表示公网，intranet-vpc表示VPC
     *
     * @var string
     */
    public $pool;

    /**
     * @description 递增时间，单位s
     *
     * @var int
     */
    public $rampUp;

    /**
     * @description VPC压测时配置
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 场景id
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description 场景名
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description 安全组id，VPC压测时配置
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @var int
     */
    public $startConcurrency;

    /**
     * @var int
     */
    public $startRps;

    /**
     * @description 递增阶梯数。预热时间和预热阶段数都不配置时 使用固定压力值 只配置预热时间，不配置阶段数时 使用均匀递增 预热时间和阶段数都配置时，并且steps<rampUp 使用阶梯递增 不能只配置steps，不配置rampUp 如果这样配置，默认使用固定压力值
     *
     * @var int
     */
    public $steps;

    /**
     * @description synchronizing timer 类型
     *
     * @var string
     */
    public $syncTimerType;

    /**
     * @description 测试文件
     *
     * @var string
     */
    public $testFile;

    /**
     * @description 交换机id，VPC压测时配置
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description vpc的id，VPC压测时配置
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'agentCount'                  => 'AgentCount',
        'baseInfo'                    => 'BaseInfo',
        'concurrency'                 => 'Concurrency',
        'constantThroughputTimerType' => 'ConstantThroughputTimerType',
        'dnsCacheConfig'              => 'DnsCacheConfig',
        'duration'                    => 'Duration',
        'environmentId'               => 'EnvironmentId',
        'fileList'                    => 'FileList',
        'isVpcTest'                   => 'IsVpcTest',
        'maxRps'                      => 'MaxRps',
        'mode'                        => 'Mode',
        'pool'                        => 'Pool',
        'rampUp'                      => 'RampUp',
        'regionId'                    => 'RegionId',
        'sceneId'                     => 'SceneId',
        'sceneName'                   => 'SceneName',
        'securityGroupId'             => 'SecurityGroupId',
        'startConcurrency'            => 'StartConcurrency',
        'startRps'                    => 'StartRps',
        'steps'                       => 'Steps',
        'syncTimerType'               => 'SyncTimerType',
        'testFile'                    => 'TestFile',
        'vSwitchId'                   => 'VSwitchId',
        'vpcId'                       => 'VpcId',
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
        if (null !== $this->baseInfo) {
            $res['BaseInfo'] = null !== $this->baseInfo ? $this->baseInfo->toMap() : null;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->constantThroughputTimerType) {
            $res['ConstantThroughputTimerType'] = $this->constantThroughputTimerType;
        }
        if (null !== $this->dnsCacheConfig) {
            $res['DnsCacheConfig'] = null !== $this->dnsCacheConfig ? $this->dnsCacheConfig->toMap() : null;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->fileList) {
            $res['FileList'] = [];
            if (null !== $this->fileList && \is_array($this->fileList)) {
                $n = 0;
                foreach ($this->fileList as $item) {
                    $res['FileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isVpcTest) {
            $res['IsVpcTest'] = $this->isVpcTest;
        }
        if (null !== $this->maxRps) {
            $res['MaxRps'] = $this->maxRps;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->pool) {
            $res['Pool'] = $this->pool;
        }
        if (null !== $this->rampUp) {
            $res['RampUp'] = $this->rampUp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->startConcurrency) {
            $res['StartConcurrency'] = $this->startConcurrency;
        }
        if (null !== $this->startRps) {
            $res['StartRps'] = $this->startRps;
        }
        if (null !== $this->steps) {
            $res['Steps'] = $this->steps;
        }
        if (null !== $this->syncTimerType) {
            $res['SyncTimerType'] = $this->syncTimerType;
        }
        if (null !== $this->testFile) {
            $res['TestFile'] = $this->testFile;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scene
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentCount'])) {
            $model->agentCount = $map['AgentCount'];
        }
        if (isset($map['BaseInfo'])) {
            $model->baseInfo = baseInfo::fromMap($map['BaseInfo']);
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['ConstantThroughputTimerType'])) {
            $model->constantThroughputTimerType = $map['ConstantThroughputTimerType'];
        }
        if (isset($map['DnsCacheConfig'])) {
            $model->dnsCacheConfig = dnsCacheConfig::fromMap($map['DnsCacheConfig']);
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n               = 0;
                foreach ($map['FileList'] as $item) {
                    $model->fileList[$n++] = null !== $item ? fileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsVpcTest'])) {
            $model->isVpcTest = $map['IsVpcTest'];
        }
        if (isset($map['MaxRps'])) {
            $model->maxRps = $map['MaxRps'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Pool'])) {
            $model->pool = $map['Pool'];
        }
        if (isset($map['RampUp'])) {
            $model->rampUp = $map['RampUp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['StartConcurrency'])) {
            $model->startConcurrency = $map['StartConcurrency'];
        }
        if (isset($map['StartRps'])) {
            $model->startRps = $map['StartRps'];
        }
        if (isset($map['Steps'])) {
            $model->steps = $map['Steps'];
        }
        if (isset($map['SyncTimerType'])) {
            $model->syncTimerType = $map['SyncTimerType'];
        }
        if (isset($map['TestFile'])) {
            $model->testFile = $map['TestFile'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
