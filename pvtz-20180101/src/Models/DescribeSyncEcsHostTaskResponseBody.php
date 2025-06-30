<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\ecsRegions;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\regions;

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
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'ecsRegions' => 'EcsRegions',
        'regions' => 'Regions',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'success' => 'Success',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->ecsRegions) {
            $this->ecsRegions->validate();
        }
        if (null !== $this->regions) {
            $this->regions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsRegions) {
            $res['EcsRegions'] = null !== $this->ecsRegions ? $this->ecsRegions->toArray($noStream) : $this->ecsRegions;
        }

        if (null !== $this->regions) {
            $res['Regions'] = null !== $this->regions ? $this->regions->toArray($noStream) : $this->regions;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
