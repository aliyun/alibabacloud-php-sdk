<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupSourceEndpointRequest extends Model
{
    /**
     * @var int
     */
    public $backupGatewayId;

    /**
     * @var string
     */
    public $backupObjects;

    /**
     * @var string
     */
    public $backupPlanId;

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
    public $ownerId;

    /**
     * @var string
     */
    public $sourceEndpointDatabaseName;

    /**
     * @var string
     */
    public $sourceEndpointIP;

    /**
     * @var string
     */
    public $sourceEndpointInstanceID;

    /**
     * @var string
     */
    public $sourceEndpointInstanceType;

    /**
     * @var string
     */
    public $sourceEndpointOracleSID;

    /**
     * @var string
     */
    public $sourceEndpointPassword;

    /**
     * @var int
     */
    public $sourceEndpointPort;

    /**
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @var string
     */
    public $sourceEndpointUserName;
    protected $_name = [
        'backupGatewayId'            => 'BackupGatewayId',
        'backupObjects'              => 'BackupObjects',
        'backupPlanId'               => 'BackupPlanId',
        'clientToken'                => 'ClientToken',
        'crossAliyunId'              => 'CrossAliyunId',
        'crossRoleName'              => 'CrossRoleName',
        'ownerId'                    => 'OwnerId',
        'sourceEndpointDatabaseName' => 'SourceEndpointDatabaseName',
        'sourceEndpointIP'           => 'SourceEndpointIP',
        'sourceEndpointInstanceID'   => 'SourceEndpointInstanceID',
        'sourceEndpointInstanceType' => 'SourceEndpointInstanceType',
        'sourceEndpointOracleSID'    => 'SourceEndpointOracleSID',
        'sourceEndpointPassword'     => 'SourceEndpointPassword',
        'sourceEndpointPort'         => 'SourceEndpointPort',
        'sourceEndpointRegion'       => 'SourceEndpointRegion',
        'sourceEndpointUserName'     => 'SourceEndpointUserName',
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
        if (null !== $this->backupObjects) {
            $res['BackupObjects'] = $this->backupObjects;
        }
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->sourceEndpointDatabaseName) {
            $res['SourceEndpointDatabaseName'] = $this->sourceEndpointDatabaseName;
        }
        if (null !== $this->sourceEndpointIP) {
            $res['SourceEndpointIP'] = $this->sourceEndpointIP;
        }
        if (null !== $this->sourceEndpointInstanceID) {
            $res['SourceEndpointInstanceID'] = $this->sourceEndpointInstanceID;
        }
        if (null !== $this->sourceEndpointInstanceType) {
            $res['SourceEndpointInstanceType'] = $this->sourceEndpointInstanceType;
        }
        if (null !== $this->sourceEndpointOracleSID) {
            $res['SourceEndpointOracleSID'] = $this->sourceEndpointOracleSID;
        }
        if (null !== $this->sourceEndpointPassword) {
            $res['SourceEndpointPassword'] = $this->sourceEndpointPassword;
        }
        if (null !== $this->sourceEndpointPort) {
            $res['SourceEndpointPort'] = $this->sourceEndpointPort;
        }
        if (null !== $this->sourceEndpointRegion) {
            $res['SourceEndpointRegion'] = $this->sourceEndpointRegion;
        }
        if (null !== $this->sourceEndpointUserName) {
            $res['SourceEndpointUserName'] = $this->sourceEndpointUserName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupSourceEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
        }
        if (isset($map['BackupObjects'])) {
            $model->backupObjects = $map['BackupObjects'];
        }
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SourceEndpointDatabaseName'])) {
            $model->sourceEndpointDatabaseName = $map['SourceEndpointDatabaseName'];
        }
        if (isset($map['SourceEndpointIP'])) {
            $model->sourceEndpointIP = $map['SourceEndpointIP'];
        }
        if (isset($map['SourceEndpointInstanceID'])) {
            $model->sourceEndpointInstanceID = $map['SourceEndpointInstanceID'];
        }
        if (isset($map['SourceEndpointInstanceType'])) {
            $model->sourceEndpointInstanceType = $map['SourceEndpointInstanceType'];
        }
        if (isset($map['SourceEndpointOracleSID'])) {
            $model->sourceEndpointOracleSID = $map['SourceEndpointOracleSID'];
        }
        if (isset($map['SourceEndpointPassword'])) {
            $model->sourceEndpointPassword = $map['SourceEndpointPassword'];
        }
        if (isset($map['SourceEndpointPort'])) {
            $model->sourceEndpointPort = $map['SourceEndpointPort'];
        }
        if (isset($map['SourceEndpointRegion'])) {
            $model->sourceEndpointRegion = $map['SourceEndpointRegion'];
        }
        if (isset($map['SourceEndpointUserName'])) {
            $model->sourceEndpointUserName = $map['SourceEndpointUserName'];
        }

        return $model;
    }
}
