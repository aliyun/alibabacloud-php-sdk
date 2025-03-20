<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeEdgeContainerAppStatsResponseBody;

use AlibabaCloud\Tea\Model;

class points extends Model
{
    /**
     * @example 0.1
     *
     * @var float
     */
    public $containerCpuUsageSecondsQuotaRate;

    /**
     * @example 2
     *
     * @var float
     */
    public $containerCpuUsageSecondsTotal;

    /**
     * @example 0
     *
     * @var float
     */
    public $containerFsReadsBytesAvg;

    /**
     * @example 0
     *
     * @var float
     */
    public $containerFsWritesBytesAvg;

    /**
     * @example 0.1
     *
     * @var float
     */
    public $containerMemoryRss;

    /**
     * @example 1
     *
     * @var float
     */
    public $containerMemoryRssQuotaRate;

    /**
     * @example 100
     *
     * @var float
     */
    public $podReadyRate;

    /**
     * @example 2024-01-18T15:04:05Z
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'containerCpuUsageSecondsQuotaRate' => 'ContainerCpuUsageSecondsQuotaRate',
        'containerCpuUsageSecondsTotal' => 'ContainerCpuUsageSecondsTotal',
        'containerFsReadsBytesAvg' => 'ContainerFsReadsBytesAvg',
        'containerFsWritesBytesAvg' => 'ContainerFsWritesBytesAvg',
        'containerMemoryRss' => 'ContainerMemoryRss',
        'containerMemoryRssQuotaRate' => 'ContainerMemoryRssQuotaRate',
        'podReadyRate' => 'PodReadyRate',
        'time' => 'Time',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerCpuUsageSecondsQuotaRate) {
            $res['ContainerCpuUsageSecondsQuotaRate'] = $this->containerCpuUsageSecondsQuotaRate;
        }
        if (null !== $this->containerCpuUsageSecondsTotal) {
            $res['ContainerCpuUsageSecondsTotal'] = $this->containerCpuUsageSecondsTotal;
        }
        if (null !== $this->containerFsReadsBytesAvg) {
            $res['ContainerFsReadsBytesAvg'] = $this->containerFsReadsBytesAvg;
        }
        if (null !== $this->containerFsWritesBytesAvg) {
            $res['ContainerFsWritesBytesAvg'] = $this->containerFsWritesBytesAvg;
        }
        if (null !== $this->containerMemoryRss) {
            $res['ContainerMemoryRss'] = $this->containerMemoryRss;
        }
        if (null !== $this->containerMemoryRssQuotaRate) {
            $res['ContainerMemoryRssQuotaRate'] = $this->containerMemoryRssQuotaRate;
        }
        if (null !== $this->podReadyRate) {
            $res['PodReadyRate'] = $this->podReadyRate;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return points
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerCpuUsageSecondsQuotaRate'])) {
            $model->containerCpuUsageSecondsQuotaRate = $map['ContainerCpuUsageSecondsQuotaRate'];
        }
        if (isset($map['ContainerCpuUsageSecondsTotal'])) {
            $model->containerCpuUsageSecondsTotal = $map['ContainerCpuUsageSecondsTotal'];
        }
        if (isset($map['ContainerFsReadsBytesAvg'])) {
            $model->containerFsReadsBytesAvg = $map['ContainerFsReadsBytesAvg'];
        }
        if (isset($map['ContainerFsWritesBytesAvg'])) {
            $model->containerFsWritesBytesAvg = $map['ContainerFsWritesBytesAvg'];
        }
        if (isset($map['ContainerMemoryRss'])) {
            $model->containerMemoryRss = $map['ContainerMemoryRss'];
        }
        if (isset($map['ContainerMemoryRssQuotaRate'])) {
            $model->containerMemoryRssQuotaRate = $map['ContainerMemoryRssQuotaRate'];
        }
        if (isset($map['PodReadyRate'])) {
            $model->podReadyRate = $map['PodReadyRate'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
