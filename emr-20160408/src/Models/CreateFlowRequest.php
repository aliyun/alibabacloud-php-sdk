<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $startSchedule;

    /**
     * @var int
     */
    public $endSchedule;

    /**
     * @var string
     */
    public $cronExpr;

    /**
     * @var bool
     */
    public $createCluster;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $logArchiveLocation;

    /**
     * @var string
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $application;

    /**
     * @var string
     */
    public $alertConf;

    /**
     * @var string
     */
    public $alertUserGroupBizId;

    /**
     * @var string
     */
    public $alertDingDingGroupBizId;

    /**
     * @var string
     */
    public $parentFlowList;

    /**
     * @var string
     */
    public $parentCategory;
    protected $_name = [
        'regionId'                => 'RegionId',
        'projectId'               => 'ProjectId',
        'name'                    => 'Name',
        'description'             => 'Description',
        'startSchedule'           => 'StartSchedule',
        'endSchedule'             => 'EndSchedule',
        'cronExpr'                => 'CronExpr',
        'createCluster'           => 'CreateCluster',
        'clusterId'               => 'ClusterId',
        'hostName'                => 'HostName',
        'namespace'               => 'Namespace',
        'logArchiveLocation'      => 'LogArchiveLocation',
        'lifecycle'               => 'Lifecycle',
        'application'             => 'Application',
        'alertConf'               => 'AlertConf',
        'alertUserGroupBizId'     => 'AlertUserGroupBizId',
        'alertDingDingGroupBizId' => 'AlertDingDingGroupBizId',
        'parentFlowList'          => 'ParentFlowList',
        'parentCategory'          => 'ParentCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->startSchedule) {
            $res['StartSchedule'] = $this->startSchedule;
        }
        if (null !== $this->endSchedule) {
            $res['EndSchedule'] = $this->endSchedule;
        }
        if (null !== $this->cronExpr) {
            $res['CronExpr'] = $this->cronExpr;
        }
        if (null !== $this->createCluster) {
            $res['CreateCluster'] = $this->createCluster;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->logArchiveLocation) {
            $res['LogArchiveLocation'] = $this->logArchiveLocation;
        }
        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }
        if (null !== $this->application) {
            $res['Application'] = $this->application;
        }
        if (null !== $this->alertConf) {
            $res['AlertConf'] = $this->alertConf;
        }
        if (null !== $this->alertUserGroupBizId) {
            $res['AlertUserGroupBizId'] = $this->alertUserGroupBizId;
        }
        if (null !== $this->alertDingDingGroupBizId) {
            $res['AlertDingDingGroupBizId'] = $this->alertDingDingGroupBizId;
        }
        if (null !== $this->parentFlowList) {
            $res['ParentFlowList'] = $this->parentFlowList;
        }
        if (null !== $this->parentCategory) {
            $res['ParentCategory'] = $this->parentCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StartSchedule'])) {
            $model->startSchedule = $map['StartSchedule'];
        }
        if (isset($map['EndSchedule'])) {
            $model->endSchedule = $map['EndSchedule'];
        }
        if (isset($map['CronExpr'])) {
            $model->cronExpr = $map['CronExpr'];
        }
        if (isset($map['CreateCluster'])) {
            $model->createCluster = $map['CreateCluster'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['LogArchiveLocation'])) {
            $model->logArchiveLocation = $map['LogArchiveLocation'];
        }
        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }
        if (isset($map['Application'])) {
            $model->application = $map['Application'];
        }
        if (isset($map['AlertConf'])) {
            $model->alertConf = $map['AlertConf'];
        }
        if (isset($map['AlertUserGroupBizId'])) {
            $model->alertUserGroupBizId = $map['AlertUserGroupBizId'];
        }
        if (isset($map['AlertDingDingGroupBizId'])) {
            $model->alertDingDingGroupBizId = $map['AlertDingDingGroupBizId'];
        }
        if (isset($map['ParentFlowList'])) {
            $model->parentFlowList = $map['ParentFlowList'];
        }
        if (isset($map['ParentCategory'])) {
            $model->parentCategory = $map['ParentCategory'];
        }

        return $model;
    }
}
