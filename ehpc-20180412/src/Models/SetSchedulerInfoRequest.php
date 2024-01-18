<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\scheduler;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\slurmInfo;
use AlibabaCloud\Tea\Model;

class SetSchedulerInfoRequest extends Model
{
    /**
     * @description The ID of the E-HPC cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The information about PBS schedulers.
     *
     * @var pbsInfo[]
     */
    public $pbsInfo;

    /**
     * @description The region ID.
     *
     * You can call the [ListRegions](~~188593~~) operation to obtain the IDs of regions supported by Elastic High Performance Computing (E-HPC).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The scheduler information.
     *
     * @var scheduler[]
     */
    public $scheduler;

    /**
     * @description The information about Slurm schedulers.
     *
     * @var slurmInfo[]
     */
    public $slurmInfo;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'pbsInfo'   => 'PbsInfo',
        'regionId'  => 'RegionId',
        'scheduler' => 'Scheduler',
        'slurmInfo' => 'SlurmInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->pbsInfo) {
            $res['PbsInfo'] = [];
            if (null !== $this->pbsInfo && \is_array($this->pbsInfo)) {
                $n = 0;
                foreach ($this->pbsInfo as $item) {
                    $res['PbsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = [];
            if (null !== $this->scheduler && \is_array($this->scheduler)) {
                $n = 0;
                foreach ($this->scheduler as $item) {
                    $res['Scheduler'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->slurmInfo) {
            $res['SlurmInfo'] = [];
            if (null !== $this->slurmInfo && \is_array($this->slurmInfo)) {
                $n = 0;
                foreach ($this->slurmInfo as $item) {
                    $res['SlurmInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSchedulerInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PbsInfo'])) {
            if (!empty($map['PbsInfo'])) {
                $model->pbsInfo = [];
                $n              = 0;
                foreach ($map['PbsInfo'] as $item) {
                    $model->pbsInfo[$n++] = null !== $item ? pbsInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Scheduler'])) {
            if (!empty($map['Scheduler'])) {
                $model->scheduler = [];
                $n                = 0;
                foreach ($map['Scheduler'] as $item) {
                    $model->scheduler[$n++] = null !== $item ? scheduler::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SlurmInfo'])) {
            if (!empty($map['SlurmInfo'])) {
                $model->slurmInfo = [];
                $n                = 0;
                foreach ($map['SlurmInfo'] as $item) {
                    $model->slurmInfo[$n++] = null !== $item ? slurmInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
