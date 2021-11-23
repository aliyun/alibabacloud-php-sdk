<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\loadConfig\apiLoadConfigList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\loadConfig\configuration;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\loadConfig\relationLoadConfigList;
use AlibabaCloud\Tea\Model;

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
     * @var configuration
     */
    public $configuration;

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
    protected $_name = [
        'agentCount'             => 'AgentCount',
        'apiLoadConfigList'      => 'ApiLoadConfigList',
        'configuration'          => 'Configuration',
        'maxRunningTime'         => 'MaxRunningTime',
        'relationLoadConfigList' => 'RelationLoadConfigList',
        'testMode'               => 'TestMode',
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
        if (null !== $this->configuration) {
            $res['Configuration'] = null !== $this->configuration ? $this->configuration->toMap() : null;
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
        if (isset($map['Configuration'])) {
            $model->configuration = configuration::fromMap($map['Configuration']);
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

        return $model;
    }
}
