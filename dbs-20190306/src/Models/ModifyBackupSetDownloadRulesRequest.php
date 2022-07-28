<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupSetDownloadRulesRequest extends Model
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
    public $backupSetDownloadDir;

    /**
     * @var string
     */
    public $backupSetDownloadTargetType;

    /**
     * @var string
     */
    public $backupSetDownloadTargetTypeLocation;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $fullDataFormat;

    /**
     * @var string
     */
    public $incrementDataFormat;

    /**
     * @var bool
     */
    public $openAutoDownload;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'backupGatewayId'                     => 'BackupGatewayId',
        'backupPlanId'                        => 'BackupPlanId',
        'backupSetDownloadDir'                => 'BackupSetDownloadDir',
        'backupSetDownloadTargetType'         => 'BackupSetDownloadTargetType',
        'backupSetDownloadTargetTypeLocation' => 'BackupSetDownloadTargetTypeLocation',
        'clientToken'                         => 'ClientToken',
        'fullDataFormat'                      => 'FullDataFormat',
        'incrementDataFormat'                 => 'IncrementDataFormat',
        'openAutoDownload'                    => 'OpenAutoDownload',
        'ownerId'                             => 'OwnerId',
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
        if (null !== $this->backupSetDownloadDir) {
            $res['BackupSetDownloadDir'] = $this->backupSetDownloadDir;
        }
        if (null !== $this->backupSetDownloadTargetType) {
            $res['BackupSetDownloadTargetType'] = $this->backupSetDownloadTargetType;
        }
        if (null !== $this->backupSetDownloadTargetTypeLocation) {
            $res['BackupSetDownloadTargetTypeLocation'] = $this->backupSetDownloadTargetTypeLocation;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->fullDataFormat) {
            $res['FullDataFormat'] = $this->fullDataFormat;
        }
        if (null !== $this->incrementDataFormat) {
            $res['IncrementDataFormat'] = $this->incrementDataFormat;
        }
        if (null !== $this->openAutoDownload) {
            $res['OpenAutoDownload'] = $this->openAutoDownload;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupSetDownloadRulesRequest
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
        if (isset($map['BackupSetDownloadDir'])) {
            $model->backupSetDownloadDir = $map['BackupSetDownloadDir'];
        }
        if (isset($map['BackupSetDownloadTargetType'])) {
            $model->backupSetDownloadTargetType = $map['BackupSetDownloadTargetType'];
        }
        if (isset($map['BackupSetDownloadTargetTypeLocation'])) {
            $model->backupSetDownloadTargetTypeLocation = $map['BackupSetDownloadTargetTypeLocation'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['FullDataFormat'])) {
            $model->fullDataFormat = $map['FullDataFormat'];
        }
        if (isset($map['IncrementDataFormat'])) {
            $model->incrementDataFormat = $map['IncrementDataFormat'];
        }
        if (isset($map['OpenAutoDownload'])) {
            $model->openAutoDownload = $map['OpenAutoDownload'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
