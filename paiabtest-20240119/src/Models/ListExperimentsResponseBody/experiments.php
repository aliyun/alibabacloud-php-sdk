<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models\ListExperimentsResponseBody;

use AlibabaCloud\Tea\Model;

class experiments extends Model
{
    /**
     * @var string
     */
    public $bucketType;

    /**
     * @var string
     */
    public $buckets;

    /**
     * @var string
     */
    public $condition;

    /**
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
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var int
     */
    public $flow;

    /**
     * @var string
     */
    public $focusMetricIds;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $layerId;

    /**
     * @var string
     */
    public $layerName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'bucketType'      => 'BucketType',
        'buckets'         => 'Buckets',
        'condition'       => 'Condition',
        'coreMetricId'    => 'CoreMetricId',
        'crowdIds'        => 'CrowdIds',
        'debugUsers'      => 'DebugUsers',
        'description'     => 'Description',
        'domainName'      => 'DomainName',
        'endTime'         => 'EndTime',
        'experimentId'    => 'ExperimentId',
        'flow'            => 'Flow',
        'focusMetricIds'  => 'FocusMetricIds',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'layerId'         => 'LayerId',
        'layerName'       => 'LayerName',
        'name'            => 'Name',
        'owner'           => 'Owner',
        'projectName'     => 'ProjectName',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'workspaceId'     => 'WorkspaceId',
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
        if (null !== $this->buckets) {
            $res['Buckets'] = $this->buckets;
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->focusMetricIds) {
            $res['FocusMetricIds'] = $this->focusMetricIds;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->layerId) {
            $res['LayerId'] = $this->layerId;
        }
        if (null !== $this->layerName) {
            $res['LayerName'] = $this->layerName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return experiments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketType'])) {
            $model->bucketType = $map['BucketType'];
        }
        if (isset($map['Buckets'])) {
            $model->buckets = $map['Buckets'];
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['FocusMetricIds'])) {
            $model->focusMetricIds = $map['FocusMetricIds'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['LayerId'])) {
            $model->layerId = $map['LayerId'];
        }
        if (isset($map['LayerName'])) {
            $model->layerName = $map['LayerName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
