<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo;

use AlibabaCloud\Tea\Model;

class resourceLimit extends Model
{
    /**
     * @description The maximum number of vCPUs that can be used for nodes in a queue.
     *
     * @example 2
     *
     * @var int
     */
    public $cpus;

    /**
     * @description The maximum number of jobs that can be submitted to the cluster. If the total number of running jobs and queuing jobs exceeds the value, no more jobs can be submitted.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxJobs;

    /**
     * @description The maximum memory resources that can be used in a queue. Units:
     *
     *   gb
     *   mb
     *   kb
     *
     * @example 2gb
     *
     * @var string
     */
    public $mem;

    /**
     * @description The maximum number of nodes that can be used in a queue.
     *
     * @example 2
     *
     * @var int
     */
    public $nodes;

    /**
     * @description PbsInfo specifies the number of PBS schedulers that can be configured in the cluster. Valid values of N: 0 to 100.
     *
     * If one of the User, Cpus, Nodes, and Mem parameters is set in ResourceLimit, you must specify the Queue parameter.
     * @example workq
     *
     * @var string
     */
    public $queue;

    /**
     * @description The name of the user that runs jobs.
     *
     * @example user1
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'cpus'    => 'Cpus',
        'maxJobs' => 'MaxJobs',
        'mem'     => 'Mem',
        'nodes'   => 'Nodes',
        'queue'   => 'Queue',
        'user'    => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpus) {
            $res['Cpus'] = $this->cpus;
        }
        if (null !== $this->maxJobs) {
            $res['MaxJobs'] = $this->maxJobs;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpus'])) {
            $model->cpus = $map['Cpus'];
        }
        if (isset($map['MaxJobs'])) {
            $model->maxJobs = $map['MaxJobs'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
