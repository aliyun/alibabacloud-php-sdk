<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockProcessBlockStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The number of processes on the current page.
     *
     * @example 20
     *
     * @var int
     */
    public $count;

    /**
     * @description The process.
     *
     * @example cron
     *
     * @var string
     */
    public $process;
    protected $_name = [
        'count'   => 'Count',
        'process' => 'Process',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }

        return $model;
    }
}
