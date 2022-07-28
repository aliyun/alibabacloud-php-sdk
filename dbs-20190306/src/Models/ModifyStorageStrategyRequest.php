<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class ModifyStorageStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $duplicationArchivePeriod;

    /**
     * @var int
     */
    public $duplicationInfrequentAccessPeriod;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'backupPlanId'                      => 'BackupPlanId',
        'backupRetentionPeriod'             => 'BackupRetentionPeriod',
        'clientToken'                       => 'ClientToken',
        'duplicationArchivePeriod'          => 'DuplicationArchivePeriod',
        'duplicationInfrequentAccessPeriod' => 'DuplicationInfrequentAccessPeriod',
        'ownerId'                           => 'OwnerId',
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
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->duplicationArchivePeriod) {
            $res['DuplicationArchivePeriod'] = $this->duplicationArchivePeriod;
        }
        if (null !== $this->duplicationInfrequentAccessPeriod) {
            $res['DuplicationInfrequentAccessPeriod'] = $this->duplicationInfrequentAccessPeriod;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyStorageStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DuplicationArchivePeriod'])) {
            $model->duplicationArchivePeriod = $map['DuplicationArchivePeriod'];
        }
        if (isset($map['DuplicationInfrequentAccessPeriod'])) {
            $model->duplicationInfrequentAccessPeriod = $map['DuplicationInfrequentAccessPeriod'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
