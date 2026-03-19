<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Dara\Model;

class CreateRestoreTaskRequest extends Model
{
    /**
     * @var string
     */
    public $autoOpenDatabase;

    /**
     * @var string
     */
    public $autoShutdownDatabase;

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
    public $destDatabaseInstanceClass;

    /**
     * @var string
     */
    public $destDatabaseInstanceDatabaseVersion;

    /**
     * @var string
     */
    public $destDatabaseInstanceRegion;

    /**
     * @var string
     */
    public $destDatabaseInstanceStorageSize;

    /**
     * @var string
     */
    public $destDatabaseInstanceType;

    /**
     * @var string
     */
    public $destDatabaseInstanceVSwitch;

    /**
     * @var string
     */
    public $destDatabaseInstanceVpc;

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
     * @var bool
     */
    public $enableDestinationEndpointSsl;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $restoreDestinationMode;

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

    /**
     * @var string
     */
    public $sslCaPem;
    protected $_name = [
        'autoOpenDatabase' => 'AutoOpenDatabase',
        'autoShutdownDatabase' => 'AutoShutdownDatabase',
        'backupGatewayId' => 'BackupGatewayId',
        'backupPlanId' => 'BackupPlanId',
        'backupSetId' => 'BackupSetId',
        'clientToken' => 'ClientToken',
        'crossAliyunId' => 'CrossAliyunId',
        'crossRoleName' => 'CrossRoleName',
        'destDatabaseInstanceClass' => 'DestDatabaseInstanceClass',
        'destDatabaseInstanceDatabaseVersion' => 'DestDatabaseInstanceDatabaseVersion',
        'destDatabaseInstanceRegion' => 'DestDatabaseInstanceRegion',
        'destDatabaseInstanceStorageSize' => 'DestDatabaseInstanceStorageSize',
        'destDatabaseInstanceType' => 'DestDatabaseInstanceType',
        'destDatabaseInstanceVSwitch' => 'DestDatabaseInstanceVSwitch',
        'destDatabaseInstanceVpc' => 'DestDatabaseInstanceVpc',
        'destinationEndpointDatabaseName' => 'DestinationEndpointDatabaseName',
        'destinationEndpointIP' => 'DestinationEndpointIP',
        'destinationEndpointInstanceID' => 'DestinationEndpointInstanceID',
        'destinationEndpointInstanceType' => 'DestinationEndpointInstanceType',
        'destinationEndpointOracleSID' => 'DestinationEndpointOracleSID',
        'destinationEndpointPassword' => 'DestinationEndpointPassword',
        'destinationEndpointPort' => 'DestinationEndpointPort',
        'destinationEndpointRegion' => 'DestinationEndpointRegion',
        'destinationEndpointUserName' => 'DestinationEndpointUserName',
        'duplicateConflict' => 'DuplicateConflict',
        'enableDestinationEndpointSsl' => 'EnableDestinationEndpointSsl',
        'ownerId' => 'OwnerId',
        'restoreDestinationMode' => 'RestoreDestinationMode',
        'restoreDir' => 'RestoreDir',
        'restoreHome' => 'RestoreHome',
        'restoreObjects' => 'RestoreObjects',
        'restoreTaskName' => 'RestoreTaskName',
        'restoreTime' => 'RestoreTime',
        'sslCaPem' => 'SslCaPem',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoOpenDatabase) {
            $res['AutoOpenDatabase'] = $this->autoOpenDatabase;
        }

        if (null !== $this->autoShutdownDatabase) {
            $res['AutoShutdownDatabase'] = $this->autoShutdownDatabase;
        }

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

        if (null !== $this->destDatabaseInstanceClass) {
            $res['DestDatabaseInstanceClass'] = $this->destDatabaseInstanceClass;
        }

        if (null !== $this->destDatabaseInstanceDatabaseVersion) {
            $res['DestDatabaseInstanceDatabaseVersion'] = $this->destDatabaseInstanceDatabaseVersion;
        }

        if (null !== $this->destDatabaseInstanceRegion) {
            $res['DestDatabaseInstanceRegion'] = $this->destDatabaseInstanceRegion;
        }

        if (null !== $this->destDatabaseInstanceStorageSize) {
            $res['DestDatabaseInstanceStorageSize'] = $this->destDatabaseInstanceStorageSize;
        }

        if (null !== $this->destDatabaseInstanceType) {
            $res['DestDatabaseInstanceType'] = $this->destDatabaseInstanceType;
        }

        if (null !== $this->destDatabaseInstanceVSwitch) {
            $res['DestDatabaseInstanceVSwitch'] = $this->destDatabaseInstanceVSwitch;
        }

        if (null !== $this->destDatabaseInstanceVpc) {
            $res['DestDatabaseInstanceVpc'] = $this->destDatabaseInstanceVpc;
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

        if (null !== $this->enableDestinationEndpointSsl) {
            $res['EnableDestinationEndpointSsl'] = $this->enableDestinationEndpointSsl;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->restoreDestinationMode) {
            $res['RestoreDestinationMode'] = $this->restoreDestinationMode;
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

        if (null !== $this->sslCaPem) {
            $res['SslCaPem'] = $this->sslCaPem;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoOpenDatabase'])) {
            $model->autoOpenDatabase = $map['AutoOpenDatabase'];
        }

        if (isset($map['AutoShutdownDatabase'])) {
            $model->autoShutdownDatabase = $map['AutoShutdownDatabase'];
        }

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

        if (isset($map['DestDatabaseInstanceClass'])) {
            $model->destDatabaseInstanceClass = $map['DestDatabaseInstanceClass'];
        }

        if (isset($map['DestDatabaseInstanceDatabaseVersion'])) {
            $model->destDatabaseInstanceDatabaseVersion = $map['DestDatabaseInstanceDatabaseVersion'];
        }

        if (isset($map['DestDatabaseInstanceRegion'])) {
            $model->destDatabaseInstanceRegion = $map['DestDatabaseInstanceRegion'];
        }

        if (isset($map['DestDatabaseInstanceStorageSize'])) {
            $model->destDatabaseInstanceStorageSize = $map['DestDatabaseInstanceStorageSize'];
        }

        if (isset($map['DestDatabaseInstanceType'])) {
            $model->destDatabaseInstanceType = $map['DestDatabaseInstanceType'];
        }

        if (isset($map['DestDatabaseInstanceVSwitch'])) {
            $model->destDatabaseInstanceVSwitch = $map['DestDatabaseInstanceVSwitch'];
        }

        if (isset($map['DestDatabaseInstanceVpc'])) {
            $model->destDatabaseInstanceVpc = $map['DestDatabaseInstanceVpc'];
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

        if (isset($map['EnableDestinationEndpointSsl'])) {
            $model->enableDestinationEndpointSsl = $map['EnableDestinationEndpointSsl'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RestoreDestinationMode'])) {
            $model->restoreDestinationMode = $map['RestoreDestinationMode'];
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

        if (isset($map['SslCaPem'])) {
            $model->sslCaPem = $map['SslCaPem'];
        }

        return $model;
    }
}
