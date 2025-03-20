<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTask\hooks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTask\notifications;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTask\target;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTask\trigger;
use AlibabaCloud\Tea\Model;

class DataQualityEvaluationTask extends Model
{
    /**
     * @example 201
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @example This is a daily run data quality evaluation plan.
     *
     * @var string
     */
    public $description;

    /**
     * @var hooks[]
     */
    public $hooks;

    /**
     * @example 10001
     *
     * @var int
     */
    public $id;

    /**
     * @example 质量校验任务
     *
     * @var string
     */
    public $name;

    /**
     * @var notifications[]
     */
    public $notifications;

    /**
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @example { "queue": "default", "sqlEngine": "SPARK_SQL" }
     *
     * @var string
     */
    public $runtimeConf;

    /**
     * @var target
     */
    public $target;

    /**
     * @example 10
     *
     * @var int
     */
    public $tenantId;

    /**
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'description' => 'Description',
        'hooks' => 'Hooks',
        'id' => 'Id',
        'name' => 'Name',
        'notifications' => 'Notifications',
        'projectId' => 'ProjectId',
        'runtimeConf' => 'RuntimeConf',
        'target' => 'Target',
        'tenantId' => 'TenantId',
        'trigger' => 'Trigger',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notifications) {
            $res['Notifications'] = [];
            if (null !== $this->notifications && \is_array($this->notifications)) {
                $n = 0;
                foreach ($this->notifications as $item) {
                    $res['Notifications'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataQualityEvaluationTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
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
            if (!empty($map['Notifications'])) {
                $model->notifications = [];
                $n = 0;
                foreach ($map['Notifications'] as $item) {
                    $model->notifications[$n++] = null !== $item ? notifications::fromMap($item) : $item;
                }
            }
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        return $model;
    }
}
