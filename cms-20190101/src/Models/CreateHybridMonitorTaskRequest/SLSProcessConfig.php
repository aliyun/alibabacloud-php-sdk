<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig\express;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig\filter;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig\groupBy;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig\statistics;
use AlibabaCloud\Tea\Model;

class SLSProcessConfig extends Model
{
    /**
     * @var express[]
     */
    public $express;

    /**
     * @var filter
     */
    public $filter;

    /**
     * @var groupBy[]
     */
    public $groupBy;

    /**
     * @var statistics[]
     */
    public $statistics;
    protected $_name = [
        'express'    => 'Express',
        'filter'     => 'Filter',
        'groupBy'    => 'GroupBy',
        'statistics' => 'Statistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->express) {
            $res['Express'] = [];
            if (null !== $this->express && \is_array($this->express)) {
                $n = 0;
                foreach ($this->express as $item) {
                    $res['Express'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toMap() : null;
        }
        if (null !== $this->groupBy) {
            $res['GroupBy'] = [];
            if (null !== $this->groupBy && \is_array($this->groupBy)) {
                $n = 0;
                foreach ($this->groupBy as $item) {
                    $res['GroupBy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = [];
            if (null !== $this->statistics && \is_array($this->statistics)) {
                $n = 0;
                foreach ($this->statistics as $item) {
                    $res['Statistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SLSProcessConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Express'])) {
            if (!empty($map['Express'])) {
                $model->express = [];
                $n              = 0;
                foreach ($map['Express'] as $item) {
                    $model->express[$n++] = null !== $item ? express::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Filter'])) {
            $model->filter = filter::fromMap($map['Filter']);
        }
        if (isset($map['GroupBy'])) {
            if (!empty($map['GroupBy'])) {
                $model->groupBy = [];
                $n              = 0;
                foreach ($map['GroupBy'] as $item) {
                    $model->groupBy[$n++] = null !== $item ? groupBy::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Statistics'])) {
            if (!empty($map['Statistics'])) {
                $model->statistics = [];
                $n                 = 0;
                foreach ($map['Statistics'] as $item) {
                    $model->statistics[$n++] = null !== $item ? statistics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
