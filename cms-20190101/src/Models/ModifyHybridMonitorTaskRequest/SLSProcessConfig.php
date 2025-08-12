<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\SLSProcessConfig\express;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\SLSProcessConfig\filter;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\SLSProcessConfig\groupBy;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\SLSProcessConfig\statistics;

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
        'express' => 'Express',
        'filter' => 'Filter',
        'groupBy' => 'GroupBy',
        'statistics' => 'Statistics',
    ];

    public function validate()
    {
        if (\is_array($this->express)) {
            Model::validateArray($this->express);
        }
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        if (\is_array($this->statistics)) {
            Model::validateArray($this->statistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->express) {
            if (\is_array($this->express)) {
                $res['Express'] = [];
                $n1 = 0;
                foreach ($this->express as $item1) {
                    $res['Express'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->groupBy) {
            if (\is_array($this->groupBy)) {
                $res['GroupBy'] = [];
                $n1 = 0;
                foreach ($this->groupBy as $item1) {
                    $res['GroupBy'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->statistics) {
            if (\is_array($this->statistics)) {
                $res['Statistics'] = [];
                $n1 = 0;
                foreach ($this->statistics as $item1) {
                    $res['Statistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Express'])) {
            if (!empty($map['Express'])) {
                $model->express = [];
                $n1 = 0;
                foreach ($map['Express'] as $item1) {
                    $model->express[$n1] = express::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Filter'])) {
            $model->filter = filter::fromMap($map['Filter']);
        }

        if (isset($map['GroupBy'])) {
            if (!empty($map['GroupBy'])) {
                $model->groupBy = [];
                $n1 = 0;
                foreach ($map['GroupBy'] as $item1) {
                    $model->groupBy[$n1] = groupBy::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Statistics'])) {
            if (!empty($map['Statistics'])) {
                $model->statistics = [];
                $n1 = 0;
                foreach ($map['Statistics'] as $item1) {
                    $model->statistics[$n1] = statistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
