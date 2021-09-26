<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class RunClusterServiceActionRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $hostIdList;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceActionName;

    /**
     * @var string
     */
    public $customCommand;

    /**
     * @var string
     */
    public $componentNameList;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $isRolling;

    /**
     * @var string
     */
    public $executeStrategy;

    /**
     * @var string
     */
    public $customParams;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $nodeCountPerBatch;

    /**
     * @var int
     */
    public $tolerateFailCount;

    /**
     * @var bool
     */
    public $onlyRestartStaleConfigNodes;

    /**
     * @var bool
     */
    public $turnOnMaintenanceMode;

    /**
     * @var string[]
     */
    public $hostGroupIdList;
    protected $_name = [
        'resourceOwnerId'             => 'ResourceOwnerId',
        'regionId'                    => 'RegionId',
        'clusterId'                   => 'ClusterId',
        'hostIdList'                  => 'HostIdList',
        'serviceName'                 => 'ServiceName',
        'serviceActionName'           => 'ServiceActionName',
        'customCommand'               => 'CustomCommand',
        'componentNameList'           => 'ComponentNameList',
        'comment'                     => 'Comment',
        'isRolling'                   => 'IsRolling',
        'executeStrategy'             => 'ExecuteStrategy',
        'customParams'                => 'CustomParams',
        'interval'                    => 'Interval',
        'nodeCountPerBatch'           => 'NodeCountPerBatch',
        'tolerateFailCount'           => 'TolerateFailCount',
        'onlyRestartStaleConfigNodes' => 'OnlyRestartStaleConfigNodes',
        'turnOnMaintenanceMode'       => 'TurnOnMaintenanceMode',
        'hostGroupIdList'             => 'HostGroupIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->hostIdList) {
            $res['HostIdList'] = $this->hostIdList;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceActionName) {
            $res['ServiceActionName'] = $this->serviceActionName;
        }
        if (null !== $this->customCommand) {
            $res['CustomCommand'] = $this->customCommand;
        }
        if (null !== $this->componentNameList) {
            $res['ComponentNameList'] = $this->componentNameList;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->isRolling) {
            $res['IsRolling'] = $this->isRolling;
        }
        if (null !== $this->executeStrategy) {
            $res['ExecuteStrategy'] = $this->executeStrategy;
        }
        if (null !== $this->customParams) {
            $res['CustomParams'] = $this->customParams;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->nodeCountPerBatch) {
            $res['NodeCountPerBatch'] = $this->nodeCountPerBatch;
        }
        if (null !== $this->tolerateFailCount) {
            $res['TolerateFailCount'] = $this->tolerateFailCount;
        }
        if (null !== $this->onlyRestartStaleConfigNodes) {
            $res['OnlyRestartStaleConfigNodes'] = $this->onlyRestartStaleConfigNodes;
        }
        if (null !== $this->turnOnMaintenanceMode) {
            $res['TurnOnMaintenanceMode'] = $this->turnOnMaintenanceMode;
        }
        if (null !== $this->hostGroupIdList) {
            $res['HostGroupIdList'] = $this->hostGroupIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunClusterServiceActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HostIdList'])) {
            $model->hostIdList = $map['HostIdList'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceActionName'])) {
            $model->serviceActionName = $map['ServiceActionName'];
        }
        if (isset($map['CustomCommand'])) {
            $model->customCommand = $map['CustomCommand'];
        }
        if (isset($map['ComponentNameList'])) {
            $model->componentNameList = $map['ComponentNameList'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['IsRolling'])) {
            $model->isRolling = $map['IsRolling'];
        }
        if (isset($map['ExecuteStrategy'])) {
            $model->executeStrategy = $map['ExecuteStrategy'];
        }
        if (isset($map['CustomParams'])) {
            $model->customParams = $map['CustomParams'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['NodeCountPerBatch'])) {
            $model->nodeCountPerBatch = $map['NodeCountPerBatch'];
        }
        if (isset($map['TolerateFailCount'])) {
            $model->tolerateFailCount = $map['TolerateFailCount'];
        }
        if (isset($map['OnlyRestartStaleConfigNodes'])) {
            $model->onlyRestartStaleConfigNodes = $map['OnlyRestartStaleConfigNodes'];
        }
        if (isset($map['TurnOnMaintenanceMode'])) {
            $model->turnOnMaintenanceMode = $map['TurnOnMaintenanceMode'];
        }
        if (isset($map['HostGroupIdList'])) {
            if (!empty($map['HostGroupIdList'])) {
                $model->hostGroupIdList = $map['HostGroupIdList'];
            }
        }

        return $model;
    }
}
