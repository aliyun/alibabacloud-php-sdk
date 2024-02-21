<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowResponseBody\flow;

use AlibabaCloud\Tea\Model;

class flow extends Model
{
    /**
     * @example "{\"items\":[{\"enable\":true,\"eventId\":\"EMR-210401001\",\"alertUserGroupIdList\":[\"AUG-52dabfbbca654b52aae05ac5acd9a0f0\"],\"alertDingDingGroupList\":[\"ADG-2c411c452e6b467b9a59fadf21d195ad\"]}]}"
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
     * @example FC-2CF58396A189****
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example C-F32FB31D8295****
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
     * @example 0 0 0 * * ?
     *
     * @var string
     */
    public $cronExpr;

    /**
     * @example my flow demo
     *
     * @var string
     */
    public $description;

    /**
     * @example 4102416001000
     *
     * @var int
     */
    public $endSchedule;

    /**
     * @example 1541561048000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1542902401000
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
     * @example 7A39731FE719****
     *
     * @var string
     */
    public $id;

    /**
     * @example my_flow_demo
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $periodic;

    /**
     * @example FP-3535FE0BE522****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 1541561443000
     *
     * @var int
     */
    public $startSchedule;

    /**
     * @example UNDER_SCHEDULE
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
        'categoryId'              => 'CategoryId',
        'clusterId'               => 'ClusterId',
        'createCluster'           => 'CreateCluster',
        'cronExpr'                => 'CronExpr',
        'description'             => 'Description',
        'endSchedule'             => 'EndSchedule',
        'gmtCreate'               => 'GmtCreate',
        'gmtModified'             => 'GmtModified',
        'graph'                   => 'Graph',
        'hostName'                => 'HostName',
        'id'                      => 'Id',
        'name'                    => 'Name',
        'periodic'                => 'Periodic',
        'projectId'               => 'ProjectId',
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
        if (null !== $this->periodic) {
            $res['Periodic'] = $this->periodic;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
     * @return flow
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
        if (isset($map['Periodic'])) {
            $model->periodic = $map['Periodic'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
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
