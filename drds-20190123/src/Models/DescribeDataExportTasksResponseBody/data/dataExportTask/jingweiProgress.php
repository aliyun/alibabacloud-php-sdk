<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataExportTasksResponseBody\data\dataExportTask;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataExportTasksResponseBody\data\dataExportTask\jingweiProgress\full;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataExportTasksResponseBody\data\dataExportTask\jingweiProgress\increment;
use AlibabaCloud\Tea\Model;

class jingweiProgress extends Model
{
    /**
     * @var full
     */
    public $full;

    /**
     * @var bool
     */
    public $fullRunning;

    /**
     * @var increment
     */
    public $increment;

    /**
     * @var bool
     */
    public $incrementRunning;
    protected $_name = [
        'full'             => 'Full',
        'fullRunning'      => 'FullRunning',
        'increment'        => 'Increment',
        'incrementRunning' => 'IncrementRunning',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->full) {
            $res['Full'] = null !== $this->full ? $this->full->toMap() : null;
        }
        if (null !== $this->fullRunning) {
            $res['FullRunning'] = $this->fullRunning;
        }
        if (null !== $this->increment) {
            $res['Increment'] = null !== $this->increment ? $this->increment->toMap() : null;
        }
        if (null !== $this->incrementRunning) {
            $res['IncrementRunning'] = $this->incrementRunning;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jingweiProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Full'])) {
            $model->full = full::fromMap($map['Full']);
        }
        if (isset($map['FullRunning'])) {
            $model->fullRunning = $map['FullRunning'];
        }
        if (isset($map['Increment'])) {
            $model->increment = increment::fromMap($map['Increment']);
        }
        if (isset($map['IncrementRunning'])) {
            $model->incrementRunning = $map['IncrementRunning'];
        }

        return $model;
    }
}
