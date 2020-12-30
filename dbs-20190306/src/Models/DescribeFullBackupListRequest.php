<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class DescribeFullBackupListRequest extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $showStorageType;

    /**
     * @var string
     */
    public $backupSetId;
    protected $_name = [
        'backupPlanId'    => 'BackupPlanId',
        'pageSize'        => 'PageSize',
        'pageNum'         => 'PageNum',
        'ownerId'         => 'OwnerId',
        'clientToken'     => 'ClientToken',
        'showStorageType' => 'ShowStorageType',
        'backupSetId'     => 'BackupSetId',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->showStorageType) {
            $res['ShowStorageType'] = $this->showStorageType;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFullBackupListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ShowStorageType'])) {
            $model->showStorageType = $map['ShowStorageType'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }

        return $model;
    }
}
