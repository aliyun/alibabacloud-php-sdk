<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreTaskListResponseBody\items;

use AlibabaCloud\Tea\Model;

class restoreTaskDetail extends Model
{
    /**
     * @var int
     */
    public $backupGatewayId;

    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var int
     */
    public $continuousRestoreProgress;

    /**
     * @var string
     */
    public $crossAliyunId;

    /**
     * @var string
     */
    public $crossRoleName;

    /**
     * @var string
     */
    public $destinationEndpointDatabaseName;

    /**
     * @var string
     */
    public $destinationEndpointInstanceID;

    /**
     * @var string
     */
    public $destinationEndpointInstanceType;

    /**
     * @var string
     */
    public $destinationEndpointIpPort;

    /**
     * @var string
     */
    public $destinationEndpointOracleSID;

    /**
     * @var string
     */
    public $destinationEndpointRegion;

    /**
     * @var string
     */
    public $destinationEndpointUserName;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var int
     */
    public $fullDataRestoreProgress;

    /**
     * @var int
     */
    public $fullStruAfterRestoreProgress;

    /**
     * @var int
     */
    public $fullStruforeRestoreProgress;

    /**
     * @var string
     */
    public $restoreDir;

    /**
     * @var string
     */
    public $restoreObjects;

    /**
     * @var string
     */
    public $restoreStatus;

    /**
     * @var int
     */
    public $restoreTaskCreateTime;

    /**
     * @var int
     */
    public $restoreTaskFinishTime;

    /**
     * @var string
     */
    public $restoreTaskId;

    /**
     * @var string
     */
    public $restoreTaskName;

