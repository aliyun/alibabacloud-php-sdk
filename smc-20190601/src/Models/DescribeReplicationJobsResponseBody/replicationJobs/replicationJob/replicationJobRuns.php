<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\replicationJobRuns\replicationJobRun;

class replicationJobRuns extends Model
{
    /**
     * @var replicationJobRun[]
     */
    public $replicationJobRun;
    protected $_name = [
        'replicationJobRun' => 'ReplicationJobRun',
    ];

    public function validate()
    {
        if (\is_array($this->replicationJobRun)) {
            Model::validateArray($this->replicationJobRun);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->replicationJobRun) {
            if (\is_array($this->replicationJobRun)) {
                $res['ReplicationJobRun'] = [];
                $n1 = 0;
                foreach ($this->replicationJobRun as $item1) {
                    $res['ReplicationJobRun'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ReplicationJobRun'])) {
            if (!empty($map['ReplicationJobRun'])) {
                $model->replicationJobRun = [];
                $n1 = 0;
                foreach ($map['ReplicationJobRun'] as $item1) {
                    $model->replicationJobRun[$n1] = replicationJobRun::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
