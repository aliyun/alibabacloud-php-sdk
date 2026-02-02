<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class DescribePlanMaintenanceWindowsShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

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
    public $regionId;

    /**
     * @var string
     */
    public $targetResourceGroupId;

    /**
     * @var string
     */
    public $targetResourceTagsShrink;
    protected $_name = [
        'enable' => 'Enable',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'planWindowId' => 'PlanWindowId',
        'planWindowName' => 'PlanWindowName',
        'regionId' => 'RegionId',
        'targetResourceGroupId' => 'TargetResourceGroupId',
        'targetResourceTagsShrink' => 'TargetResourceTags',
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

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->planWindowId) {
            $res['PlanWindowId'] = $this->planWindowId;
        }

        if (null !== $this->planWindowName) {
            $res['PlanWindowName'] = $this->planWindowName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->targetResourceGroupId) {
            $res['TargetResourceGroupId'] = $this->targetResourceGroupId;
        }

        if (null !== $this->targetResourceTagsShrink) {
            $res['TargetResourceTags'] = $this->targetResourceTagsShrink;
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

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PlanWindowId'])) {
            $model->planWindowId = $map['PlanWindowId'];
        }

        if (isset($map['PlanWindowName'])) {
            $model->planWindowName = $map['PlanWindowName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TargetResourceGroupId'])) {
            $model->targetResourceGroupId = $map['TargetResourceGroupId'];
        }

        if (isset($map['TargetResourceTags'])) {
            $model->targetResourceTagsShrink = $map['TargetResourceTags'];
        }

        return $model;
    }
}
