<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowResponseBody\parentFlowList;
use AlibabaCloud\Tea\Model;

class DescribeFlowResponseBody extends Model
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
    public $application;

    /**
     * @var string
     */
    public $categoryId;

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
     * @var string
     */
    public $editLockDetail;

    /**
     * @var int
     */
    public $endSchedule;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

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
     * @var bool
     */
    public $periodic;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startSchedule;

    /**
     * @var string
     */
    public $status;

    /**
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
