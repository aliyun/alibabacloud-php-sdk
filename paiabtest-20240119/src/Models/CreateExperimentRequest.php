<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\Tea\Model;

class CreateExperimentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $bucketType;

    /**
     * @var string
     */
    public $condition;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $coreMetricId;

    /**
     * @var string
     */
    public $crowdIds;

    /**
     * @var string
     */
    public $debugUsers;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $flow;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $focusMetricIds;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $layerId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'bucketType'     => 'BucketType',
        'condition'      => 'Condition',
        'coreMetricId'   => 'CoreMetricId',
        'crowdIds'       => 'CrowdIds',
        'debugUsers'     => 'DebugUsers',
        'description'    => 'Description',
        'endTime'        => 'EndTime',
        'flow'           => 'Flow',
        'focusMetricIds' => 'FocusMetricIds',
        'layerId'        => 'LayerId',
        'name'           => 'Name',
        'startTime'      => 'StartTime',
        'workspaceId'    => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketType) {
            $res['BucketType'] = $this->bucketType;
        }
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->coreMetricId) {
            $res['CoreMetricId'] = $this->coreMetricId;
        }
        if (null !== $this->crowdIds) {
            $res['CrowdIds'] = $this->crowdIds;
        }
        if (null !== $this->debugUsers) {
            $res['DebugUsers'] = $this->debugUsers;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->focusMetricIds) {
            $res['FocusMetricIds'] = $this->focusMetricIds;
        }
        if (null !== $this->layerId) {
            $res['LayerId'] = $this->layerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExperimentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketType'])) {
            $model->bucketType = $map['BucketType'];
        }
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['CoreMetricId'])) {
            $model->coreMetricId = $map['CoreMetricId'];
        }
        if (isset($map['CrowdIds'])) {
            $model->crowdIds = $map['CrowdIds'];
        }
        if (isset($map['DebugUsers'])) {
            $model->debugUsers = $map['DebugUsers'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['FocusMetricIds'])) {
            $model->focusMetricIds = $map['FocusMetricIds'];
        }
        if (isset($map['LayerId'])) {
            $model->layerId = $map['LayerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
