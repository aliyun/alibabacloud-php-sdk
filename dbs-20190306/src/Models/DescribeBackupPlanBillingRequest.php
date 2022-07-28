<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPlanBillingRequest extends Model
{
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
    public $ownerId;

    /**
     * @var bool
     */
    public $showStorageType;
    protected $_name = [
        'backupPlanId'    => 'BackupPlanId',
        'clientToken'     => 'ClientToken',
        'ownerId'         => 'OwnerId',
        'showStorageType' => 'ShowStorageType',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showStorageType) {
            $res['ShowStorageType'] = $this->showStorageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupPlanBillingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowStorageType'])) {
            $model->showStorageType = $map['ShowStorageType'];
        }

        return $model;
    }
}
