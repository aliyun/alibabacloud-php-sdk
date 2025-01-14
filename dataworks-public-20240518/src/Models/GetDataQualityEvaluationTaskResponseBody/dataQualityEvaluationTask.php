<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask\hooks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask\notifications;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask\target;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskResponseBody\dataQualityEvaluationTask\trigger;
use AlibabaCloud\Tea\Model;

class dataQualityEvaluationTask extends Model
{
    /**
     * @description 质量监控任务描述
     *
     * @var string
     */
    public $description;

    /**
     * @description The hook.
     *
     * @var hooks[]
     */
    public $hooks;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example 2178
     *
     * @var int
     */
    public $id;

    /**
     * @description 质量监控任务名称
     *
     * This parameter is required.
     * @var string
     */
    public $name;

    /**
     * @description The configurations of alert notifications.
     *
     * @var notifications
     */
    public $notifications;

    /**
     * @description 项目空间Id
     *
     * @example 2626
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
     * @description The monitored object of the monitor.
     *
     * @var target
     */
    public $target;

    /**
     * @description The trigger configuration of the monitor.
     *
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'description'   => 'Description',
        'hooks'         => 'Hooks',
        'id'            => 'Id',
        'name'          => 'Name',
        'notifications' => 'Notifications',
        'projectId'     => 'ProjectId',
        'runtimeConf'   => 'RuntimeConf',
        'target'        => 'Target',
        'trigger'       => 'Trigger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return dataQualityEvaluationTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
