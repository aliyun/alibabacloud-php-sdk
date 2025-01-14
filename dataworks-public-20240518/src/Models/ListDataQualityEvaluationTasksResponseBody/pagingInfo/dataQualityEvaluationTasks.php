<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody\pagingInfo\dataQualityEvaluationTasks\hooks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody\pagingInfo\dataQualityEvaluationTasks\notifications;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody\pagingInfo\dataQualityEvaluationTasks\target;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTasksResponseBody\pagingInfo\dataQualityEvaluationTasks\trigger;
use AlibabaCloud\Tea\Model;

class dataQualityEvaluationTasks extends Model
{
    /**
     * @description The description of the data quality monitoring task. The description can be up to 65,535 characters in length.
     *
     * @example This is a daily run data quality evaluation plan
     *
     * @var string
     */
    public $description;

    /**
     * @description The callback configurations of the task during the instance lifecycle. Blocking an auto triggered node is a type of callback event. Only this type is supported.
     *
     * @var hooks[]
     */
    public $hooks;

    /**
     * @description The ID of the data quality monitoring task.
     *
     * @example 10001
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the data quality monitoring task. The name can be up to 255 characters in length and can contain digits, letters, and punctuation marks.
     *
     * @var string
     */
    public $name;

    /**
     * @description The configurations for alert notifications.
     *
     * @var notifications
     */
    public $notifications;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The configuration of the data source. The value of the queue field is default, and that of the sqlEngine field can be set to SPARK_SQL, KYUUBI, PRESTO_SQL, or HIVE_SQL. The value default indicates the YARN queue for E-MapReduce (EMR) tasks.
     *
     * @example { "queue": "default", "sqlEngine": "SPARK-SQL" }
     *
     * @var string
     */
    public $runtimeConf;

    /**
     * @description The monitored object of the task.
     *
     * @var target
     */
    public $target;

    /**
     * @description The trigger configuration of the task.
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
     * @return dataQualityEvaluationTasks
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
