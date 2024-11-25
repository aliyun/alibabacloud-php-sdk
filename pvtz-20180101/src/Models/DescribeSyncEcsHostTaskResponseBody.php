<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\ecsRegions;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\regions;
use AlibabaCloud\Tea\Model;

class DescribeSyncEcsHostTaskResponseBody extends Model
{
    /**
     * @description The synchronized regions where the ECS instances are deployed.
     *
     * @var ecsRegions
     */
    public $ecsRegions;

    /**
     * @description The synchronized region IDs of the ECS instances.
     *
     * @var regions
     */
    public $regions;

    /**
     * @description The request ID.
     *
     * @example 75446CC1-FC9A-4595-8D96-089D73D7A63D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether hostname automatic synchronization is enabled. Valid values:
     *
     *   ON: Hostname automatic synchronization is enabled. After this feature is enabled, the system automatically reads the hostnames of the Elastic Compute Service (ECS) instances in the specified regions and updates Domain Name System (DNS) records at an interval of 1 minute.
     *   OFF: Hostname automatic synchronization is disabled.
     *
     * @example ON
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the task was successful. Valid values:
     *
     *   True
     *   False
     *
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @description The zone ID. This ID uniquely identifies the zone.
     *
     * @example pvtz-test-id-2989149d628c56****
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
