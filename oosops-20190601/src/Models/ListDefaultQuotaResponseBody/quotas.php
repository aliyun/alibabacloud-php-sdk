<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models\ListDefaultQuotaResponseBody;

use AlibabaCloud\Tea\Model;

class quotas extends Model
{
    /**
     * @var int
     */
    public $concurrentExecution;

    /**
     * @var int
     */
    public $dailyTasks;

    /**
     * @var int
     */
    public $totalTemplate;
    protected $_name = [
        'concurrentExecution' => 'ConcurrentExecution',
        'dailyTasks'          => 'DailyTasks',
        'totalTemplate'       => 'TotalTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrentExecution) {
            $res['ConcurrentExecution'] = $this->concurrentExecution;
        }
        if (null !== $this->dailyTasks) {
            $res['DailyTasks'] = $this->dailyTasks;
        }
        if (null !== $this->totalTemplate) {
            $res['TotalTemplate'] = $this->totalTemplate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConcurrentExecution'])) {
            $model->concurrentExecution = $map['ConcurrentExecution'];
        }
        if (isset($map['DailyTasks'])) {
            $model->dailyTasks = $map['DailyTasks'];
        }
        if (isset($map['TotalTemplate'])) {
            $model->totalTemplate = $map['TotalTemplate'];
        }

        return $model;
    }
}
