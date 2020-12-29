<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListClusterFromGrafanaResponseBody;

use AlibabaCloud\Tea\Model;

class promClusterList extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $options;

    /**
     * @var bool
     */
    public $isControllerInstalled;

    /**
     * @var string
     */
    public $agentStatus;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $controllerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $installTime;

    /**
     * @var string
     */
    public $pluginsJsonArray;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $stateJson;

    /**
     * @var int
     */
    public $lastHeartBeatTime;

    /**
     * @var int
     */
    public $nodeNum;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'updateTime'            => 'UpdateTime',
        'createTime'            => 'CreateTime',
        'userId'                => 'UserId',
        'options'               => 'Options',
        'isControllerInstalled' => 'IsControllerInstalled',
        'agentStatus'           => 'AgentStatus',
        'extra'                 => 'Extra',
        'controllerId'          => 'ControllerId',
        'regionId'              => 'RegionId',
        'installTime'           => 'InstallTime',
        'pluginsJsonArray'      => 'PluginsJsonArray',
        'clusterType'           => 'ClusterType',
        'clusterName'           => 'ClusterName',
        'stateJson'             => 'StateJson',
        'lastHeartBeatTime'     => 'LastHeartBeatTime',
        'nodeNum'               => 'NodeNum',
        'id'                    => 'Id',
        'clusterId'             => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->isControllerInstalled) {
            $res['IsControllerInstalled'] = $this->isControllerInstalled;
        }
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->controllerId) {
            $res['ControllerId'] = $this->controllerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->installTime) {
            $res['InstallTime'] = $this->installTime;
        }
        if (null !== $this->pluginsJsonArray) {
            $res['PluginsJsonArray'] = $this->pluginsJsonArray;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->stateJson) {
            $res['StateJson'] = $this->stateJson;
        }
        if (null !== $this->lastHeartBeatTime) {
            $res['LastHeartBeatTime'] = $this->lastHeartBeatTime;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['IsControllerInstalled'])) {
            $model->isControllerInstalled = $map['IsControllerInstalled'];
        }
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['ControllerId'])) {
            $model->controllerId = $map['ControllerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstallTime'])) {
            $model->installTime = $map['InstallTime'];
        }
        if (isset($map['PluginsJsonArray'])) {
            $model->pluginsJsonArray = $map['PluginsJsonArray'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['StateJson'])) {
            $model->stateJson = $map['StateJson'];
        }
        if (isset($map['LastHeartBeatTime'])) {
            $model->lastHeartBeatTime = $map['LastHeartBeatTime'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
