<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListClusterFromGrafanaResponseBody;

use AlibabaCloud\Tea\Model;

class promClusterList extends Model
{
    /**
     * @description The status of the Prometheus agent on the cluster. Valid values:
     *
     *   INSTALL_FAILED: The Prometheus agent failed to be installed.
     *   INSTALL_SUCCEED: The Prometheus agent was installed.
     *   NOT_REGISTER: You have not registered an Alibaba Cloud account.
     *
     * @example INSTALL_FAILED
     *
     * @var string
     */
    public $agentStatus;

    /**
     * @description The cluster ID.
     *
     * @example c0df7ad9db0ed43128925ca04774c469e
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example ay-ads-hangzhou
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The type of the cluster.
     *
     * @example cloud-product-prometheus
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The controller ID.
     *
     * @example 1092
     *
     * @var string
     */
    public $controllerId;

    /**
     * @description The time when the dashboard was created.
     *
     * @example 2021-12-09T02:05:04Z
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The extended fields. This parameter is a JSON string.
     *
     * @example {\\"app_id\\":\\"bbd\\",\\"task_id\\":\\"4305ba5bf14942daa6e553ed91f46988\\"}
     *
     * @var string
     */
    public $extra;

    /**
     * @description The ID of a database in the cluster.
     *
     * @example 16136
     *
     * @var int
     */
    public $id;

    /**
     * @description The timestamp when the Prometheus agent was installed.
     *
     * @example 1653532518000
     *
     * @var int
     */
    public $installTime;

    /**
     * @description Indicates whether the Prometheus agent was installed. Valid values:
     *
     *   true: The Prometheus agent was installed.
     *   false: The Prometheus agent was not installed.
     *
     * @example true
     *
     * @var bool
     */
    public $isControllerInstalled;

    /**
     * @description The time when the last heartbeat was reported.
     *
     * @example 1653532518000
     *
     * @var int
     */
    public $lastHeartBeatTime;

    /**
     * @description The number of nodes.
     *
     * @example 3
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @description The custom parameter.
     *
     * @example {\\"Option\\": [\\"betaTestApproved\\"]}
     *
     * @var string
     */
    public $options;

    /**
     * @description The list of nodejsonar logs.
     *
     * @example {}
     *
     * @var string
     */
    public $pluginsJsonArray;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The information about applications deployed in the cluster.
     *
     * @example {}
     *
     * @var string
     */
    public $stateJson;

    /**
     * @description The time when the dashboard was updated.
     *
     * @example 2021-11-16T08:49:34Z
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the Alibaba Cloud account to which the cluster belongs.
     *
     * @example 1247285**
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'agentStatus'           => 'AgentStatus',
        'clusterId'             => 'ClusterId',
        'clusterName'           => 'ClusterName',
        'clusterType'           => 'ClusterType',
        'controllerId'          => 'ControllerId',
        'createTime'            => 'CreateTime',
        'extra'                 => 'Extra',
        'id'                    => 'Id',
        'installTime'           => 'InstallTime',
        'isControllerInstalled' => 'IsControllerInstalled',
        'lastHeartBeatTime'     => 'LastHeartBeatTime',
        'nodeNum'               => 'NodeNum',
        'options'               => 'Options',
        'pluginsJsonArray'      => 'PluginsJsonArray',
        'regionId'              => 'RegionId',
        'stateJson'             => 'StateJson',
        'updateTime'            => 'UpdateTime',
        'userId'                => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->controllerId) {
            $res['ControllerId'] = $this->controllerId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->installTime) {
            $res['InstallTime'] = $this->installTime;
        }
        if (null !== $this->isControllerInstalled) {
            $res['IsControllerInstalled'] = $this->isControllerInstalled;
        }
        if (null !== $this->lastHeartBeatTime) {
            $res['LastHeartBeatTime'] = $this->lastHeartBeatTime;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->pluginsJsonArray) {
            $res['PluginsJsonArray'] = $this->pluginsJsonArray;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stateJson) {
            $res['StateJson'] = $this->stateJson;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promClusterList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ControllerId'])) {
            $model->controllerId = $map['ControllerId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstallTime'])) {
            $model->installTime = $map['InstallTime'];
        }
        if (isset($map['IsControllerInstalled'])) {
            $model->isControllerInstalled = $map['IsControllerInstalled'];
        }
        if (isset($map['LastHeartBeatTime'])) {
            $model->lastHeartBeatTime = $map['LastHeartBeatTime'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['PluginsJsonArray'])) {
            $model->pluginsJsonArray = $map['PluginsJsonArray'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StateJson'])) {
            $model->stateJson = $map['StateJson'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
