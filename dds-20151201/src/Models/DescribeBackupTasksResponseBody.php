<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupTasksResponseBody\backupJobs;

class DescribeBackupTasksResponseBody extends Model
{
    /**
     * @var backupJobs[]
     */
    public $backupJobs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupJobs' => 'BackupJobs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->backupJobs)) {
            Model::validateArray($this->backupJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupJobs) {
            if (\is_array($this->backupJobs)) {
                $res['BackupJobs'] = [];
                $n1 = 0;
                foreach ($this->backupJobs as $item1) {
                    $res['BackupJobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BackupJobs'])) {
            if (!empty($map['BackupJobs'])) {
                $model->backupJobs = [];
                $n1 = 0;
                foreach ($map['BackupJobs'] as $item1) {
                    $model->backupJobs[$n1++] = backupJobs::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
