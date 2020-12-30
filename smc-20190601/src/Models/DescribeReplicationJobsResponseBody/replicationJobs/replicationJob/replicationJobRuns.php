<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\replicationJobRuns\replicationJobRun;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->replicationJobRun) {
            $res['ReplicationJobRun'] = [];
            if (null !== $this->replicationJobRun && \is_array($this->replicationJobRun)) {
                $n = 0;
                foreach ($this->replicationJobRun as $item) {
                    $res['ReplicationJobRun'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replicationJobRuns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReplicationJobRun'])) {
            if (!empty($map['ReplicationJobRun'])) {
                $model->replicationJobRun = [];
                $n                        = 0;
                foreach ($map['ReplicationJobRun'] as $item) {
                    $model->replicationJobRun[$n++] = null !== $item ? replicationJobRun::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
