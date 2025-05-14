<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\admitLog\log;

class admitLog extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var log
     */
    public $log;

    /**
     * @var string
     */
    public $progress;
    protected $_name = [
        'count' => 'count',
        'log' => 'log',
        'progress' => 'progress',
    ];

    public function validate()
    {
        if (null !== $this->log) {
            $this->log->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->log) {
            $res['log'] = null !== $this->log ? $this->log->toArray($noStream) : $this->log;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['log'])) {
            $model->log = log::fromMap($map['log']);
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        return $model;
    }
}
