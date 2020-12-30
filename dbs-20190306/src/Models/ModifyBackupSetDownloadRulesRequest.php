<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupSetDownloadRulesRequest extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var bool
     */
    public $openAutoDownload;

    /**
     * @var int
     */
    public $backupGatewayId;

    /**
     * @var string
     */
    public $fullDataFormat;

    /**
     * @var string
     */
    public $incrementDataFormat;

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
    public $ownerId;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'backupPlanId'                        => 'BackupPlanId',
        'openAutoDownload'                    => 'OpenAutoDownload',
        'backupGatewayId'                     => 'BackupGatewayId',
        'fullDataFormat'                      => 'FullDataFormat',
        'incrementDataFormat'                 => 'IncrementDataFormat',
        'backupSetDownloadDir'                => 'BackupSetDownloadDir',
        'backupSetDownloadTargetType'         => 'BackupSetDownloadTargetType',
        'backupSetDownloadTargetTypeLocation' => 'BackupSetDownloadTargetTypeLocation',
        'ownerId'                             => 'OwnerId',
        'clientToken'                         => 'ClientToken',
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
        if (null !== $this->openAutoDownload) {
            $res['OpenAutoDownload'] = $this->openAutoDownload;
        }
        if (null !== $this->backupGatewayId) {
            $res['BackupGatewayId'] = $this->backupGatewayId;
        }
        if (null !== $this->fullDataFormat) {
            $res['FullDataFormat'] = $this->fullDataFormat;
        }
        if (null !== $this->incrementDataFormat) {
            $res['IncrementDataFormat'] = $this->incrementDataFormat;
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
     * @return ModifyBackupSetDownloadRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['OpenAutoDownload'])) {
            $model->openAutoDownload = $map['OpenAutoDownload'];
        }
        if (isset($map['BackupGatewayId'])) {
            $model->backupGatewayId = $map['BackupGatewayId'];
        }
        if (isset($map['FullDataFormat'])) {
            $model->fullDataFormat = $map['FullDataFormat'];
        }
        if (isset($map['IncrementDataFormat'])) {
            $model->incrementDataFormat = $map['IncrementDataFormat'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
