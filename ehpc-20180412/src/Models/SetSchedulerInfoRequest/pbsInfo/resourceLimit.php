<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo;

use AlibabaCloud\Dara\Model;

class resourceLimit extends Model
{
    /**
     * @var int
     */
    public $cpus;

    /**
     * @var int
     */
    public $maxJobs;

    /**
     * @var string
     */
    public $mem;

    /**
     * @var int
     */
    public $nodes;

    /**
     * @var string
     */
    public $queue;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'cpus' => 'Cpus',
        'maxJobs' => 'MaxJobs',
        'mem' => 'Mem',
        'nodes' => 'Nodes',
        'queue' => 'Queue',
        'user' => 'User',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
