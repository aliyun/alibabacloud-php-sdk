<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\ListClusterFromGrafanaResponseBody;

use AlibabaCloud\Tea\Model;

class promClusterList extends Model
{
    /**
     * @var string
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $controllerId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $installTime;

    /**
     * @var bool
     */
    public $isControllerInstalled;

    /**
     * @var int
     */
    public $lastHeartBeatTime;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $pluginsJsonArray;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stateJson;

    /**
     * @var int
     */
    public $updateTime;

    /**
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
