<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedInstanceMetricResponseBody\metrics;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedInstanceMetricResponseBody\metrics\metrics\risks;
use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var float
     */
    public $maxMemUsage;

    /**
     * @var string
     */
    public $dedicatedInstanceId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var float
     */
    public $diskUsage;

    /**
     * @var float
     */
    public $avgMemUsage;

    /**
     * @var int
     */
    public $maxIOPS;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var float
     */
    public $avgCpuUsage;

    /**
     * @var int
     */
    public $avgIOPS;

    /**
     * @var string
     */
    public $role;

    /**
     * @var float
     */
    public $maxCpuUsage;

    /**
     * @var risks
     */
    public $risks;
    protected $_name = [
        'endDate'             => 'EndDate',
        'maxMemUsage'         => 'MaxMemUsage',
        'dedicatedInstanceId' => 'DedicatedInstanceId',
        'startDate'           => 'StartDate',
        'diskUsage'           => 'DiskUsage',
        'avgMemUsage'         => 'AvgMemUsage',
        'maxIOPS'             => 'MaxIOPS',
        'memory'              => 'Memory',
        'avgCpuUsage'         => 'AvgCpuUsage',
        'avgIOPS'             => 'AvgIOPS',
        'role'                => 'Role',
        'maxCpuUsage'         => 'MaxCpuUsage',
        'risks'               => 'Risks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->maxMemUsage) {
            $res['MaxMemUsage'] = $this->maxMemUsage;
        }
        if (null !== $this->dedicatedInstanceId) {
            $res['DedicatedInstanceId'] = $this->dedicatedInstanceId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->diskUsage) {
            $res['DiskUsage'] = $this->diskUsage;
        }
        if (null !== $this->avgMemUsage) {
            $res['AvgMemUsage'] = $this->avgMemUsage;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->avgCpuUsage) {
            $res['AvgCpuUsage'] = $this->avgCpuUsage;
        }
        if (null !== $this->avgIOPS) {
            $res['AvgIOPS'] = $this->avgIOPS;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['MaxMemUsage'])) {
            $model->maxMemUsage = $map['MaxMemUsage'];
        }
        if (isset($map['DedicatedInstanceId'])) {
            $model->dedicatedInstanceId = $map['DedicatedInstanceId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['DiskUsage'])) {
            $model->diskUsage = $map['DiskUsage'];
        }
        if (isset($map['AvgMemUsage'])) {
            $model->avgMemUsage = $map['AvgMemUsage'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['AvgCpuUsage'])) {
            $model->avgCpuUsage = $map['AvgCpuUsage'];
        }
        if (isset($map['AvgIOPS'])) {
            $model->avgIOPS = $map['AvgIOPS'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
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
