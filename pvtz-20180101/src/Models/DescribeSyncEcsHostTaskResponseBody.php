<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\ecsRegions;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\regions;
use AlibabaCloud\Tea\Model;

class DescribeSyncEcsHostTaskResponseBody extends Model
{
    /**
     * @var ecsRegions
     */
    public $ecsRegions;

    /**
     * @var regions
     */
    public $regions;

    /**
     * @example 75446CC1-FC9A-4595-8D96-089D73D7A63D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ON
     *
     * @var string
     */
    public $status;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example pvtz-test-id-2989149d628c56f00e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'ecsRegions' => 'EcsRegions',
        'regions'    => 'Regions',
        'requestId'  => 'RequestId',
        'status'     => 'Status',
        'success'    => 'Success',
        'zoneId'     => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsRegions) {
            $res['EcsRegions'] = null !== $this->ecsRegions ? $this->ecsRegions->toMap() : null;
        }
        if (null !== $this->regions) {
            $res['Regions'] = null !== $this->regions ? $this->regions->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSyncEcsHostTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsRegions'])) {
            $model->ecsRegions = ecsRegions::fromMap($map['EcsRegions']);
        }
        if (isset($map['Regions'])) {
            $model->regions = regions::fromMap($map['Regions']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
