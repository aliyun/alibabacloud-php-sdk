<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowResponseBody\parentFlowList;
use AlibabaCloud\Tea\Model;

class DescribeFlowResponseBody extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $periodic;

    /**
     * @var string
     */
    public $cronExpr;

    /**
     * @var string
     */
    public $alertDingDingGroupBizId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $alertUserGroupBizId;

    /**
     * @var string
     */
    public $logArchiveLocation;

    /**
     * @var int
     */
    public $endSchedule;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $startSchedule;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $editLockDetail;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $graph;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $application;

    /**
     * @var bool
     */
    public $createCluster;

    /**
     * @var string
     */
    public $alertConf;

    /**
     * @var parentFlowList
     */
    public $parentFlowList;
    protected $_name = [
        'categoryId'              => 'CategoryId',
        'description'             => 'Description',
        'gmtModified'             => 'GmtModified',
        'periodic'                => 'Periodic',
        'cronExpr'                => 'CronExpr',
        'alertDingDingGroupBizId' => 'AlertDingDingGroupBizId',
        'name'                    => 'Name',
        'alertUserGroupBizId'     => 'AlertUserGroupBizId',
        'logArchiveLocation'      => 'LogArchiveLocation',
        'endSchedule'             => 'EndSchedule',
        'hostName'                => 'HostName',
        'status'                  => 'Status',
        'startSchedule'           => 'StartSchedule',
        'requestId'               => 'RequestId',
        'clusterId'               => 'ClusterId',
        'lifecycle'               => 'Lifecycle',
        'editLockDetail'          => 'EditLockDetail',
        'namespace'               => 'Namespace',
        'type'                    => 'Type',
        'gmtCreate'               => 'GmtCreate',
        'graph'                   => 'Graph',
        'id'                      => 'Id',
        'application'             => 'Application',
        'createCluster'           => 'CreateCluster',
        'alertConf'               => 'AlertConf',
        'parentFlowList'          => 'ParentFlowList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->periodic) {
            $res['Periodic'] = $this->periodic;
        }
        if (null !== $this->cronExpr) {
            $res['CronExpr'] = $this->cronExpr;
        }
        if (null !== $this->alertDingDingGroupBizId) {
            $res['AlertDingDingGroupBizId'] = $this->alertDingDingGroupBizId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->alertUserGroupBizId) {
            $res['AlertUserGroupBizId'] = $this->alertUserGroupBizId;
        }
        if (null !== $this->logArchiveLocation) {
            $res['LogArchiveLocation'] = $this->logArchiveLocation;
        }
        if (null !== $this->endSchedule) {
            $res['EndSchedule'] = $this->endSchedule;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startSchedule) {
            $res['StartSchedule'] = $this->startSchedule;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }
        if (null !== $this->editLockDetail) {
            $res['EditLockDetail'] = $this->editLockDetail;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->graph) {
            $res['Graph'] = $this->graph;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->application) {
            $res['Application'] = $this->application;
        }
        if (null !== $this->createCluster) {
            $res['CreateCluster'] = $this->createCluster;
        }
        if (null !== $this->alertConf) {
            $res['AlertConf'] = $this->alertConf;
        }
        if (null !== $this->parentFlowList) {
            $res['ParentFlowList'] = null !== $this->parentFlowList ? $this->parentFlowList->toMap() : null;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Periodic'])) {
            $model->periodic = $map['Periodic'];
        }
        if (isset($map['CronExpr'])) {
            $model->cronExpr = $map['CronExpr'];
        }
        if (isset($map['AlertDingDingGroupBizId'])) {
            $model->alertDingDingGroupBizId = $map['AlertDingDingGroupBizId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AlertUserGroupBizId'])) {
            $model->alertUserGroupBizId = $map['AlertUserGroupBizId'];
        }
        if (isset($map['LogArchiveLocation'])) {
            $model->logArchiveLocation = $map['LogArchiveLocation'];
        }
        if (isset($map['EndSchedule'])) {
            $model->endSchedule = $map['EndSchedule'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartSchedule'])) {
            $model->startSchedule = $map['StartSchedule'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }
        if (isset($map['EditLockDetail'])) {
            $model->editLockDetail = $map['EditLockDetail'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Graph'])) {
            $model->graph = $map['Graph'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Application'])) {
            $model->application = $map['Application'];
        }
        if (isset($map['CreateCluster'])) {
            $model->createCluster = $map['CreateCluster'];
        }
        if (isset($map['AlertConf'])) {
            $model->alertConf = $map['AlertConf'];
        }
        if (isset($map['ParentFlowList'])) {
            $model->parentFlowList = parentFlowList::fromMap($map['ParentFlowList']);
        }

        return $model;
    }
}
