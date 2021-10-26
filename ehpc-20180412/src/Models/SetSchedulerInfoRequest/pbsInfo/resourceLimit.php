<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo;

use AlibabaCloud\Tea\Model;

class resourceLimit extends Model
{
    /**
     * @var int
     */
    public $cpus;

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
        'cpus'  => 'Cpus',
        'mem'   => 'Mem',
        'nodes' => 'Nodes',
        'queue' => 'Queue',
        'user'  => 'User',
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
