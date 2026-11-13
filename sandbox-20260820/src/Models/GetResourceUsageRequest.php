<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class GetResourceUsageRequest extends Model
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
     * @var string[]
     */
    public $groupBy;

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
     * @var string[]
     */
    public $usageNames;
    protected $_name = [
        'endTime' => 'endTime',
        'granularity' => 'granularity',
        'groupBy' => 'groupBy',
        'sandboxPlan' => 'sandboxPlan',
        'startTime' => 'startTime',
        'teamID' => 'teamID',
        'templateID' => 'templateID',
        'usageNames' => 'usageNames',
    ];

    public function validate()
    {
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        if (\is_array($this->usageNames)) {
            Model::validateArray($this->usageNames);
        }
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

        if (null !== $this->groupBy) {
            if (\is_array($this->groupBy)) {
                $res['groupBy'] = [];
                $n1 = 0;
                foreach ($this->groupBy as $item1) {
                    $res['groupBy'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->usageNames) {
            if (\is_array($this->usageNames)) {
                $res['usageNames'] = [];
                $n1 = 0;
                foreach ($this->usageNames as $item1) {
                    $res['usageNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['groupBy'])) {
                $model->groupBy = [];
                $n1 = 0;
                foreach ($map['groupBy'] as $item1) {
                    $model->groupBy[$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['usageNames'])) {
                $model->usageNames = [];
                $n1 = 0;
                foreach ($map['usageNames'] as $item1) {
                    $model->usageNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
