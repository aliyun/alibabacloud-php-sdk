<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest\aggregates;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest\groupbys;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest\valueFilter;
use AlibabaCloud\Tea\Model;

class PutLogMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $logId;

    /**
     * @var string
     */
    public $slsRegionId;

    /**
     * @var string
     */
    public $slsProject;

    /**
     * @var string
     */
    public $slsLogstore;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $metricExpress;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $valueFilterRelation;

    /**
     * @var string
     */
    public $tumblingwindows;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var aggregates[]
     */
    public $aggregates;

    /**
     * @var groupbys[]
     */
    public $groupbys;

    /**
     * @var valueFilter[]
     */
    public $valueFilter;
    protected $_name = [
        'regionId'            => 'RegionId',
        'logId'               => 'LogId',
        'slsRegionId'         => 'SlsRegionId',
        'slsProject'          => 'SlsProject',
        'slsLogstore'         => 'SlsLogstore',
        'metricName'          => 'MetricName',
        'metricExpress'       => 'MetricExpress',
        'groupId'             => 'GroupId',
        'valueFilterRelation' => 'ValueFilterRelation',
        'tumblingwindows'     => 'Tumblingwindows',
        'unit'                => 'Unit',
        'aggregates'          => 'Aggregates',
        'groupbys'            => 'Groupbys',
        'valueFilter'         => 'ValueFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }
        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricExpress) {
            $res['MetricExpress'] = $this->metricExpress;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->valueFilterRelation) {
            $res['ValueFilterRelation'] = $this->valueFilterRelation;
        }
        if (null !== $this->tumblingwindows) {
            $res['Tumblingwindows'] = $this->tumblingwindows;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->aggregates) {
            $res['Aggregates'] = [];
            if (null !== $this->aggregates && \is_array($this->aggregates)) {
                $n = 0;
                foreach ($this->aggregates as $item) {
                    $res['Aggregates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupbys) {
            $res['Groupbys'] = [];
            if (null !== $this->groupbys && \is_array($this->groupbys)) {
                $n = 0;
                foreach ($this->groupbys as $item) {
                    $res['Groupbys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->valueFilter) {
            $res['ValueFilter'] = [];
            if (null !== $this->valueFilter && \is_array($this->valueFilter)) {
                $n = 0;
                foreach ($this->valueFilter as $item) {
                    $res['ValueFilter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutLogMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }
        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricExpress'])) {
            $model->metricExpress = $map['MetricExpress'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ValueFilterRelation'])) {
            $model->valueFilterRelation = $map['ValueFilterRelation'];
        }
        if (isset($map['Tumblingwindows'])) {
            $model->tumblingwindows = $map['Tumblingwindows'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Aggregates'])) {
            if (!empty($map['Aggregates'])) {
                $model->aggregates = [];
                $n                 = 0;
                foreach ($map['Aggregates'] as $item) {
                    $model->aggregates[$n++] = null !== $item ? aggregates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Groupbys'])) {
            if (!empty($map['Groupbys'])) {
                $model->groupbys = [];
                $n               = 0;
                foreach ($map['Groupbys'] as $item) {
                    $model->groupbys[$n++] = null !== $item ? groupbys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ValueFilter'])) {
            if (!empty($map['ValueFilter'])) {
                $model->valueFilter = [];
                $n                  = 0;
                foreach ($map['ValueFilter'] as $item) {
                    $model->valueFilter[$n++] = null !== $item ? valueFilter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
