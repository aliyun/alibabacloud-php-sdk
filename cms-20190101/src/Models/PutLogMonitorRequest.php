<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest\aggregates;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest\groupbys;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest\valueFilter;

class PutLogMonitorRequest extends Model
{
    /**
     * @var aggregates[]
     */
    public $aggregates;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var groupbys[]
     */
    public $groupbys;

    /**
     * @var string
     */
    public $logId;

    /**
     * @var string
     */
    public $metricExpress;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $slsLogstore;

    /**
     * @var string
     */
    public $slsProject;

    /**
     * @var string
     */
    public $slsRegionId;

    /**
     * @var string
     */
    public $tumblingwindows;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var valueFilter[]
     */
    public $valueFilter;

    /**
     * @var string
     */
    public $valueFilterRelation;
    protected $_name = [
        'aggregates' => 'Aggregates',
        'groupId' => 'GroupId',
        'groupbys' => 'Groupbys',
        'logId' => 'LogId',
        'metricExpress' => 'MetricExpress',
        'metricName' => 'MetricName',
        'regionId' => 'RegionId',
        'slsLogstore' => 'SlsLogstore',
        'slsProject' => 'SlsProject',
        'slsRegionId' => 'SlsRegionId',
        'tumblingwindows' => 'Tumblingwindows',
        'unit' => 'Unit',
        'valueFilter' => 'ValueFilter',
        'valueFilterRelation' => 'ValueFilterRelation',
    ];

    public function validate()
    {
        if (\is_array($this->aggregates)) {
            Model::validateArray($this->aggregates);
        }
        if (\is_array($this->groupbys)) {
            Model::validateArray($this->groupbys);
        }
        if (\is_array($this->valueFilter)) {
            Model::validateArray($this->valueFilter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregates) {
            if (\is_array($this->aggregates)) {
                $res['Aggregates'] = [];
                $n1 = 0;
                foreach ($this->aggregates as $item1) {
                    $res['Aggregates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupbys) {
            if (\is_array($this->groupbys)) {
                $res['Groupbys'] = [];
                $n1 = 0;
                foreach ($this->groupbys as $item1) {
                    $res['Groupbys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }

        if (null !== $this->metricExpress) {
            $res['MetricExpress'] = $this->metricExpress;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }

        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }

        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }

        if (null !== $this->tumblingwindows) {
            $res['Tumblingwindows'] = $this->tumblingwindows;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        if (null !== $this->valueFilter) {
            if (\is_array($this->valueFilter)) {
                $res['ValueFilter'] = [];
                $n1 = 0;
                foreach ($this->valueFilter as $item1) {
                    $res['ValueFilter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->valueFilterRelation) {
            $res['ValueFilterRelation'] = $this->valueFilterRelation;
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
        if (isset($map['Aggregates'])) {
            if (!empty($map['Aggregates'])) {
                $model->aggregates = [];
                $n1 = 0;
                foreach ($map['Aggregates'] as $item1) {
                    $model->aggregates[$n1] = aggregates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Groupbys'])) {
            if (!empty($map['Groupbys'])) {
                $model->groupbys = [];
                $n1 = 0;
                foreach ($map['Groupbys'] as $item1) {
                    $model->groupbys[$n1] = groupbys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }

        if (isset($map['MetricExpress'])) {
            $model->metricExpress = $map['MetricExpress'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }

        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }

        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }

        if (isset($map['Tumblingwindows'])) {
            $model->tumblingwindows = $map['Tumblingwindows'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        if (isset($map['ValueFilter'])) {
            if (!empty($map['ValueFilter'])) {
                $model->valueFilter = [];
                $n1 = 0;
                foreach ($map['ValueFilter'] as $item1) {
                    $model->valueFilter[$n1] = valueFilter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ValueFilterRelation'])) {
            $model->valueFilterRelation = $map['ValueFilterRelation'];
        }

        return $model;
    }
}
