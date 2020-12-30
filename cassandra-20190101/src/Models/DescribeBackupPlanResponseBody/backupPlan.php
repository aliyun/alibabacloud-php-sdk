<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlanResponseBody;

use AlibabaCloud\Tea\Model;

class backupPlan extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $backupPeriod;

    /**
     * @var int
     */
    public $retentionPeriod;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $backupTime;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dataCenterId;
    protected $_name = [
        'active'          => 'Active',
        'backupPeriod'    => 'BackupPeriod',
        'retentionPeriod' => 'RetentionPeriod',
        'createdTime'     => 'CreatedTime',
        'backupTime'      => 'BackupTime',
        'clusterId'       => 'ClusterId',
        'dataCenterId'    => 'DataCenterId',
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
        if (null !== $this->retentionPeriod) {
            $res['RetentionPeriod'] = $this->retentionPeriod;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->backupTime) {
            $res['BackupTime'] = $this->backupTime;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
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
        if (isset($map['RetentionPeriod'])) {
            $model->retentionPeriod = $map['RetentionPeriod'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['BackupTime'])) {
            $model->backupTime = $map['BackupTime'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }

        return $model;
    }
}
