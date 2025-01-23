<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan;

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
        if (\is_array($this->backupPlan)) {
            Model::validateArray($this->backupPlan);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupPlan) {
            if (\is_array($this->backupPlan)) {
                $res['BackupPlan'] = [];
                $n1                = 0;
                foreach ($this->backupPlan as $item1) {
                    $res['BackupPlan'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['BackupPlan'])) {
            if (!empty($map['BackupPlan'])) {
                $model->backupPlan = [];
                $n1                = 0;
                foreach ($map['BackupPlan'] as $item1) {
                    $model->backupPlan[$n1++] = backupPlan::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
