<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class CreateRestoreTaskRequest extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $destinationEndpointInstanceType;

    /**
     * @var string
     */
    public $destinationEndpointRegion;

    /**
     * @var string
     */
    public $destinationEndpointInstanceID;

    /**
     * @var string
     */
    public $destinationEndpointIP;

    /**
     * @var int
     */
    public $destinationEndpointPort;

    /**
     * @var string
     */
    public $destinationEndpointDatabaseName;

    /**
     * @var string
     */
    public $destinationEndpointUserName;

    /**
     * @var string
     */
    public $destinationEndpointPassword;

    /**
     * @var int
     */
    public $backupGatewayId;

    /**
     * @var string
     */
    public $restoreObjects;

    /**
     * @var int
     */
    public $restoreTime;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var string
     */
    public $restoreTaskName;

    /**
     * @var string
     */
    public $destinationEndpointOracleSID;

    /**
     * @var string
     */
    public $restoreDir;

    /**
     * @var string
     */
    public $restoreHome;

    /**
     * @var string
     */
    public $duplicateConflict;

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
    public $ownerId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'backupPlanId'                    => 'BackupPlanId',
        'destinationEndpointInstanceType' => 'DestinationEndpointInstanceType',
        'destinationEndpointRegion'       => 'DestinationEndpointRegion',
        'destinationEndpointInstanceID'   => 'DestinationEndpointInstanceID',
        'destinationEndpointIP'           => 'DestinationEndpointIP',
        'destinationEndpointPort'         => 'DestinationEndpointPort',
        'destinationEndpointDatabaseName' => 'DestinationEndpointDatabaseName',
        'destinationEndpointUserName'     => 'DestinationEndpointUserName',
        'destinationEndpointPassword'     => 'DestinationEndpointPassword',
        'backupGatewayId'                 => 'BackupGatewayId',
        'restoreObjects'                  => 'RestoreObjects',
        'restoreTime'                     => 'RestoreTime',
        'backupSetId'                     => 'BackupSetId',
        'restoreTaskName'                 => 'RestoreTaskName',
        'destinationEndpointOracleSID'    => 'DestinationEndpointOracleSID',
        'restoreDir'                      => 'RestoreDir',
        'restoreHome'                     => 'RestoreHome',
        'duplicateConflict'               => 'DuplicateConflict',
        'crossAliyunId'                   => 'CrossAliyunId',
        'crossRoleName'                   => 'CrossRoleName',
        'ownerId'                         => 'OwnerId',
        'clientToken'                     => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->destinationEndpointInstanceType) {
            $res['DestinationEndpointInstanceType'] = $this->destinationEndpointInstanceType;
        }
        if (null !== $this->destinationEndpointRegion) {
            $res['DestinationEndpointRegion'] = $this->destinationEndpointRegion;
        }
        if (null !== $this->destinationEndpointInstanceID) {
            $res['DestinationEndpointInstanceID'] = $this->destinationEndpointInstanceID;
        }
        if (null !== $this->destinationEndpointIP) {
            $res['DestinationEndpointIP'] = $this->destinationEndpointIP;
        }
        if (null !== $this->destinationEndpointPort) {
            $res['DestinationEndpointPort'] = $this->destinationEndpointPort;
        }
        if (null !== $this->destinationEndpointDatabaseName) {
            $res['DestinationEndpointDatabaseName'] = $this->destinationEndpointDatabaseName;
        }
        if (null !== $this->destinationEndpointUserName) {
            $res['DestinationEndpointUserName'] = $this->destinationEndpointUserName;
        }
        if (null !== $this->destinationEndpointPassword) {
            $res['DestinationEndpointPassword'] = $this->destinationEndpointPassword;
        }
        if (null !== $this->backupGatewayId) {
            $res['BackupGatewayId'] = $this->backupGatewayId;
        }
        if (null !== $this->restoreObjects) {
            $res['RestoreObjects'] = $this->restoreObjects;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->restoreTaskName) {
            $res['RestoreTaskName'] = $this->restoreTaskName;
        }
        if (null !== $this->destinationEndpointOracleSID) {
            $res['DestinationEndpointOracleSID'] = $this->destinationEndpointOracleSID;
        }
        if (null !== $this->restoreDir) {
            $res['RestoreDir'] = $this->restoreDir;
        }
        if (null !== $this->restoreHome) {
            $res['RestoreHome'] = $this->restoreHome;
        }
        if (null !== $this->duplicateConflict) {
            $res['DuplicateConflict'] = $this->duplicateConflict;
        }
        if (null !== $this->crossAliyunId) {
            $res['CrossAliyunId'] = $this->crossAliyunId;
        }
        if (null !== $this->crossRoleName) {
            $res['CrossRoleName'] = $this->crossRoleName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRestoreTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['DestinationEndpointInstanceType'])) {
            $model->destinationEndpointInstanceType = $map['DestinationEndpointInstanceType'];
        }
        if (isset($map['DestinationEndpointRegion'])) {
            $model->destinationEndpointRegion = $map['DestinationEndpointRegion'];
        }
        if (isset($map['DestinationEndpointInstanceID'])) {
            $model->destinationEndpointInstanceID = $map['DestinationEndpointInstanceID'];
        }
        if (isset($map['DestinationEndpointIP'])) {
            $model->destinationEndpointIP = $map['DestinationEndpointIP'];
        }
        if (isset($map['DestinationEndpointPort'])) {
            $model->destinationEndpointPort = $map['DestinationEndpointPort'];
        }
        if (isset($map['DestinationEndpointDatabaseName'])) {
            $model->destinationEndpointDatabaseName = $map['DestinationEndpointDatabaseName'];
        }
        if (isset($map['DestinationEndpointUserName'])) {
            $model->destinationEndpointUserName = $map['DestinationEndpointUserName'];
        }
        if (isset($map['DestinationEndpointPassword'])) {
            $model->destinationEndpointPassword = $map['DestinationEndpointPassword'];
        }
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
        }
        if (isset($map['RestoreObjects'])) {
            $model->restoreObjects = $map['RestoreObjects'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['RestoreTaskName'])) {
            $model->restoreTaskName = $map['RestoreTaskName'];
        }
        if (isset($map['DestinationEndpointOracleSID'])) {
            $model->destinationEndpointOracleSID = $map['DestinationEndpointOracleSID'];
        }
        if (isset($map['RestoreDir'])) {
            $model->restoreDir = $map['RestoreDir'];
        }
        if (isset($map['RestoreHome'])) {
            $model->restoreHome = $map['RestoreHome'];
        }
        if (isset($map['DuplicateConflict'])) {
            $model->duplicateConflict = $map['DuplicateConflict'];
        }
        if (isset($map['CrossAliyunId'])) {
            $model->crossAliyunId = $map['CrossAliyunId'];
        }
        if (isset($map['CrossRoleName'])) {
            $model->crossRoleName = $map['CrossRoleName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
