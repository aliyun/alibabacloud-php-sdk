<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Dara\Model;

class DescribePreCheckProgressListRequest extends Model
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
     * @var string
     */
    public $restoreTaskId;
    protected $_name = [
        'backupPlanId' => 'BackupPlanId',
        'clientToken' => 'ClientToken',
        'ownerId' => 'OwnerId',
        'restoreTaskId' => 'RestoreTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->restoreTaskId) {
            $res['RestoreTaskId'] = $this->restoreTaskId;
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
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RestoreTaskId'])) {
            $model->restoreTaskId = $map['RestoreTaskId'];
        }

        return $model;
    }
}
