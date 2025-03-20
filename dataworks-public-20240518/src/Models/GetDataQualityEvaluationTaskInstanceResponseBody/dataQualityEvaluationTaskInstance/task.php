<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\task\hooks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\task\notifications;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\task\target;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\task\trigger;
use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The description of the monitor.
     *
     * @example OpenAPI quality monitoring test
     *
     * @var string
     */
    public $description;

    /**
     * @description Callback settings.
     *
     * @var hooks[]
     */
    public $hooks;

    /**
     * @description The ID of the data quality monitor.
     *
     * @example 28544990
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the monitor.
     *
     * @example Data quality OpenAPI monitoring test
     *
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
     * @description The ID of the workspace.
     *
     * @example 20629
     *
     * @var int
     */
    public $projectId;

    /**
     * @description Extended configuration, JSON-formatted string, takes effect only for EMR-type data quality monitoring.
     *
     * - queue: the yarn queue used when performing EMR data quality verification. The default queue is the queue configured for this project.
     * - sqlEngine: SQL engine used when performing EMR data verification
     * - HIVE_ SQL
     * - SPARK_ SQL
     *
     * @example { "queue": "default" }
     *
     * @var string
     */
    public $runtimeConf;

    /**
     * @description For more information, see DataQualityTarget monitoring objects for the sample data quality verification task. For more information, see DataQualityTarget.
     *
     * @var target
     */
    public $target;

    /**
     * @description The trigger configuration of the data quality verification task.
     *
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'description' => 'Description',
        'hooks' => 'Hooks',
        'id' => 'Id',
        'name' => 'Name',
        'notifications' => 'Notifications',
        'projectId' => 'ProjectId',
        'runtimeConf' => 'RuntimeConf',
        'target' => 'Target',
        'trigger' => 'Trigger',
    ];

    public function validate() {}

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
     * @return task
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
                $n = 0;
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
