<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob;
use AlibabaCloud\Tea\Model;

class replicationJobs extends Model
{
    /**
     * @var replicationJob[]
     */
    public $replicationJob;
    protected $_name = [
        'replicationJob' => 'ReplicationJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->replicationJob) {
            $res['ReplicationJob'] = [];
            if (null !== $this->replicationJob && \is_array($this->replicationJob)) {
                $n = 0;
                foreach ($this->replicationJob as $item) {
                    $res['ReplicationJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replicationJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReplicationJob'])) {
            if (!empty($map['ReplicationJob'])) {
                $model->replicationJob = [];
                $n                     = 0;
                foreach ($map['ReplicationJob'] as $item) {
                    $model->replicationJob[$n++] = null !== $item ? replicationJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
