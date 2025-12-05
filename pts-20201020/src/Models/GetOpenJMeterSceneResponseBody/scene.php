<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene\baseInfo;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene\dnsCacheConfig;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene\fileList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene\regionalCondition;

class scene extends Model
{
    /**
     * @var int
     */
    public $agentCount;

    /**
     * @var baseInfo
     */
    public $baseInfo;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $constantThroughputTimerType;

    /**
     * @var dnsCacheConfig
     */
    public $dnsCacheConfig;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var fileList[]
     */
    public $fileList;

    /**
     * @var bool
     */
    public $isVpcTest;

    /**
     * @var int
     */
    public $maxRps;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $pool;

    /**
     * @var int
     */
    public $rampUp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var regionalCondition[]
     */
    public $regionalCondition;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;

    /**
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
     * @var int
     */
    public $steps;

    /**
     * @var string
     */
    public $syncTimerType;

    /**
     * @var string
     */
    public $testFile;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'agentCount' => 'AgentCount',
        'baseInfo' => 'BaseInfo',
        'concurrency' => 'Concurrency',
        'constantThroughputTimerType' => 'ConstantThroughputTimerType',
        'dnsCacheConfig' => 'DnsCacheConfig',
        'duration' => 'Duration',
        'environmentId' => 'EnvironmentId',
        'fileList' => 'FileList',
        'isVpcTest' => 'IsVpcTest',
        'maxRps' => 'MaxRps',
        'mode' => 'Mode',
        'pool' => 'Pool',
        'rampUp' => 'RampUp',
        'regionId' => 'RegionId',
        'regionalCondition' => 'RegionalCondition',
        'sceneId' => 'SceneId',
        'sceneName' => 'SceneName',
        'securityGroupId' => 'SecurityGroupId',
        'startConcurrency' => 'StartConcurrency',
        'startRps' => 'StartRps',
        'steps' => 'Steps',
        'syncTimerType' => 'SyncTimerType',
        'testFile' => 'TestFile',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->baseInfo) {
            $this->baseInfo->validate();
        }
        if (null !== $this->dnsCacheConfig) {
            $this->dnsCacheConfig->validate();
        }
        if (\is_array($this->fileList)) {
            Model::validateArray($this->fileList);
        }
        if (\is_array($this->regionalCondition)) {
            Model::validateArray($this->regionalCondition);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCount) {
            $res['AgentCount'] = $this->agentCount;
        }

        if (null !== $this->baseInfo) {
            $res['BaseInfo'] = null !== $this->baseInfo ? $this->baseInfo->toArray($noStream) : $this->baseInfo;
        }

        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        if (null !== $this->constantThroughputTimerType) {
            $res['ConstantThroughputTimerType'] = $this->constantThroughputTimerType;
        }

        if (null !== $this->dnsCacheConfig) {
            $res['DnsCacheConfig'] = null !== $this->dnsCacheConfig ? $this->dnsCacheConfig->toArray($noStream) : $this->dnsCacheConfig;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->fileList) {
            if (\is_array($this->fileList)) {
                $res['FileList'] = [];
                $n1 = 0;
                foreach ($this->fileList as $item1) {
                    $res['FileList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->regionalCondition) {
            if (\is_array($this->regionalCondition)) {
                $res['RegionalCondition'] = [];
                $n1 = 0;
                foreach ($this->regionalCondition as $item1) {
                    $res['RegionalCondition'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['FileList'] as $item1) {
                    $model->fileList[$n1] = fileList::fromMap($item1);
                    ++$n1;
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

        if (isset($map['RegionalCondition'])) {
            if (!empty($map['RegionalCondition'])) {
                $model->regionalCondition = [];
                $n1 = 0;
                foreach ($map['RegionalCondition'] as $item1) {
                    $model->regionalCondition[$n1] = regionalCondition::fromMap($item1);
                    ++$n1;
                }
            }
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
