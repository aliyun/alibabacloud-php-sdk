<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\admitLog\log;
use AlibabaCloud\Tea\Model;

class admitLog extends Model
{
    /**
     * @description 当前查询到的日志总数
     *
     * @var int
     */
    public $count;

    /**
     * @description 策略治理审计日志内容
     *
     * @var log
     */
    public $log;

    /**
     * @description 查询结果的状态
     *
     * @var string
     */
    public $progress;
    protected $_name = [
        'count'    => 'count',
        'log'      => 'log',
        'progress' => 'progress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->log) {
            $res['log'] = null !== $this->log ? $this->log->toMap() : null;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return admitLog
     */
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
