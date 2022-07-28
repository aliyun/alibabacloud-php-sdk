<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class CreateRestoreTaskRequest extends Model
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
     * @var string
     */
    public $clientToken;

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
    public $destinationEndpointIP;

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
    public $destinationEndpointOracleSID;

    /**
     * @var string
     */
    public $destinationEndpointPassword;

    /**
     * @var int
     */
    public $destinationEndpointPort;

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
    public $duplicateConflict;

    /**
     * @var string
     */
    public $ownerId;

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
    public $restoreObjects;

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
        'clientToken'                     => 'ClientToken',
        'crossAliyunId'                   => 'CrossAliyunId',
        'crossRoleName'                   => 'CrossRoleName',
        'destinationEndpointDatabaseName' => 'DestinationEndpointDatabaseName',
        'destinationEndpointIP'           => 'DestinationEndpointIP',
        'destinationEndpointInstanceID'   => 'DestinationEndpointInstanceID',
        'destinationEndpointInstanceType' => 'DestinationEndpointInstanceType',
        'destinationEndpointOracleSID'    => 'DestinationEndpointOracleSID',
        'destinationEndpointPassword'     => 'DestinationEndpointPassword',
        'destinationEndpointPort'         => 'DestinationEndpointPort',
        'destinationEndpointRegion'       => 'DestinationEndpointRegion',
        'destinationEndpointUserName'     => 'DestinationEndpointUserName',
        'duplicateConflict'               => 'DuplicateConflict',
        'ownerId'                         => 'OwnerId',
        'restoreDir'                      => 'RestoreDir',
        'restoreHome'                     => 'RestoreHome',
        'restoreObjects'                  => 'RestoreObjects',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->destinationEndpointIP) {
            $res['DestinationEndpointIP'] = $this->destinationEndpointIP;
        }
        if (null !== $this->destinationEndpointInstanceID) {
            $res['DestinationEndpointInstanceID'] = $this->destinationEndpointInstanceID;
        }
        if (null !== $this->destinationEndpointInstanceType) {
            $res['DestinationEndpointInstanceType'] = $this->destinationEndpointInstanceType;
        }
        if (null !== $this->destinationEndpointOracleSID) {
            $res['DestinationEndpointOracleSID'] = $this->destinationEndpointOracleSID;
        }
        if (null !== $this->destinationEndpointPassword) {
            $res['DestinationEndpointPassword'] = $this->destinationEndpointPassword;
        }
        if (null !== $this->destinationEndpointPort) {
            $res['DestinationEndpointPort'] = $this->destinationEndpointPort;
        }
        if (null !== $this->destinationEndpointRegion) {
            $res['DestinationEndpointRegion'] = $this->destinationEndpointRegion;
        }
        if (null !== $this->destinationEndpointUserName) {
            $res['DestinationEndpointUserName'] = $this->destinationEndpointUserName;
        }
        if (null !== $this->duplicateConflict) {
            $res['DuplicateConflict'] = $this->duplicateConflict;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->restoreDir) {
            $res['RestoreDir'] = $this->restoreDir;
        }
        if (null !== $this->restoreHome) {
            $res['RestoreHome'] = $this->restoreHome;
        }
        if (null !== $this->restoreObjects) {
            $res['RestoreObjects'] = $this->restoreObjects;
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
     * @return CreateRestoreTaskRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['DestinationEndpointIP'])) {
            $model->destinationEndpointIP = $map['DestinationEndpointIP'];
        }
        if (isset($map['DestinationEndpointInstanceID'])) {
            $model->destinationEndpointInstanceID = $map['DestinationEndpointInstanceID'];
        }
        if (isset($map['DestinationEndpointInstanceType'])) {
            $model->destinationEndpointInstanceType = $map['DestinationEndpointInstanceType'];
        }
        if (isset($map['DestinationEndpointOracleSID'])) {
            $model->destinationEndpointOracleSID = $map['DestinationEndpointOracleSID'];
        }
        if (isset($map['DestinationEndpointPassword'])) {
            $model->destinationEndpointPassword = $map['DestinationEndpointPassword'];
        }
        if (isset($map['DestinationEndpointPort'])) {
            $model->destinationEndpointPort = $map['DestinationEndpointPort'];
        }
        if (isset($map['DestinationEndpointRegion'])) {
            $model->destinationEndpointRegion = $map['DestinationEndpointRegion'];
        }
        if (isset($map['DestinationEndpointUserName'])) {
            $model->destinationEndpointUserName = $map['DestinationEndpointUserName'];
        }
        if (isset($map['DuplicateConflict'])) {
            $model->duplicateConflict = $map['DuplicateConflict'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RestoreDir'])) {
            $model->restoreDir = $map['RestoreDir'];
        }
        if (isset($map['RestoreHome'])) {
            $model->restoreHome = $map['RestoreHome'];
        }
        if (isset($map['RestoreObjects'])) {
            $model->restoreObjects = $map['RestoreObjects'];
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
