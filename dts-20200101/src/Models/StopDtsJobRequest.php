<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class StopDtsJobRequest extends Model
{
    /**
     * @description The ID of the data migration, data synchronization, or change tracking instance.
     *
     * @example dtsl3m1213ye7l****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example l3m1213ye7l****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**
     *   **Reverse**
     *
     * >
     *   Default value: **Forward**.
     *   You can set this parameter to **Reverse** to stop the reverse synchronization task only when the topology is two-way synchronization.
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;
    protected $_name = [
        'dtsInstanceId'            => 'DtsInstanceId',
        'dtsJobId'                 => 'DtsJobId',
        'regionId'                 => 'RegionId',
        'synchronizationDirection' => 'SynchronizationDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopDtsJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        return $model;
    }
}
