<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\dataQualityRules;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\hooks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\notifications;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\target;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\trigger;
use AlibabaCloud\Tea\Model;

class CreateDataQualityEvaluationTaskRequest extends Model
{
    /**
     * @var dataQualityRules[]
     */
    public $dataQualityRules;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @description 质量监控任务描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 数据质量校验任务实例生命周期中的回调设置，目前只支持一个阻塞调度任务的Hook
     *
     * @var hooks[]
     */
    public $hooks;

    /**
     * @description 质量监控任务名称
     *
     * This parameter is required.
     * @var string
     */
    public $name;

    /**
     * @description 数据质量校验任务通知订阅配置
     *
     * @var notifications
     */
    public $notifications;

    /**
     * @description 项目空间Id
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description 使用数据源时的一些设置，目前只支持指定EMR的yarn队列、采集EMR表时把SQL引擎指定为SPARK-SQL
     *
     * @example { "queue": "default", "sqlEngine": "SPARK_SQL" }
     *
     * @var string
     */
    public $runtimeConf;

    /**
     * @description 参看 DataQualityTarget示例	数据质量校验任务的监控对象，参考 DataQualityTarget
     *
     * @var target
     */
    public $target;

    /**
     * @description 数据质量校验任务的触发配置
     *
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'dataQualityRules' => 'DataQualityRules',
        'dataSourceId'     => 'DataSourceId',
        'description'      => 'Description',
        'hooks'            => 'Hooks',
        'name'             => 'Name',
        'notifications'    => 'Notifications',
        'projectId'        => 'ProjectId',
        'runtimeConf'      => 'RuntimeConf',
        'target'           => 'Target',
        'trigger'          => 'Trigger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityRules) {
            $res['DataQualityRules'] = [];
            if (null !== $this->dataQualityRules && \is_array($this->dataQualityRules)) {
                $n = 0;
                foreach ($this->dataQualityRules as $item) {
                    $res['DataQualityRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hooks) {
            $res['Hooks'] = [];
            if (null !== $this->hooks && \is_array($this->hooks)) {
                $n = 0;
                foreach ($this->hooks as $item) {
                    $res['Hooks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notifications) {
            $res['Notifications'] = null !== $this->notifications ? $this->notifications->toMap() : null;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->runtimeConf) {
            $res['RuntimeConf'] = $this->runtimeConf;
        }
        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toMap() : null;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataQualityEvaluationTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataQualityRules'])) {
            if (!empty($map['DataQualityRules'])) {
                $model->dataQualityRules = [];
                $n                       = 0;
                foreach ($map['DataQualityRules'] as $item) {
                    $model->dataQualityRules[$n++] = null !== $item ? dataQualityRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Hooks'])) {
            if (!empty($map['Hooks'])) {
                $model->hooks = [];
                $n            = 0;
                foreach ($map['Hooks'] as $item) {
                    $model->hooks[$n++] = null !== $item ? hooks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Notifications'])) {
            $model->notifications = notifications::fromMap($map['Notifications']);
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RuntimeConf'])) {
            $model->runtimeConf = $map['RuntimeConf'];
        }
        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }
        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        return $model;
    }
}
