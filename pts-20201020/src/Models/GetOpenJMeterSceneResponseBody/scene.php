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
     * @example 2
     *
     * @var int
     */
    public $agentCount;

    /**
     * @var baseInfo
     */
    public $baseInfo;

    /**
     * @example 1000
     *
     * @var int
     */
    public $concurrency;

    /**
     * @example STAND_ALONE
     *
     * @var string
     */
    public $constantThroughputTimerType;

    /**
     * @var dnsCacheConfig
     */
    public $dnsCacheConfig;

    /**
     * @example 600
     *
     * @var int
     */
    public $duration;

    /**
     * @example EEDT7
     *
     * @var string
     */
    public $environmentId;

    /**
     * @var fileList[]
     */
    public $fileList;

    /**
     * @example false
     *
     * @var bool
     */
    public $isVpcTest;

    /**
     * @example true
     *
     * @var int
     */
    public $maxRps;

    /**
     * @example concurrency_mode
     *
     * @var string
     */
    public $mode;

    /**
     * @example VPC
     *
     * @var string
     */
    public $pool;

    /**
     * @example 100
     *
     * @var int
     */
    public $rampUp;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example DYYPZIH
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example test
     *
     * @var string
     */
    public $sceneName;

    /**
     * @example sg-2zeid0dd7bhahsgdahspaly
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example true
     *
     * @var int
     */
    public $startConcurrency;

    /**
     * @example true
     *
     * @var int
     */
    public $startRps;

    /**
     * @example 3
     *
     * @var int
     */
    public $steps;

    /**
     * @example GLOBAL
     *
     * @var string
     */
    public $syncTimerType;

    /**
     * @example baidu.jmx
     *
     * @var string
     */
    public $testFile;

    /**
     * @example vsw-2zehsgdhsahw1r
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-2ze2sahjdgahsebjkqhf4pyj
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
