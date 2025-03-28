<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateBaselineRequest\overtimeSettings;

class CreateBaselineRequest extends Model
{
    /**
     * @var int
     */
    public $alertMarginThreshold;

    /**
     * @var string
     */
    public $baselineName;

    /**
     * @var string
     */
    public $baselineType;

    /**
     * @var string
     */
    public $nodeIds;

    /**
     * @var overtimeSettings[]
     */
    public $overtimeSettings;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'alertMarginThreshold' => 'AlertMarginThreshold',
        'baselineName' => 'BaselineName',
        'baselineType' => 'BaselineType',
        'nodeIds' => 'NodeIds',
        'overtimeSettings' => 'OvertimeSettings',
        'owner' => 'Owner',
        'priority' => 'Priority',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->overtimeSettings)) {
            Model::validateArray($this->overtimeSettings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertMarginThreshold) {
            $res['AlertMarginThreshold'] = $this->alertMarginThreshold;
        }

        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }

        if (null !== $this->baselineType) {
            $res['BaselineType'] = $this->baselineType;
        }

        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }

        if (null !== $this->overtimeSettings) {
            if (\is_array($this->overtimeSettings)) {
                $res['OvertimeSettings'] = [];
                $n1 = 0;
                foreach ($this->overtimeSettings as $item1) {
                    $res['OvertimeSettings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['AlertMarginThreshold'])) {
            $model->alertMarginThreshold = $map['AlertMarginThreshold'];
        }

        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }

        if (isset($map['BaselineType'])) {
            $model->baselineType = $map['BaselineType'];
        }

        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }

        if (isset($map['OvertimeSettings'])) {
            if (!empty($map['OvertimeSettings'])) {
                $model->overtimeSettings = [];
                $n1 = 0;
                foreach ($map['OvertimeSettings'] as $item1) {
                    $model->overtimeSettings[$n1++] = overtimeSettings::fromMap($item1);
                }
            }
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
