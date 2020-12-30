<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreTaskListResponseBody\items;

use AlibabaCloud\Tea\Model;

class restoreTaskDetail extends Model
{
    /**
     * @var string
     */
    public $restoreStatus;

    /**
     * @var int
     */
    public $fullStruAfterRestoreProgress;

    /**
     * @var string
     */
    public $crossRoleName;

    /**
     * @var string
     */
    public $restoreDir;

    /**
     * @var string
     */
    public $crossAliyunId;

    /**
     * @var string
     */
    public $restoreObjects;

    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $destinationEndpointRegion;

    /**
     * @var int
     */
    public $restoreTaskCreateTime;

    /**
     * @var string
     */
    public $destinationEndpointUserName;

    /**
     * @var int
     */
    public $restoreTaskFinishTime;

    /**
     * @var string
     */
    public $destinationEndpointIpPort;

    /**
     * @var string
     */
    public $destinationEndpointDatabaseName;

    /**
     * @var string
     */
    public $destinationEndpointOracleSID;

    /**
     * @var string
     */
    public $destinationEndpointInstanceType;

    /**
     * @var int
     */
    public $fullStruforeRestoreProgress;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $restoreTaskId;

    /**
     * @var int
     */
    public $fullDataRestoreProgress;

    /**
     * @var int
     */
    public $continuousRestoreProgress;

    /**
     * @var string
     */
    public $destinationEndpointInstanceID;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var string
     */
    public $restoreTaskName;

    /**
     * @var int
     */
    public $backupGatewayId;

