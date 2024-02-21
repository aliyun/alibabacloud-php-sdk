<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowResponseBody\parentFlowList;
use AlibabaCloud\Tea\Model;

class DescribeFlowResponseBody extends Model
{
    /**
     * @example {"items":[{"enable":true,"eventId":"EMR-210401001","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401015","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]},{"enable":true,"eventId":"EMR-110401002","alertUserGroupIdList":["AUG-b79bb29bb6e14ddd89674a242623851b"],"alertDingDingGroupList":["ADG-af1f9689d6194e2dbd89927d5c515172"]}]}
     *
     * @var string
     */
    public $alertConf;

    /**
     * @example AUG-c917bbfaf6494bbfacdee69c8284967c
     *
     * @var string
     */
    public $alertDingDingGroupBizId;

    /**
     * @example ADG-0a00d00abb7743ff9f812f1a997f3d87
     *
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
     * @example FC-F2495319DA05****
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example C-A23BD131A862****
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
     * @example {}
     *
     * @var string
     */
    public $editLockDetail;

    /**
     * @example 1538018814000
     *
     * @var int
     */
    public $endSchedule;

    /**
     * @example 1538017814000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1538017814000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example {"nodes":[{"id":"48d474ea","index":0,"spmAnchorId":"0.0.0.i0.766645eb2cmNtQ","attribute":{"type":"START"},"shape":"startControlNode","type":"node","y":250,"size":"80*34","x":500},{"id":"7ba480b3","index":1,"spmAnchorId":"5176.8250060.0.i19.771e28d0IPNQGE","attribute":{"jobType":"SHELL","jobId":"FJ-7BE1062897B19D25","type":"JOB"},"config":{"hostName":""},"label":"fail_job","shape":"shellJobNode","type":"node","y":398.5,"size":"170*34","x":470.5},{"id":"33202d60","index":2,"spmAnchorId":"5176.8250060.0.i23.771e28d0IPNQGE","attribute":{"type":"END"},"shape":"endControlNode","type":"node","y":562.5,"size":"80*34","x":430.5}],"edges":[{"id":"28167ea0","index":3,"source":"48d474ea","sourceAnchor":0,"target":"7ba480b3","targetAnchor":0},{"id":"e8d5ff52","index":4,"source":"7ba480b3","sourceAnchor":1,"target":"33202d60","targetAnchor":0}]}
     *
     * @var string
     */
    public $graph;

    /**
     * @example emr-header-1.cluster-123456
     *
     * @var string
     */
    public $hostName;

    /**
     * @example F-7A39731FE719****
     *
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
     * @example my_flow_demo
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var parentFlowList
     */
    public $parentFlowList;

    /**
     * @example true
     *
     * @var bool
     */
    public $periodic;

    /**
     * @example 243D5A48-96A5-4C0C-8966-93CBF65635ED
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1538017814000
     *
     * @var int
     */
    public $startSchedule;

    /**
     * @example STOP_SCHEDULE
     *
     * @var string
     */
    public $status;

    /**
     * @example EMR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'alertConf'               => 'AlertConf',
        'alertDingDingGroupBizId' => 'AlertDingDingGroupBizId',
        'alertUserGroupBizId'     => 'AlertUserGroupBizId',
        'application'             => 'Application',
        'categoryId'              => 'CategoryId',
        'clusterId'               => 'ClusterId',
        'createCluster'           => 'CreateCluster',
        'cronExpr'                => 'CronExpr',
        'description'             => 'Description',
        'editLockDetail'          => 'EditLockDetail',
        'endSchedule'             => 'EndSchedule',
        'gmtCreate'               => 'GmtCreate',
        'gmtModified'             => 'GmtModified',
        'graph'                   => 'Graph',
        'hostName'                => 'HostName',
        'id'                      => 'Id',
        'lifecycle'               => 'Lifecycle',
        'logArchiveLocation'      => 'LogArchiveLocation',
        'name'                    => 'Name',
        'namespace'               => 'Namespace',
        'parentFlowList'          => 'ParentFlowList',
        'periodic'                => 'Periodic',
        'requestId'               => 'RequestId',
        'startSchedule'           => 'StartSchedule',
        'status'                  => 'Status',
        'type'                    => 'Type',
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
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
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
        if (null !== $this->editLockDetail) {
            $res['EditLockDetail'] = $this->editLockDetail;
        }
        if (null !== $this->endSchedule) {
            $res['EndSchedule'] = $this->endSchedule;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (null !== $this->parentFlowList) {
            $res['ParentFlowList'] = null !== $this->parentFlowList ? $this->parentFlowList->toMap() : null;
        }
        if (null !== $this->periodic) {
            $res['Periodic'] = $this->periodic;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startSchedule) {
            $res['StartSchedule'] = $this->startSchedule;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowResponseBody
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
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
        if (isset($map['EditLockDetail'])) {
            $model->editLockDetail = $map['EditLockDetail'];
        }
        if (isset($map['EndSchedule'])) {
            $model->endSchedule = $map['EndSchedule'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
        if (isset($map['ParentFlowList'])) {
            $model->parentFlowList = parentFlowList::fromMap($map['ParentFlowList']);
        }
        if (isset($map['Periodic'])) {
            $model->periodic = $map['Periodic'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartSchedule'])) {
            $model->startSchedule = $map['StartSchedule'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
