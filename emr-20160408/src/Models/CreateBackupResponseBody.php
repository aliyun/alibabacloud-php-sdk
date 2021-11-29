<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var int
     */
    public $dataSourceId;

    /**
     * @var int
     */
    public $ecmTaskId;

    /**
     * @var int
     */
    public $endTime;

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
    public $hostName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskDetail;

    /**
     * @var int
     */
    public $taskProcess;

    /**
     * @var string
     */
    public $taskResultDetail;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $triggerUser;
    protected $_name = [
        'bizId'            => 'BizId',
        'clusterBizId'     => 'ClusterBizId',
        'dataSourceId'     => 'DataSourceId',
        'ecmTaskId'        => 'EcmTaskId',
        'endTime'          => 'EndTime',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'hostName'         => 'HostName',
        'requestId'        => 'RequestId',
        'startTime'        => 'StartTime',
        'taskDetail'       => 'TaskDetail',
        'taskProcess'      => 'TaskProcess',
        'taskResultDetail' => 'TaskResultDetail',
        'taskStatus'       => 'TaskStatus',
        'taskType'         => 'TaskType',
        'triggerType'      => 'TriggerType',
        'triggerUser'      => 'TriggerUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->ecmTaskId) {
            $res['EcmTaskId'] = $this->ecmTaskId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskDetail) {
            $res['TaskDetail'] = $this->taskDetail;
        }
        if (null !== $this->taskProcess) {
            $res['TaskProcess'] = $this->taskProcess;
        }
        if (null !== $this->taskResultDetail) {
            $res['TaskResultDetail'] = $this->taskResultDetail;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->triggerUser) {
            $res['TriggerUser'] = $this->triggerUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['EcmTaskId'])) {
            $model->ecmTaskId = $map['EcmTaskId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskDetail'])) {
            $model->taskDetail = $map['TaskDetail'];
        }
        if (isset($map['TaskProcess'])) {
            $model->taskProcess = $map['TaskProcess'];
        }
        if (isset($map['TaskResultDetail'])) {
            $model->taskResultDetail = $map['TaskResultDetail'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['TriggerUser'])) {
            $model->triggerUser = $map['TriggerUser'];
        }

        return $model;
    }
}