    /**
     * @var int
     */
    public $restoreTime;
    protected $_name = [
        'restoreStatus'                   => 'RestoreStatus',
        'fullStruAfterRestoreProgress'    => 'FullStruAfterRestoreProgress',
        'crossRoleName'                   => 'CrossRoleName',
        'restoreDir'                      => 'RestoreDir',
        'crossAliyunId'                   => 'CrossAliyunId',
        'restoreObjects'                  => 'RestoreObjects',
        'backupPlanId'                    => 'BackupPlanId',
        'destinationEndpointRegion'       => 'DestinationEndpointRegion',
        'restoreTaskCreateTime'           => 'RestoreTaskCreateTime',
        'destinationEndpointUserName'     => 'DestinationEndpointUserName',
        'restoreTaskFinishTime'           => 'RestoreTaskFinishTime',
        'destinationEndpointIpPort'       => 'DestinationEndpointIpPort',
        'destinationEndpointDatabaseName' => 'DestinationEndpointDatabaseName',
        'destinationEndpointOracleSID'    => 'DestinationEndpointOracleSID',
        'destinationEndpointInstanceType' => 'DestinationEndpointInstanceType',
        'fullStruforeRestoreProgress'     => 'FullStruforeRestoreProgress',
        'errMessage'                      => 'ErrMessage',
        'restoreTaskId'                   => 'RestoreTaskId',
        'fullDataRestoreProgress'         => 'FullDataRestoreProgress',
        'continuousRestoreProgress'       => 'ContinuousRestoreProgress',
        'destinationEndpointInstanceID'   => 'DestinationEndpointInstanceID',
        'backupSetId'                     => 'BackupSetId',
        'restoreTaskName'                 => 'RestoreTaskName',
        'backupGatewayId'                 => 'BackupGatewayId',
        'restoreTime'                     => 'RestoreTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreStatus) {
            $res['RestoreStatus'] = $this->restoreStatus;
        }
        if (null !== $this->fullStruAfterRestoreProgress) {
            $res['FullStruAfterRestoreProgress'] = $this->fullStruAfterRestoreProgress;
        }
        if (null !== $this->crossRoleName) {
            $res['CrossRoleName'] = $this->crossRoleName;
        }
        if (null !== $this->restoreDir) {
            $res['RestoreDir'] = $this->restoreDir;
        }
        if (null !== $this->crossAliyunId) {
            $res['CrossAliyunId'] = $this->crossAliyunId;
        }
        if (null !== $this->restoreObjects) {
            $res['RestoreObjects'] = $this->restoreObjects;
        }
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->destinationEndpointRegion) {
            $res['DestinationEndpointRegion'] = $this->destinationEndpointRegion;
        }
        if (null !== $this->restoreTaskCreateTime) {
            $res['RestoreTaskCreateTime'] = $this->restoreTaskCreateTime;
        }
        if (null !== $this->destinationEndpointUserName) {
            $res['DestinationEndpointUserName'] = $this->destinationEndpointUserName;
        }
        if (null !== $this->restoreTaskFinishTime) {
            $res['RestoreTaskFinishTime'] = $this->restoreTaskFinishTime;
        }
        if (null !== $this->destinationEndpointIpPort) {
            $res['DestinationEndpointIpPort'] = $this->destinationEndpointIpPort;
        }
        if (null !== $this->destinationEndpointDatabaseName) {
            $res['DestinationEndpointDatabaseName'] = $this->destinationEndpointDatabaseName;
        }
        if (null !== $this->destinationEndpointOracleSID) {
            $res['DestinationEndpointOracleSID'] = $this->destinationEndpointOracleSID;
        }
        if (null !== $this->destinationEndpointInstanceType) {
            $res['DestinationEndpointInstanceType'] = $this->destinationEndpointInstanceType;
        }
        if (null !== $this->fullStruforeRestoreProgress) {
            $res['FullStruforeRestoreProgress'] = $this->fullStruforeRestoreProgress;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->restoreTaskId) {
            $res['RestoreTaskId'] = $this->restoreTaskId;
        }
        if (null !== $this->fullDataRestoreProgress) {
            $res['FullDataRestoreProgress'] = $this->fullDataRestoreProgress;
        }
        if (null !== $this->continuousRestoreProgress) {
            $res['ContinuousRestoreProgress'] = $this->continuousRestoreProgress;
        }
        if (null !== $this->destinationEndpointInstanceID) {
            $res['DestinationEndpointInstanceID'] = $this->destinationEndpointInstanceID;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->restoreTaskName) {
            $res['RestoreTaskName'] = $this->restoreTaskName;
        }
        if (null !== $this->backupGatewayId) {
            $res['BackupGatewayId'] = $this->backupGatewayId;
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
        if (isset($map['RestoreStatus'])) {
            $model->restoreStatus = $map['RestoreStatus'];
        }
        if (isset($map['FullStruAfterRestoreProgress'])) {
            $model->fullStruAfterRestoreProgress = $map['FullStruAfterRestoreProgress'];
        }
        if (isset($map['CrossRoleName'])) {
            $model->crossRoleName = $map['CrossRoleName'];
        }
        if (isset($map['RestoreDir'])) {
            $model->restoreDir = $map['RestoreDir'];
        }
        if (isset($map['CrossAliyunId'])) {
            $model->crossAliyunId = $map['CrossAliyunId'];
        }
        if (isset($map['RestoreObjects'])) {
            $model->restoreObjects = $map['RestoreObjects'];
        }
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['DestinationEndpointRegion'])) {
            $model->destinationEndpointRegion = $map['DestinationEndpointRegion'];
        }
        if (isset($map['RestoreTaskCreateTime'])) {
            $model->restoreTaskCreateTime = $map['RestoreTaskCreateTime'];
        }
        if (isset($map['DestinationEndpointUserName'])) {
            $model->destinationEndpointUserName = $map['DestinationEndpointUserName'];
        }
        if (isset($map['RestoreTaskFinishTime'])) {
            $model->restoreTaskFinishTime = $map['RestoreTaskFinishTime'];
        }
        if (isset($map['DestinationEndpointIpPort'])) {
            $model->destinationEndpointIpPort = $map['DestinationEndpointIpPort'];
        }
        if (isset($map['DestinationEndpointDatabaseName'])) {
            $model->destinationEndpointDatabaseName = $map['DestinationEndpointDatabaseName'];
        }
        if (isset($map['DestinationEndpointOracleSID'])) {
            $model->destinationEndpointOracleSID = $map['DestinationEndpointOracleSID'];
        }
        if (isset($map['DestinationEndpointInstanceType'])) {
            $model->destinationEndpointInstanceType = $map['DestinationEndpointInstanceType'];
        }
        if (isset($map['FullStruforeRestoreProgress'])) {
            $model->fullStruforeRestoreProgress = $map['FullStruforeRestoreProgress'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['RestoreTaskId'])) {
            $model->restoreTaskId = $map['RestoreTaskId'];
        }
        if (isset($map['FullDataRestoreProgress'])) {
            $model->fullDataRestoreProgress = $map['FullDataRestoreProgress'];
        }
        if (isset($map['ContinuousRestoreProgress'])) {
            $model->continuousRestoreProgress = $map['ContinuousRestoreProgress'];
        }
        if (isset($map['DestinationEndpointInstanceID'])) {
            $model->destinationEndpointInstanceID = $map['DestinationEndpointInstanceID'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['RestoreTaskName'])) {
            $model->restoreTaskName = $map['RestoreTaskName'];
        }
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }

        return $model;
    }
}
