<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowRequest extends Model
{
    /**
     * @example {"items":[{"enable":true,"eventId":"EMR-210401001","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401015","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401002","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]}]}
     *
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
     * @example {"nodeDefMap":{":start:":{"name":":start:","type":":start:","transitions":["cluster"]},"cluster":{"id":"CT-0C74281682CF03B4","name":"cluster","type":":Cluster:","transitions":["job1"]},"job1":{"jobId":"FJ-242AB240DBAF4195","name":"job1","type":":action:","transitions":["end"]},"end":{"name":"end","type":":end:"}}}
     *
     * @var string
     */
    public $application;

    /**
     * @example C-F32FB31D82954C64
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example false
     *
     * @var bool
     */
    public $createCluster;

    /**
     * @example 0 0 0-23/1 * * ?
     *
     * @var string
     */
    public $cronExpr;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1542783967503
     *
     * @var int
     */
    public $endSchedule;

    /**
     * @example emr-header-1.cluster-12345
     *
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $logArchiveLocation;

    /**
     * @example my_demo_flow
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @example FC-FC396F988E07C06F
     *
     * @var string
     */
    public $parentCategory;

    /**
     * @example F-62ECFC6E1BF6EAD2,F-1E6528634E67B615,F-7E0A84332E9D9A89
     *
     * @var string
     */
    public $parentFlowList;

    /**
     * @example FP-3535FE0BE5224A47
     *
     * @var string
     */
    public $projectId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1542783867503
     *
     * @var int
     */
    public $startSchedule;
    protected $_name = [
        'alertConf'               => 'AlertConf',
        'alertDingDingGroupBizId' => 'AlertDingDingGroupBizId',
        'alertUserGroupBizId'     => 'AlertUserGroupBizId',
        'application'             => 'Application',
        'clusterId'               => 'ClusterId',
        'createCluster'           => 'CreateCluster',
        'cronExpr'                => 'CronExpr',
        'description'             => 'Description',
        'endSchedule'             => 'EndSchedule',
        'hostName'                => 'HostName',
        'lifecycle'               => 'Lifecycle',
        'logArchiveLocation'      => 'LogArchiveLocation',
        'name'                    => 'Name',
        'namespace'               => 'Namespace',
        'parentCategory'          => 'ParentCategory',
        'parentFlowList'          => 'ParentFlowList',
        'projectId'               => 'ProjectId',
        'regionId'                => 'RegionId',
        'startSchedule'           => 'StartSchedule',
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
        if (null !== $this->application) {
            $res['Application'] = $this->application;
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
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startSchedule) {
            $res['StartSchedule'] = $this->startSchedule;
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
        if (isset($map['AlertConf'])) {
            $model->alertConf = $map['AlertConf'];
        }
        if (isset($map['AlertDingDingGroupBizId'])) {
            $model->alertDingDingGroupBizId = $map['AlertDingDingGroupBizId'];
        }
        if (isset($map['AlertUserGroupBizId'])) {
            $model->alertUserGroupBizId = $map['AlertUserGroupBizId'];
        }
        if (isset($map['Application'])) {
            $model->application = $map['Application'];
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
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartSchedule'])) {
            $model->startSchedule = $map['StartSchedule'];
        }

        return $model;
    }
}
