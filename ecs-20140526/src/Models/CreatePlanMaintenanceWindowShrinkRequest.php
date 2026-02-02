<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class CreatePlanMaintenanceWindowShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $planWindowName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $supportMaintenanceAction;

    /**
     * @var string
     */
    public $targetResourceShrink;

    /**
     * @var string
     */
    public $timePeriodShrink;
    protected $_name = [
        'enable' => 'Enable',
        'planWindowName' => 'PlanWindowName',
        'regionId' => 'RegionId',
        'supportMaintenanceAction' => 'SupportMaintenanceAction',
        'targetResourceShrink' => 'TargetResource',
        'timePeriodShrink' => 'TimePeriod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->planWindowName) {
            $res['PlanWindowName'] = $this->planWindowName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->supportMaintenanceAction) {
            $res['SupportMaintenanceAction'] = $this->supportMaintenanceAction;
        }

        if (null !== $this->targetResourceShrink) {
            $res['TargetResource'] = $this->targetResourceShrink;
        }

        if (null !== $this->timePeriodShrink) {
            $res['TimePeriod'] = $this->timePeriodShrink;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['PlanWindowName'])) {
            $model->planWindowName = $map['PlanWindowName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SupportMaintenanceAction'])) {
            $model->supportMaintenanceAction = $map['SupportMaintenanceAction'];
        }

        if (isset($map['TargetResource'])) {
            $model->targetResourceShrink = $map['TargetResource'];
        }

        if (isset($map['TimePeriod'])) {
            $model->timePeriodShrink = $map['TimePeriod'];
        }

        return $model;
    }
}
