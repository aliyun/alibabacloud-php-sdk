<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupTasksResponseBody\backupJobs;
use AlibabaCloud\Tea\Model;

class DescribeBackupTasksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var backupJobs[]
     */
    public $backupJobs;
    protected $_name = [
        'requestId'  => 'RequestId',
        'instanceId' => 'InstanceId',
        'backupJobs' => 'BackupJobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->backupJobs) {
            $res['BackupJobs'] = [];
            if (null !== $this->backupJobs && \is_array($this->backupJobs)) {
                $n = 0;
                foreach ($this->backupJobs as $item) {
                    $res['BackupJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['BackupJobs'])) {
            if (!empty($map['BackupJobs'])) {
                $model->backupJobs = [];
                $n                 = 0;
                foreach ($map['BackupJobs'] as $item) {
                    $model->backupJobs[$n++] = null !== $item ? backupJobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
