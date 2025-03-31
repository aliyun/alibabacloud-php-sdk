<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeEdgeContainerAppStatsResponseBody;

use AlibabaCloud\Dara\Model;

class points extends Model
{
    /**
     * @var float
     */
    public $containerCpuUsageSecondsQuotaRate;

    /**
     * @var float
     */
    public $containerCpuUsageSecondsTotal;

    /**
     * @var float
     */
    public $containerFsReadsBytesAvg;

    /**
     * @var float
     */
    public $containerFsWritesBytesAvg;

    /**
     * @var float
     */
    public $containerMemoryRss;

    /**
     * @var float
     */
    public $containerMemoryRssQuotaRate;

    /**
     * @var float
     */
    public $podReadyRate;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
