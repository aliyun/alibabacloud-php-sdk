<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanListResponseBody;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupPlanListResponseBody\items\backupPlanDetail;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var backupPlanDetail[]
     */
    public $backupPlanDetail;
    protected $_name = [
        'backupPlanDetail' => 'BackupPlanDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlanDetail) {
            $res['BackupPlanDetail'] = [];
            if (null !== $this->backupPlanDetail && \is_array($this->backupPlanDetail)) {
                $n = 0;
                foreach ($this->backupPlanDetail as $item) {
                    $res['BackupPlanDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanDetail'])) {
            if (!empty($map['BackupPlanDetail'])) {
                $model->backupPlanDetail = [];
                $n                       = 0;
                foreach ($map['BackupPlanDetail'] as $item) {
                    $model->backupPlanDetail[$n++] = null !== $item ? backupPlanDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
