<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class CreateIncrementBackupSetDownloadRequest extends Model
{
    /**
     * @var string
     */
    public $backupSetDataFormat;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var string
     */
    public $backupSetName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'backupSetDataFormat' => 'BackupSetDataFormat',
        'backupSetId'         => 'BackupSetId',
        'backupSetName'       => 'BackupSetName',
        'clientToken'         => 'ClientToken',
        'ownerId'             => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetDataFormat) {
            $res['BackupSetDataFormat'] = $this->backupSetDataFormat;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->backupSetName) {
            $res['BackupSetName'] = $this->backupSetName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIncrementBackupSetDownloadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetDataFormat'])) {
            $model->backupSetDataFormat = $map['BackupSetDataFormat'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['BackupSetName'])) {
            $model->backupSetName = $map['BackupSetName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
