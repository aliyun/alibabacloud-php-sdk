<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupTasksResponseBody\accessDeniedDetail;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupTasksResponseBody\backupJobs;

class DescribeBackupTasksResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var backupJobs[]
     */
    public $backupJobs;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'backupJobs' => 'BackupJobs',
        'instanceId' => 'InstanceId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        if (\is_array($this->backupJobs)) {
            Model::validateArray($this->backupJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->backupJobs) {
            if (\is_array($this->backupJobs)) {
                $res['BackupJobs'] = [];
                $n1 = 0;
                foreach ($this->backupJobs as $item1) {
                    $res['BackupJobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }

        if (isset($map['BackupJobs'])) {
            if (!empty($map['BackupJobs'])) {
                $model->backupJobs = [];
                $n1 = 0;
                foreach ($map['BackupJobs'] as $item1) {
                    $model->backupJobs[$n1++] = backupJobs::fromMap($item1);
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
