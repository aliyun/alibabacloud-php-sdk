<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob;

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
        if (\is_array($this->replicationJob)) {
            Model::validateArray($this->replicationJob);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->replicationJob) {
            if (\is_array($this->replicationJob)) {
                $res['ReplicationJob'] = [];
                $n1 = 0;
                foreach ($this->replicationJob as $item1) {
                    $res['ReplicationJob'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReplicationJob'])) {
            if (!empty($map['ReplicationJob'])) {
                $model->replicationJob = [];
                $n1 = 0;
                foreach ($map['ReplicationJob'] as $item1) {
                    $model->replicationJob[$n1++] = replicationJob::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
