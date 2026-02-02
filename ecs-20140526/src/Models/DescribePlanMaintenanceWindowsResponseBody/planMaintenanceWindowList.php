<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePlanMaintenanceWindowsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePlanMaintenanceWindowsResponseBody\planMaintenanceWindowList\targetResource;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePlanMaintenanceWindowsResponseBody\planMaintenanceWindowList\timePeriod;

class planMaintenanceWindowList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $planWindowId;

    /**
     * @var string
     */
    public $planWindowName;

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
        'createTime' => 'CreateTime',
        'enable' => 'Enable',
        'modifiedTime' => 'ModifiedTime',
        'planWindowId' => 'PlanWindowId',
        'planWindowName' => 'PlanWindowName',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->planWindowId) {
            $res['PlanWindowId'] = $this->planWindowId;
        }

        if (null !== $this->planWindowName) {
            $res['PlanWindowName'] = $this->planWindowName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['PlanWindowId'])) {
            $model->planWindowId = $map['PlanWindowId'];
        }

        if (isset($map['PlanWindowName'])) {
            $model->planWindowName = $map['PlanWindowName'];
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
