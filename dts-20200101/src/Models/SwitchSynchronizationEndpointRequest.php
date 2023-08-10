<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\SwitchSynchronizationEndpointRequest\endpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\SwitchSynchronizationEndpointRequest\sourceEndpoint;
use AlibabaCloud\Tea\Model;

class SwitchSynchronizationEndpointRequest extends Model
{
    /**
     * @var endpoint
     */
    public $endpoint;

    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter will be removed in the future.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $ownerId;

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
     * >  Default value: **Forward**.
     *
     * The value **Reverse** takes effect only if the topology of the data synchronization instance is two-way synchronization.
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @description The ID of the data synchronization instance. You can call the DescribeSynchronizationJobs operation to query the instance ID.
     *
     * @example dtsexjk1alb116****
     *
     * @var string
     */
    public $synchronizationJobId;
    protected $_name = [
        'endpoint'                 => 'Endpoint',
        'sourceEndpoint'           => 'SourceEndpoint',
        'accountId'                => 'AccountId',
        'ownerId'                  => 'OwnerId',
        'regionId'                 => 'RegionId',
        'synchronizationDirection' => 'SynchronizationDirection',
        'synchronizationJobId'     => 'SynchronizationJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = null !== $this->endpoint ? $this->endpoint->toMap() : null;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchSynchronizationEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoint'])) {
            $model->endpoint = endpoint::fromMap($map['Endpoint']);
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }

        return $model;
    }
}
