<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePlanMaintenanceWindowRequest\targetResource;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePlanMaintenanceWindowRequest\timePeriod;

class CreatePlanMaintenanceWindowRequest extends Model
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
     * @var targetResource
     */
    public $targetResource;

    /**
     * @var timePeriod
     */
    public $timePeriod;
    protected $_name = [
        'enable' => 'Enable',
        'planWindowName' => 'PlanWindowName',
        'regionId' => 'RegionId',
        'supportMaintenanceAction' => 'SupportMaintenanceAction',
        'targetResource' => 'TargetResource',
        'timePeriod' => 'TimePeriod',
    ];

    public function validate()
    {
        if (null !== $this->targetResource) {
            $this->targetResource->validate();
        }
        if (null !== $this->timePeriod) {
            $this->timePeriod->validate();
        }
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

        if (null !== $this->targetResource) {
            $res['TargetResource'] = null !== $this->targetResource ? $this->targetResource->toArray($noStream) : $this->targetResource;
        }

        if (null !== $this->timePeriod) {
            $res['TimePeriod'] = null !== $this->timePeriod ? $this->timePeriod->toArray($noStream) : $this->timePeriod;
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
            $model->targetResource = targetResource::fromMap($map['TargetResource']);
        }

        if (isset($map['TimePeriod'])) {
            $model->timePeriod = timePeriod::fromMap($map['TimePeriod']);
        }

        return $model;
    }
}
