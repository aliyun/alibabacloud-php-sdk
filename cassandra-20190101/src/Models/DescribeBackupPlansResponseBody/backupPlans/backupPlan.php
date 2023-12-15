<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlansResponseBody\backupPlans;

use AlibabaCloud\Tea\Model;

class backupPlan extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @example Monday
     *
     * @var string
     */
    public $backupPeriod;

    /**
     * @example 00:30Z
     *
     * @var string
     */
    public $backupTime;

    /**
     * @example cds-uf6m0bod****6159
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 2020-02-26T01:56Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $dataCenterId;

    /**
     * @example 5
     *
     * @var int
     */
    public $retentionPeriod;
    protected $_name = [
        'active'          => 'Active',
        'backupPeriod'    => 'BackupPeriod',
        'backupTime'      => 'BackupTime',
        'clusterId'       => 'ClusterId',
        'createdTime'     => 'CreatedTime',
        'dataCenterId'    => 'DataCenterId',
        'retentionPeriod' => 'RetentionPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }
        if (null !== $this->backupTime) {
            $res['BackupTime'] = $this->backupTime;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->retentionPeriod) {
            $res['RetentionPeriod'] = $this->retentionPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['BackupPeriod'])) {
            $model->backupPeriod = $map['BackupPeriod'];
        }
        if (isset($map['BackupTime'])) {
            $model->backupTime = $map['BackupTime'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['RetentionPeriod'])) {
            $model->retentionPeriod = $map['RetentionPeriod'];
        }

        return $model;
    }
}
