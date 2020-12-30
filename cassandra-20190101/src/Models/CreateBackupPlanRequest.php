<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupPlanRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dataCenterId;

    /**
     * @var string
     */
    public $backupTime;

    /**
     * @var string
     */
    public $backupPeriod;

    /**
     * @var int
     */
    public $retentionPeriod;

    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'dataCenterId'    => 'DataCenterId',
        'backupTime'      => 'BackupTime',
        'backupPeriod'    => 'BackupPeriod',
        'retentionPeriod' => 'RetentionPeriod',
        'active'          => 'Active',
        'clientToken'     => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->backupTime) {
            $res['BackupTime'] = $this->backupTime;
        }
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }
        if (null !== $this->retentionPeriod) {
            $res['RetentionPeriod'] = $this->retentionPeriod;
        }
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['BackupTime'])) {
            $model->backupTime = $map['BackupTime'];
        }
        if (isset($map['BackupPeriod'])) {
            $model->backupPeriod = $map['BackupPeriod'];
        }
        if (isset($map['RetentionPeriod'])) {
            $model->retentionPeriod = $map['RetentionPeriod'];
        }
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