    /**
     * @var int
     */
    public $restoreTime;
    protected $_name = [
        'backupGatewayId'                 => 'BackupGatewayId',
        'backupPlanId'                    => 'BackupPlanId',
        'backupSetId'                     => 'BackupSetId',
        'continuousRestoreProgress'       => 'ContinuousRestoreProgress',
        'crossAliyunId'                   => 'CrossAliyunId',
        'crossRoleName'                   => 'CrossRoleName',
        'destinationEndpointDatabaseName' => 'DestinationEndpointDatabaseName',
        'destinationEndpointInstanceID'   => 'DestinationEndpointInstanceID',
        'destinationEndpointInstanceType' => 'DestinationEndpointInstanceType',
        'destinationEndpointIpPort'       => 'DestinationEndpointIpPort',
        'destinationEndpointOracleSID'    => 'DestinationEndpointOracleSID',
        'destinationEndpointRegion'       => 'DestinationEndpointRegion',
        'destinationEndpointUserName'     => 'DestinationEndpointUserName',
        'errMessage'                      => 'ErrMessage',
        'fullDataRestoreProgress'         => 'FullDataRestoreProgress',
        'fullStruAfterRestoreProgress'    => 'FullStruAfterRestoreProgress',
        'fullStruforeRestoreProgress'     => 'FullStruforeRestoreProgress',
        'restoreDir'                      => 'RestoreDir',
        'restoreObjects'                  => 'RestoreObjects',
        'restoreStatus'                   => 'RestoreStatus',
        'restoreTaskCreateTime'           => 'RestoreTaskCreateTime',
        'restoreTaskFinishTime'           => 'RestoreTaskFinishTime',
        'restoreTaskId'                   => 'RestoreTaskId',
        'restoreTaskName'                 => 'RestoreTaskName',
        'restoreTime'                     => 'RestoreTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupGatewayId) {
            $res['BackupGatewayId'] = $this->backupGatewayId;
        }
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->continuousRestoreProgress) {
            $res['ContinuousRestoreProgress'] = $this->continuousRestoreProgress;
        }
        if (null !== $this->crossAliyunId) {
            $res['CrossAliyunId'] = $this->crossAliyunId;
        }
        if (null !== $this->crossRoleName) {
            $res['CrossRoleName'] = $this->crossRoleName;
        }
        if (null !== $this->destinationEndpointDatabaseName) {
            $res['DestinationEndpointDatabaseName'] = $this->destinationEndpointDatabaseName;
        }
        if (null !== $this->destinationEndpointInstanceID) {
            $res['DestinationEndpointInstanceID'] = $this->destinationEndpointInstanceID;
        }
        if (null !== $this->destinationEndpointInstanceType) {
            $res['DestinationEndpointInstanceType'] = $this->destinationEndpointInstanceType;
        }
        if (null !== $this->destinationEndpointIpPort) {
            $res['DestinationEndpointIpPort'] = $this->destinationEndpointIpPort;
        }
        if (null !== $this->destinationEndpointOracleSID) {
            $res['DestinationEndpointOracleSID'] = $this->destinationEndpointOracleSID;
        }
        if (null !== $this->destinationEndpointRegion) {
            $res['DestinationEndpointRegion'] = $this->destinationEndpointRegion;
        }
        if (null !== $this->destinationEndpointUserName) {
            $res['DestinationEndpointUserName'] = $this->destinationEndpointUserName;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->fullDataRestoreProgress) {
            $res['FullDataRestoreProgress'] = $this->fullDataRestoreProgress;
        }
        if (null !== $this->fullStruAfterRestoreProgress) {
            $res['FullStruAfterRestoreProgress'] = $this->fullStruAfterRestoreProgress;
        }
        if (null !== $this->fullStruforeRestoreProgress) {
            $res['FullStruforeRestoreProgress'] = $this->fullStruforeRestoreProgress;
        }
        if (null !== $this->restoreDir) {
            $res['RestoreDir'] = $this->restoreDir;
        }
        if (null !== $this->restoreObjects) {
            $res['RestoreObjects'] = $this->restoreObjects;
        }
        if (null !== $this->restoreStatus) {
            $res['RestoreStatus'] = $this->restoreStatus;
        }
        if (null !== $this->restoreTaskCreateTime) {
            $res['RestoreTaskCreateTime'] = $this->restoreTaskCreateTime;
        }
        if (null !== $this->restoreTaskFinishTime) {
            $res['RestoreTaskFinishTime'] = $this->restoreTaskFinishTime;
        }
        if (null !== $this->restoreTaskId) {
            $res['RestoreTaskId'] = $this->restoreTaskId;
        }
        if (null !== $this->restoreTaskName) {
            $res['RestoreTaskName'] = $this->restoreTaskName;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreTaskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
        }
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['ContinuousRestoreProgress'])) {
            $model->continuousRestoreProgress = $map['ContinuousRestoreProgress'];
        }
        if (isset($map['CrossAliyunId'])) {
            $model->crossAliyunId = $map['CrossAliyunId'];
        }
        if (isset($map['CrossRoleName'])) {
            $model->crossRoleName = $map['CrossRoleName'];
        }
        if (isset($map['DestinationEndpointDatabaseName'])) {
            $model->destinationEndpointDatabaseName = $map['DestinationEndpointDatabaseName'];
        }
        if (isset($map['DestinationEndpointInstanceID'])) {
            $model->destinationEndpointInstanceID = $map['DestinationEndpointInstanceID'];
        }
        if (isset($map['DestinationEndpointInstanceType'])) {
            $model->destinationEndpointInstanceType = $map['DestinationEndpointInstanceType'];
        }
        if (isset($map['DestinationEndpointIpPort'])) {
            $model->destinationEndpointIpPort = $map['DestinationEndpointIpPort'];
        }
        if (isset($map['DestinationEndpointOracleSID'])) {
            $model->destinationEndpointOracleSID = $map['DestinationEndpointOracleSID'];
        }
        if (isset($map['DestinationEndpointRegion'])) {
            $model->destinationEndpointRegion = $map['DestinationEndpointRegion'];
        }
        if (isset($map['DestinationEndpointUserName'])) {
            $model->destinationEndpointUserName = $map['DestinationEndpointUserName'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['FullDataRestoreProgress'])) {
            $model->fullDataRestoreProgress = $map['FullDataRestoreProgress'];
        }
        if (isset($map['FullStruAfterRestoreProgress'])) {
            $model->fullStruAfterRestoreProgress = $map['FullStruAfterRestoreProgress'];
        }
        if (isset($map['FullStruforeRestoreProgress'])) {
            $model->fullStruforeRestoreProgress = $map['FullStruforeRestoreProgress'];
        }
        if (isset($map['RestoreDir'])) {
            $model->restoreDir = $map['RestoreDir'];
        }
        if (isset($map['RestoreObjects'])) {
            $model->restoreObjects = $map['RestoreObjects'];
        }
        if (isset($map['RestoreStatus'])) {
            $model->restoreStatus = $map['RestoreStatus'];
        }
        if (isset($map['RestoreTaskCreateTime'])) {
            $model->restoreTaskCreateTime = $map['RestoreTaskCreateTime'];
        }
        if (isset($map['RestoreTaskFinishTime'])) {
            $model->restoreTaskFinishTime = $map['RestoreTaskFinishTime'];
        }
        if (isset($map['RestoreTaskId'])) {
            $model->restoreTaskId = $map['RestoreTaskId'];
        }
        if (isset($map['RestoreTaskName'])) {
            $model->restoreTaskName = $map['RestoreTaskName'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }

        return $model;
    }
}
