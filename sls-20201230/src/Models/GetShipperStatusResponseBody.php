<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\GetShipperStatusResponseBody\statistics;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetShipperStatusResponseBody\tasks;
use AlibabaCloud\Tea\Model;

class GetShipperStatusResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @var statistics
     */
    public $statistics;

    /**
     * @var tasks
     */
    public $tasks;

    /**
     * @example 20
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'count'      => 'count',
        'statistics' => 'statistics',
        'tasks'      => 'tasks',
        'total'      => 'total',
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
        if (null !== $this->statistics) {
            $res['statistics'] = null !== $this->statistics ? $this->statistics->toMap() : null;
        }
        if (null !== $this->tasks) {
            $res['tasks'] = null !== $this->tasks ? $this->tasks->toMap() : null;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetShipperStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['statistics'])) {
            $model->statistics = statistics::fromMap($map['statistics']);
        }
        if (isset($map['tasks'])) {
            $model->tasks = tasks::fromMap($map['tasks']);
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
