<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ModifyFlowForWebRequest extends Model
{
    /**
     * @var string
     */
    public $alertConf;

    /**
     * @var string
     */
    public $alertDingDingGroupBizId;

    /**
     * @var string
     */
    public $alertUserGroupBizId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $createCluster;

    /**
     * @var string
     */
    public $cronExpr;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endSchedule;

    /**
     * @var string
     */
    public $graph;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $logArchiveLocation;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $parentCategory;

    /**
     * @var string
     */
    public $parentFlowList;

    /**
     * @var bool
     */
    public $periodic;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $startSchedule;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'alertConf'               => 'AlertConf',
        'alertDingDingGroupBizId' => 'AlertDingDingGroupBizId',
        'alertUserGroupBizId'     => 'AlertUserGroupBizId',
        'clusterId'               => 'ClusterId',
        'createCluster'           => 'CreateCluster',
        'cronExpr'                => 'CronExpr',
        'description'             => 'Description',
        'endSchedule'             => 'EndSchedule',
        'graph'                   => 'Graph',
        'hostName'                => 'HostName',
        'id'                      => 'Id',
        'lifecycle'               => 'Lifecycle',
        'logArchiveLocation'      => 'LogArchiveLocation',
        'name'                    => 'Name',
        'namespace'               => 'Namespace',
        'parentCategory'          => 'ParentCategory',
        'parentFlowList'          => 'ParentFlowList',
        'periodic'                => 'Periodic',
        'projectId'               => 'ProjectId',
        'regionId'                => 'RegionId',
        'startSchedule'           => 'StartSchedule',
        'status'                  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertConf) {
            $res['AlertConf'] = $this->alertConf;
        }
        if (null !== $this->alertDingDingGroupBizId) {
            $res['AlertDingDingGroupBizId'] = $this->alertDingDingGroupBizId;
        }
        if (null !== $this->alertUserGroupBizId) {
            $res['AlertUserGroupBizId'] = $this->alertUserGroupBizId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createCluster) {
            $res['CreateCluster'] = $this->createCluster;
        }
        if (null !== $this->cronExpr) {
            $res['CronExpr'] = $this->cronExpr;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endSchedule) {
            $res['EndSchedule'] = $this->endSchedule;
        }
        if (null !== $this->graph) {
            $res['Graph'] = $this->graph;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }
        if (null !== $this->logArchiveLocation) {
            $res['LogArchiveLocation'] = $this->logArchiveLocation;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->parentCategory) {
            $res['ParentCategory'] = $this->parentCategory;
        }
        if (null !== $this->parentFlowList) {
            $res['ParentFlowList'] = $this->parentFlowList;
        }
        if (null !== $this->periodic) {
            $res['Periodic'] = $this->periodic;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startSchedule) {
            $res['StartSchedule'] = $this->startSchedule;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFlowForWebRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertConf'])) {
            $model->alertConf = $map['AlertConf'];
        }
        if (isset($map['AlertDingDingGroupBizId'])) {
            $model->alertDingDingGroupBizId = $map['AlertDingDingGroupBizId'];
        }
        if (isset($map['AlertUserGroupBizId'])) {
            $model->alertUserGroupBizId = $map['AlertUserGroupBizId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreateCluster'])) {
            $model->createCluster = $map['CreateCluster'];
        }
        if (isset($map['CronExpr'])) {
            $model->cronExpr = $map['CronExpr'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndSchedule'])) {
            $model->endSchedule = $map['EndSchedule'];
        }
        if (isset($map['Graph'])) {
            $model->graph = $map['Graph'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }
        if (isset($map['LogArchiveLocation'])) {
            $model->logArchiveLocation = $map['LogArchiveLocation'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ParentCategory'])) {
            $model->parentCategory = $map['ParentCategory'];
        }
        if (isset($map['ParentFlowList'])) {
            $model->parentFlowList = $map['ParentFlowList'];
        }
        if (isset($map['Periodic'])) {
            $model->periodic = $map['Periodic'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartSchedule'])) {
            $model->startSchedule = $map['StartSchedule'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
