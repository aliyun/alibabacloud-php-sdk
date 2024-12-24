<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest\taskDefinitionJson;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest\taskDefinitionJson\taskParams\sparkConf;
use AlibabaCloud\Tea\Model;

class taskParams extends Model
{
    /**
     * @example esr-4.0.0 (Spark 3.5.2, Scala 2.12)
     *
     * @var string
     */
    public $displaySparkVersion;

    /**
     * @example ev-h*************
     *
     * @var string
     */
    public $environmentId;

    /**
     * @example false
     *
     * @var bool
     */
    public $fusion;

    /**
     * @description This parameter is required.
     *
     * @example root_queue
     *
     * @var string
     */
    public $resourceQueueId;

    /**
     * @var sparkConf[]
     */
    public $sparkConf;

    /**
     * @example 1
     *
     * @var int
     */
    public $sparkDriverCores;

    /**
     * @example 4g
     *
     * @var int
     */
    public $sparkDriverMemory;

    /**
     * @example 1
     *
     * @var int
     */
    public $sparkExecutorCores;

    /**
     * @example 4g
     *
     * @var int
     */
    public $sparkExecutorMemory;

    /**
     * @example INFO
     *
     * @var string
     */
    public $sparkLogLevel;

    /**
     * @var string
     */
    public $sparkLogPath;

    /**
     * @example esr-4.0.0 (Spark 3.5.2, Scala 2.12)
     *
     * @var string
     */
    public $sparkVersion;

    /**
     * @description This parameter is required.
     *
     * @example TSK-d87******************
     *
     * @var string
     */
    public $taskBizId;

    /**
     * @example SQL
     *
     * @var string
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @example w-d8********
     *
     * @var string
     */
    public $workspaceBizId;
    protected $_name = [
        'displaySparkVersion' => 'displaySparkVersion',
        'environmentId'       => 'environmentId',
        'fusion'              => 'fusion',
        'resourceQueueId'     => 'resourceQueueId',
        'sparkConf'           => 'sparkConf',
        'sparkDriverCores'    => 'sparkDriverCores',
        'sparkDriverMemory'   => 'sparkDriverMemory',
        'sparkExecutorCores'  => 'sparkExecutorCores',
        'sparkExecutorMemory' => 'sparkExecutorMemory',
        'sparkLogLevel'       => 'sparkLogLevel',
        'sparkLogPath'        => 'sparkLogPath',
        'sparkVersion'        => 'sparkVersion',
        'taskBizId'           => 'taskBizId',
        'type'                => 'type',
        'workspaceBizId'      => 'workspaceBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->resourceQueueId) {
            $res['resourceQueueId'] = $this->resourceQueueId;
        }
        if (null !== $this->sparkConf) {
            $res['sparkConf'] = [];
            if (null !== $this->sparkConf && \is_array($this->sparkConf)) {
                $n = 0;
                foreach ($this->sparkConf as $item) {
                    $res['sparkConf'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return taskParams
     */
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
        if (isset($map['resourceQueueId'])) {
            $model->resourceQueueId = $map['resourceQueueId'];
        }
        if (isset($map['sparkConf'])) {
            if (!empty($map['sparkConf'])) {
                $model->sparkConf = [];
                $n                = 0;
                foreach ($map['sparkConf'] as $item) {
                    $model->sparkConf[$n++] = null !== $item ? sparkConf::fromMap($item) : $item;
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
