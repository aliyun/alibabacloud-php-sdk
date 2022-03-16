<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPlanConfigRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $fullBackupCycle;

    /**
     * @var string
     */
    public $minHFileBackupCount;

    /**
     * @var string
     */
    public $nextFullBackupDate;

    /**
     * @var string
     */
    public $tables;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'fullBackupCycle'     => 'FullBackupCycle',
        'minHFileBackupCount' => 'MinHFileBackupCount',
        'nextFullBackupDate'  => 'NextFullBackupDate',
        'tables'              => 'Tables',
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
        if (null !== $this->fullBackupCycle) {
            $res['FullBackupCycle'] = $this->fullBackupCycle;
        }
        if (null !== $this->minHFileBackupCount) {
            $res['MinHFileBackupCount'] = $this->minHFileBackupCount;
        }
        if (null !== $this->nextFullBackupDate) {
            $res['NextFullBackupDate'] = $this->nextFullBackupDate;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPlanConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['FullBackupCycle'])) {
            $model->fullBackupCycle = $map['FullBackupCycle'];
        }
        if (isset($map['MinHFileBackupCount'])) {
            $model->minHFileBackupCount = $map['MinHFileBackupCount'];
        }
        if (isset($map['NextFullBackupDate'])) {
            $model->nextFullBackupDate = $map['NextFullBackupDate'];
        }
        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }

        return $model;
    }
}
