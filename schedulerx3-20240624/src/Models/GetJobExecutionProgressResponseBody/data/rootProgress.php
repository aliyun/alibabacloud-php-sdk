<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data;

use AlibabaCloud\Tea\Model;

class rootProgress extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $finished;

    /**
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'finished' => 'Finished',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rootProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
