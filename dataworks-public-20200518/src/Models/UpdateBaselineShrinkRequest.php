<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateBaselineShrinkRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $alertEnabled;

    /**
     * @example 30
     *
     * @var int
     */
    public $alertMarginThreshold;

    /**
     * @var string
     */
    public $alertSettingsShrink;

    /**
     * @description This parameter is required.
     *
     * @example 1000010800007
     *
     * @var int
     */
    public $baselineId;

    /**
     * @example BaselineName
     *
     * @var string
     */
    public $baselineName;

    /**
     * @example DAILY
     *
     * @var string
     */
    public $baselineType;

    /**
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example 1,2,3
     *
     * @var string
     */
    public $nodeIds;

    /**
     * @var string
     */
    public $overtimeSettingsShrink;

    /**
     * @example 3726346****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 7
     *
     * @var int
     */
    public $priority;

    /**
     * @description This parameter is required.
     *
     * @example 2043
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 123,456
     *
     * @var string
     */
    public $removeNodeIds;
    protected $_name = [
        'alertEnabled'           => 'AlertEnabled',
        'alertMarginThreshold'   => 'AlertMarginThreshold',
        'alertSettingsShrink'    => 'AlertSettings',
        'baselineId'             => 'BaselineId',
        'baselineName'           => 'BaselineName',
        'baselineType'           => 'BaselineType',
        'enabled'                => 'Enabled',
        'nodeIds'                => 'NodeIds',
        'overtimeSettingsShrink' => 'OvertimeSettings',
        'owner'                  => 'Owner',
        'priority'               => 'Priority',
        'projectId'              => 'ProjectId',
        'removeNodeIds'          => 'RemoveNodeIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertEnabled) {
            $res['AlertEnabled'] = $this->alertEnabled;
        }
        if (null !== $this->alertMarginThreshold) {
            $res['AlertMarginThreshold'] = $this->alertMarginThreshold;
        }
        if (null !== $this->alertSettingsShrink) {
            $res['AlertSettings'] = $this->alertSettingsShrink;
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
        if (null !== $this->overtimeSettingsShrink) {
            $res['OvertimeSettings'] = $this->overtimeSettingsShrink;
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

    /**
     * @param array $map
     *
     * @return UpdateBaselineShrinkRequest
     */
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
            $model->alertSettingsShrink = $map['AlertSettings'];
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
            $model->overtimeSettingsShrink = $map['OvertimeSettings'];
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
