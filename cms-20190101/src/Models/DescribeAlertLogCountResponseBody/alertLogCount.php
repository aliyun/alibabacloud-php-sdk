<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogCountResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogCountResponseBody\alertLogCount\logs;
use AlibabaCloud\Tea\Model;

class alertLogCount extends Model
{
    /**
     * @description The number of alert logs.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The details about alert logs.
     *
     * @var logs[]
     */
    public $logs;
    protected $_name = [
        'count' => 'Count',
        'logs'  => 'Logs',
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
        if (null !== $this->logs) {
            $res['Logs'] = [];
            if (null !== $this->logs && \is_array($this->logs)) {
                $n = 0;
                foreach ($this->logs as $item) {
                    $res['Logs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertLogCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n           = 0;
                foreach ($map['Logs'] as $item) {
                    $model->logs[$n++] = null !== $item ? logs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
