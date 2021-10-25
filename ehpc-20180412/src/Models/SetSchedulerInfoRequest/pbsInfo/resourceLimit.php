<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo;

use AlibabaCloud\Tea\Model;

class resourceLimit extends Model
{
    /**
     * @var int
     */
    public $nodes;

    /**
     * @var int
     */
    public $cpus;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $queue;

    /**
     * @var string
     */
    public $mem;
    protected $_name = [
        'nodes' => 'Nodes',
        'cpus'  => 'Cpus',
        'user'  => 'User',
        'queue' => 'Queue',
        'mem'   => 'Mem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->cpus) {
            $res['Cpus'] = $this->cpus;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
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
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['Cpus'])) {
            $model->cpus = $map['Cpus'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        return $model;
    }
}
