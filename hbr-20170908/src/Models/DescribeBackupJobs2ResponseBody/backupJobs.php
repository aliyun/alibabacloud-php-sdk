<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob;

class backupJobs extends Model
{
    /**
     * @var backupJob[]
     */
    public $backupJob;
    protected $_name = [
        'backupJob' => 'BackupJob',
    ];

    public function validate()
    {
        if (\is_array($this->backupJob)) {
            Model::validateArray($this->backupJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupJob) {
            if (\is_array($this->backupJob)) {
                $res['BackupJob'] = [];
                $n1               = 0;
                foreach ($this->backupJob as $item1) {
                    $res['BackupJob'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BackupJob'])) {
            if (!empty($map['BackupJob'])) {
                $model->backupJob = [];
                $n1               = 0;
                foreach ($map['BackupJob'] as $item1) {
                    $model->backupJob[$n1++] = backupJob::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
