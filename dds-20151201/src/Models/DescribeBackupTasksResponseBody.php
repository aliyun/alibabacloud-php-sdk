<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeBackupTasksResponseBody\backupJobs;
use AlibabaCloud\Tea\Model;

class DescribeBackupTasksResponseBody extends Model
{
    /**
     * @var backupJobs[]
     */
    public $backupJobs;

    /**
     * @example D648B367-15B6-1B42-BD4B-47507C9CC****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupJobs' => 'BackupJobs',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupJobs) {
            $res['BackupJobs'] = [];
            if (null !== $this->backupJobs && \is_array($this->backupJobs)) {
                $n = 0;
                foreach ($this->backupJobs as $item) {
                    $res['BackupJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupJobs'])) {
            if (!empty($map['BackupJobs'])) {
                $model->backupJobs = [];
                $n                 = 0;
                foreach ($map['BackupJobs'] as $item) {
                    $model->backupJobs[$n++] = null !== $item ? backupJobs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
