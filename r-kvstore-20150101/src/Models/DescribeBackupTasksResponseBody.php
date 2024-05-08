<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupTasksResponseBody\accessDeniedDetail;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupTasksResponseBody\backupJobs;
use AlibabaCloud\Tea\Model;

class DescribeBackupTasksResponseBody extends Model
{
    /**
     * @description The following parameters are no longer used. Ignore the parameters.
     *
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @description The details of the backup tasks.
     *
     * @var backupJobs[]
     */
    public $backupJobs;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the backup task. Valid values:
     *
     *   **NoStart**: The backup task is not started.
     *   **Preparing**: The backup task is being prepared.
     *   **Waiting**: The backup task is pending.
     *   **Uploading:** The system is uploading the backup file.
     *   **Checking:** The system is checking the uploaded backup file.
     *   **Finished**: The backup task is complete.
     *
     * @example BB73740C-23E2-4392-9DA4-2660C74C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'backupJobs'         => 'BackupJobs',
        'instanceId'         => 'InstanceId',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toMap() : null;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
