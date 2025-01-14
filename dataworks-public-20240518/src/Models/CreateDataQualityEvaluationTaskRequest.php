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
     * @description The list of monitoring rules that are associated with the monitor. If you configure the ID of a monitoring rule by using the DataQualityRule.Id parameter, the system associates the rule with a created monitor. If you do not configure the ID of a monitoring rule, the system creates a new monitoring rule by using other fields and associates the rule with a created monitor.
     *
     * @var dataQualityRules[]
     */
    public $dataQualityRules;

    /**
     * @description The data source ID. You can call the [ListDataSources](https://help.aliyun.com/document_detail/211431.html) operation to query the ID.
     *
     * @example 1
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @description The description of the monitor.
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
     * @description The name of the monitor.
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
     * @description The ID of the DataWorks workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * You can use this parameter to specify the DataWorks workspace on which you want to perform the API operation.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The extended configurations in JSON-formatted strings. You can use this parameter only for monitors that are used to monitor the quality of E-MapReduce (EMR) data.
     *
     *   queue: The Yarn queue used when a monitor checks the quality of EMR data. By default, the queue configured for the current workspace is used.
     *
     *   sqlEngine: The SQL engine used when a monitor checks the quality of EMR data.
     *
     *   HIVE_SQL
     *   SPARK_SQL
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
