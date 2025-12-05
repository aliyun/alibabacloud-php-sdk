<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig\apiLoadConfigList;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig\configuration;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig\relationLoadConfigList;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig\vpcLoadConfig;

class loadConfig extends Model
{
    /**
     * @var int
     */
    public $agentCount;

    /**
     * @var apiLoadConfigList[]
     */
    public $apiLoadConfigList;

    /**
     * @var bool
     */
    public $autoStep;

    /**
     * @var configuration
     */
    public $configuration;

    /**
     * @var int
     */
    public $increment;

    /**
     * @var int
     */
    public $keepTime;

    /**
     * @var int
     */
    public $maxRunningTime;

    /**
     * @var relationLoadConfigList[]
     */
    public $relationLoadConfigList;

    /**
     * @var string
     */
    public $testMode;

    /**
     * @var vpcLoadConfig
     */
    public $vpcLoadConfig;
    protected $_name = [
        'agentCount' => 'AgentCount',
        'apiLoadConfigList' => 'ApiLoadConfigList',
        'autoStep' => 'AutoStep',
        'configuration' => 'Configuration',
        'increment' => 'Increment',
        'keepTime' => 'KeepTime',
        'maxRunningTime' => 'MaxRunningTime',
        'relationLoadConfigList' => 'RelationLoadConfigList',
        'testMode' => 'TestMode',
        'vpcLoadConfig' => 'VpcLoadConfig',
    ];

    public function validate()
    {
        if (\is_array($this->apiLoadConfigList)) {
            Model::validateArray($this->apiLoadConfigList);
        }
        if (null !== $this->configuration) {
            $this->configuration->validate();
        }
        if (\is_array($this->relationLoadConfigList)) {
            Model::validateArray($this->relationLoadConfigList);
        }
        if (null !== $this->vpcLoadConfig) {
            $this->vpcLoadConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCount) {
            $res['AgentCount'] = $this->agentCount;
        }

        if (null !== $this->apiLoadConfigList) {
            if (\is_array($this->apiLoadConfigList)) {
                $res['ApiLoadConfigList'] = [];
                $n1 = 0;
                foreach ($this->apiLoadConfigList as $item1) {
                    $res['ApiLoadConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->autoStep) {
            $res['AutoStep'] = $this->autoStep;
        }

        if (null !== $this->configuration) {
            $res['Configuration'] = null !== $this->configuration ? $this->configuration->toArray($noStream) : $this->configuration;
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
            if (\is_array($this->relationLoadConfigList)) {
                $res['RelationLoadConfigList'] = [];
                $n1 = 0;
                foreach ($this->relationLoadConfigList as $item1) {
                    $res['RelationLoadConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->testMode) {
            $res['TestMode'] = $this->testMode;
        }

        if (null !== $this->vpcLoadConfig) {
            $res['VpcLoadConfig'] = null !== $this->vpcLoadConfig ? $this->vpcLoadConfig->toArray($noStream) : $this->vpcLoadConfig;
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

        if (isset($map['ApiLoadConfigList'])) {
            if (!empty($map['ApiLoadConfigList'])) {
                $model->apiLoadConfigList = [];
                $n1 = 0;
                foreach ($map['ApiLoadConfigList'] as $item1) {
                    $model->apiLoadConfigList[$n1] = apiLoadConfigList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['RelationLoadConfigList'] as $item1) {
                    $model->relationLoadConfigList[$n1] = relationLoadConfigList::fromMap($item1);
                    ++$n1;
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
