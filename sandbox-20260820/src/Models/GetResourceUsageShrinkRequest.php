<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class GetResourceUsageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string
     */
    public $groupByShrink;

    /**
     * @var string
     */
    public $sandboxPlan;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $templateID;

    /**
     * @var string
     */
    public $usageNamesShrink;
    protected $_name = [
        'endTime' => 'endTime',
        'granularity' => 'granularity',
        'groupByShrink' => 'groupBy',
        'sandboxPlan' => 'sandboxPlan',
        'startTime' => 'startTime',
        'teamID' => 'teamID',
        'templateID' => 'templateID',
        'usageNamesShrink' => 'usageNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->granularity) {
            $res['granularity'] = $this->granularity;
        }

        if (null !== $this->groupByShrink) {
            $res['groupBy'] = $this->groupByShrink;
        }

        if (null !== $this->sandboxPlan) {
            $res['sandboxPlan'] = $this->sandboxPlan;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
        }

        if (null !== $this->usageNamesShrink) {
            $res['usageNames'] = $this->usageNamesShrink;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['granularity'])) {
            $model->granularity = $map['granularity'];
        }

        if (isset($map['groupBy'])) {
            $model->groupByShrink = $map['groupBy'];
        }

        if (isset($map['sandboxPlan'])) {
            $model->sandboxPlan = $map['sandboxPlan'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        if (isset($map['usageNames'])) {
            $model->usageNamesShrink = $map['usageNames'];
        }

        return $model;
    }
}
