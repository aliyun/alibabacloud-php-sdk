<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetSchedulerInfoRequest\scheduler;
use AlibabaCloud\Tea\Model;

class GetSchedulerInfoRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The detailed settings of the scheduler.
     *
     * @var scheduler[]
     */
    public $scheduler;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'regionId'  => 'RegionId',
        'scheduler' => 'Scheduler',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSchedulerInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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

        return $model;
    }
}
