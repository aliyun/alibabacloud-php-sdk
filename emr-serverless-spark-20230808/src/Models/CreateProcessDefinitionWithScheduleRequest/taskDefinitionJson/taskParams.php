<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleRequest\taskDefinitionJson;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleRequest\taskDefinitionJson\taskParams\localParams;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateProcessDefinitionWithScheduleRequest\taskDefinitionJson\taskParams\sparkConf;

class taskParams extends Model
{
    /**
     * @var string
     */
    public $displaySparkVersion;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var bool
     */
    public $fusion;

    /**
     * @var localParams[]
     */
    public $localParams;

    /**
     * @var string
     */
    public $resourceQueueId;

    /**
     * @var sparkConf[]
     */
    public $sparkConf;

    /**
     * @var int
     */
    public $sparkDriverCores;

    /**
     * @var int
     */
    public $sparkDriverMemory;

    /**
     * @var int
     */
    public $sparkExecutorCores;

    /**
     * @var int
     */
    public $sparkExecutorMemory;

    /**
     * @var string
     */
    public $sparkLogLevel;

    /**
     * @var string
     */
    public $sparkLogPath;

    /**
     * @var string
     */
    public $sparkVersion;

    /**
     * @var string
     */
    public $taskBizId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $workspaceBizId;
    protected $_name = [
        'displaySparkVersion' => 'displaySparkVersion',
        'environmentId' => 'environmentId',
        'fusion' => 'fusion',
        'localParams' => 'localParams',
        'resourceQueueId' => 'resourceQueueId',
        'sparkConf' => 'sparkConf',
        'sparkDriverCores' => 'sparkDriverCores',
        'sparkDriverMemory' => 'sparkDriverMemory',
        'sparkExecutorCores' => 'sparkExecutorCores',
        'sparkExecutorMemory' => 'sparkExecutorMemory',
        'sparkLogLevel' => 'sparkLogLevel',
        'sparkLogPath' => 'sparkLogPath',
        'sparkVersion' => 'sparkVersion',
        'taskBizId' => 'taskBizId',
        'type' => 'type',
        'workspaceBizId' => 'workspaceBizId',
    ];

    public function validate()
    {
        if (\is_array($this->localParams)) {
            Model::validateArray($this->localParams);
        }
        if (\is_array($this->sparkConf)) {
            Model::validateArray($this->sparkConf);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displaySparkVersion) {
            $res['displaySparkVersion'] = $this->displaySparkVersion;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->fusion) {
            $res['fusion'] = $this->fusion;
        }

        if (null !== $this->localParams) {
            if (\is_array($this->localParams)) {
                $res['localParams'] = [];
                $n1 = 0;
                foreach ($this->localParams as $item1) {
                    $res['localParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceQueueId) {
            $res['resourceQueueId'] = $this->resourceQueueId;
        }

        if (null !== $this->sparkConf) {
            if (\is_array($this->sparkConf)) {
                $res['sparkConf'] = [];
                $n1 = 0;
                foreach ($this->sparkConf as $item1) {
                    $res['sparkConf'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sparkDriverCores) {
            $res['sparkDriverCores'] = $this->sparkDriverCores;
        }

        if (null !== $this->sparkDriverMemory) {
            $res['sparkDriverMemory'] = $this->sparkDriverMemory;
        }

        if (null !== $this->sparkExecutorCores) {
            $res['sparkExecutorCores'] = $this->sparkExecutorCores;
        }

        if (null !== $this->sparkExecutorMemory) {
            $res['sparkExecutorMemory'] = $this->sparkExecutorMemory;
        }

        if (null !== $this->sparkLogLevel) {
            $res['sparkLogLevel'] = $this->sparkLogLevel;
        }

        if (null !== $this->sparkLogPath) {
            $res['sparkLogPath'] = $this->sparkLogPath;
        }

        if (null !== $this->sparkVersion) {
            $res['sparkVersion'] = $this->sparkVersion;
        }

        if (null !== $this->taskBizId) {
            $res['taskBizId'] = $this->taskBizId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->workspaceBizId) {
            $res['workspaceBizId'] = $this->workspaceBizId;
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
        if (isset($map['displaySparkVersion'])) {
            $model->displaySparkVersion = $map['displaySparkVersion'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['fusion'])) {
            $model->fusion = $map['fusion'];
        }

        if (isset($map['localParams'])) {
            if (!empty($map['localParams'])) {
                $model->localParams = [];
                $n1 = 0;
                foreach ($map['localParams'] as $item1) {
                    $model->localParams[$n1] = localParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceQueueId'])) {
            $model->resourceQueueId = $map['resourceQueueId'];
        }

        if (isset($map['sparkConf'])) {
            if (!empty($map['sparkConf'])) {
                $model->sparkConf = [];
                $n1 = 0;
                foreach ($map['sparkConf'] as $item1) {
                    $model->sparkConf[$n1] = sparkConf::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sparkDriverCores'])) {
            $model->sparkDriverCores = $map['sparkDriverCores'];
        }

        if (isset($map['sparkDriverMemory'])) {
            $model->sparkDriverMemory = $map['sparkDriverMemory'];
        }

        if (isset($map['sparkExecutorCores'])) {
            $model->sparkExecutorCores = $map['sparkExecutorCores'];
        }

        if (isset($map['sparkExecutorMemory'])) {
            $model->sparkExecutorMemory = $map['sparkExecutorMemory'];
        }

        if (isset($map['sparkLogLevel'])) {
            $model->sparkLogLevel = $map['sparkLogLevel'];
        }

        if (isset($map['sparkLogPath'])) {
            $model->sparkLogPath = $map['sparkLogPath'];
        }

        if (isset($map['sparkVersion'])) {
            $model->sparkVersion = $map['sparkVersion'];
        }

        if (isset($map['taskBizId'])) {
            $model->taskBizId = $map['taskBizId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['workspaceBizId'])) {
            $model->workspaceBizId = $map['workspaceBizId'];
        }

        return $model;
    }
}
