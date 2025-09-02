<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBaselineRequest\alertSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBaselineRequest\overtimeSettings;

class UpdateBaselineRequest extends Model
{
    /**
     * @var bool
     */
    public $alertEnabled;

    /**
     * @var int
     */
    public $alertMarginThreshold;

    /**
     * @var alertSettings[]
     */
    public $alertSettings;

    /**
     * @var int
     */
    public $baselineId;

    /**
     * @var string
     */
    public $baselineName;

    /**
     * @var string
     */
    public $baselineType;

    /**
     * @var bool
     */
    public $enabled;

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

    /**
     * @var string
     */
    public $removeNodeIds;
    protected $_name = [
        'alertEnabled' => 'AlertEnabled',
        'alertMarginThreshold' => 'AlertMarginThreshold',
        'alertSettings' => 'AlertSettings',
        'baselineId' => 'BaselineId',
        'baselineName' => 'BaselineName',
        'baselineType' => 'BaselineType',
        'enabled' => 'Enabled',
        'nodeIds' => 'NodeIds',
        'overtimeSettings' => 'OvertimeSettings',
        'owner' => 'Owner',
        'priority' => 'Priority',
        'projectId' => 'ProjectId',
        'removeNodeIds' => 'RemoveNodeIds',
    ];

    public function validate()
    {
        if (\is_array($this->alertSettings)) {
            Model::validateArray($this->alertSettings);
        }
        if (\is_array($this->overtimeSettings)) {
            Model::validateArray($this->overtimeSettings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertEnabled) {
            $res['AlertEnabled'] = $this->alertEnabled;
        }

        if (null !== $this->alertMarginThreshold) {
            $res['AlertMarginThreshold'] = $this->alertMarginThreshold;
        }

        if (null !== $this->alertSettings) {
            if (\is_array($this->alertSettings)) {
                $res['AlertSettings'] = [];
                $n1 = 0;
                foreach ($this->alertSettings as $item1) {
                    $res['AlertSettings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }

        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }

        if (null !== $this->baselineType) {
            $res['BaselineType'] = $this->baselineType;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }

        if (null !== $this->overtimeSettings) {
            if (\is_array($this->overtimeSettings)) {
                $res['OvertimeSettings'] = [];
                $n1 = 0;
                foreach ($this->overtimeSettings as $item1) {
                    $res['OvertimeSettings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->removeNodeIds) {
            $res['RemoveNodeIds'] = $this->removeNodeIds;
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
        if (isset($map['AlertEnabled'])) {
            $model->alertEnabled = $map['AlertEnabled'];
        }

        if (isset($map['AlertMarginThreshold'])) {
            $model->alertMarginThreshold = $map['AlertMarginThreshold'];
        }

        if (isset($map['AlertSettings'])) {
            if (!empty($map['AlertSettings'])) {
                $model->alertSettings = [];
                $n1 = 0;
                foreach ($map['AlertSettings'] as $item1) {
                    $model->alertSettings[$n1] = alertSettings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }

        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }

        if (isset($map['BaselineType'])) {
            $model->baselineType = $map['BaselineType'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }

        if (isset($map['OvertimeSettings'])) {
            if (!empty($map['OvertimeSettings'])) {
                $model->overtimeSettings = [];
                $n1 = 0;
                foreach ($map['OvertimeSettings'] as $item1) {
                    $model->overtimeSettings[$n1] = overtimeSettings::fromMap($item1);
                    ++$n1;
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

        if (isset($map['RemoveNodeIds'])) {
            $model->removeNodeIds = $map['RemoveNodeIds'];
        }

        return $model;
    }
}
