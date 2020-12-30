<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlansResponseBody;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan;
use AlibabaCloud\Tea\Model;

class backupPlans extends Model
{
    /**
     * @var backupPlan[]
     */
    public $backupPlan;
    protected $_name = [
        'backupPlan' => 'BackupPlan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlan) {
            $res['BackupPlan'] = [];
            if (null !== $this->backupPlan && \is_array($this->backupPlan)) {
                $n = 0;
                foreach ($this->backupPlan as $item) {
                    $res['BackupPlan'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupPlans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlan'])) {
            if (!empty($map['BackupPlan'])) {
                $model->backupPlan = [];
                $n                 = 0;
                foreach ($map['BackupPlan'] as $item) {
                    $model->backupPlan[$n++] = null !== $item ? backupPlan::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
