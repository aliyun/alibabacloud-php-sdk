<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostMetricResponseBody\metrics;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostMetricResponseBody\metrics\metrics\risks;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var float
     */
    public $avgMemUsage;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $avgIops;

    /**
     * @var float
     */
    public $maxMemUsage;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var int
     */
    public $maxIops;

    /**
     * @var float
     */
    public $avgCpuUsage;

    /**
     * @var float
     */
    public $diskUsage;

    /**
     * @var float
     */
    public $maxCpuUsage;

    /**
     * @var risks
     */
    public $risks;
    protected $_name = [
        'avgMemUsage'     => 'AvgMemUsage',
        'endDate'         => 'EndDate',
        'avgIops'         => 'AvgIops',
        'maxMemUsage'     => 'MaxMemUsage',
        'startDate'       => 'StartDate',
        'dedicatedHostId' => 'DedicatedHostId',
        'maxIops'         => 'MaxIops',
        'avgCpuUsage'     => 'AvgCpuUsage',
        'diskUsage'       => 'DiskUsage',
        'maxCpuUsage'     => 'MaxCpuUsage',
        'risks'           => 'Risks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgMemUsage) {
            $res['AvgMemUsage'] = $this->avgMemUsage;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->avgIops) {
            $res['AvgIops'] = $this->avgIops;
        }
        if (null !== $this->maxMemUsage) {
            $res['MaxMemUsage'] = $this->maxMemUsage;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->maxIops) {
            $res['MaxIops'] = $this->maxIops;
        }
        if (null !== $this->avgCpuUsage) {
            $res['AvgCpuUsage'] = $this->avgCpuUsage;
        }
        if (null !== $this->diskUsage) {
            $res['DiskUsage'] = $this->diskUsage;
        }
        if (null !== $this->maxCpuUsage) {
            $res['MaxCpuUsage'] = $this->maxCpuUsage;
        }
        if (null !== $this->risks) {
            $res['Risks'] = null !== $this->risks ? $this->risks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgMemUsage'])) {
            $model->avgMemUsage = $map['AvgMemUsage'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['AvgIops'])) {
            $model->avgIops = $map['AvgIops'];
        }
        if (isset($map['MaxMemUsage'])) {
            $model->maxMemUsage = $map['MaxMemUsage'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['MaxIops'])) {
            $model->maxIops = $map['MaxIops'];
        }
        if (isset($map['AvgCpuUsage'])) {
            $model->avgCpuUsage = $map['AvgCpuUsage'];
        }
        if (isset($map['DiskUsage'])) {
            $model->diskUsage = $map['DiskUsage'];
        }
        if (isset($map['MaxCpuUsage'])) {
            $model->maxCpuUsage = $map['MaxCpuUsage'];
        }
        if (isset($map['Risks'])) {
            $model->risks = risks::fromMap($map['Risks']);
        }

        return $model;
    }
}
