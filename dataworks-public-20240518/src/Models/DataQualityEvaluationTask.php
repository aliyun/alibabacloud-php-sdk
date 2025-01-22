<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTask\hooks;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTask\notifications;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTask\target;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTask\trigger;

class DataQualityEvaluationTask extends Model
{
    /**
     * @var int
     */
    public $dataSourceId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var hooks[]
     */
    public $hooks;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var notifications[]
     */
    public $notifications;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $runtimeConf;
    /**
     * @var target
     */
    public $target;
    /**
     * @var int
     */
    public $tenantId;
    /**
     * @var trigger
     */
    public $trigger;
    protected $_name = [
        'dataSourceId'  => 'DataSourceId',
        'description'   => 'Description',
        'hooks'         => 'Hooks',
        'id'            => 'Id',
        'name'          => 'Name',
        'notifications' => 'Notifications',
        'projectId'     => 'ProjectId',
        'runtimeConf'   => 'RuntimeConf',
        'target'        => 'Target',
        'tenantId'      => 'TenantId',
        'trigger'       => 'Trigger',
    ];

    public function validate()
    {
        if (\is_array($this->hooks)) {
            Model::validateArray($this->hooks);
        }
        if (\is_array($this->notifications)) {
            Model::validateArray($this->notifications);
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        if (null !== $this->trigger) {
            $this->trigger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hooks) {
            if (\is_array($this->hooks)) {
                $res['Hooks'] = [];
                $n1           = 0;
                foreach ($this->hooks as $item1) {
                    $res['Hooks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->notifications)) {
                $res['Notifications'] = [];
                $n1                   = 0;
                foreach ($this->notifications as $item1) {
                    $res['Notifications'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['Target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toArray($noStream) : $this->trigger;
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Hooks'])) {
            if (!empty($map['Hooks'])) {
                $model->hooks = [];
                $n1           = 0;
                foreach ($map['Hooks'] as $item1) {
                    $model->hooks[$n1++] = hooks::fromMap($item1);
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
                $n1                   = 0;
                foreach ($map['Notifications'] as $item1) {
                    $model->notifications[$n1++] = notifications::fromMap($item1);
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
