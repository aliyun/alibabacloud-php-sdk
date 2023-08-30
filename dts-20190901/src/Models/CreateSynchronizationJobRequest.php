<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20190901\Models;

use AlibabaCloud\SDK\Dts\V20190901\Models\CreateSynchronizationJobRequest\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20190901\Models\CreateSynchronizationJobRequest\sourceEndpoint;
use AlibabaCloud\Tea\Model;

class CreateSynchronizationJobRequest extends Model
{
    /**
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $destRegion;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $synchronizationJobClass;

    /**
     * @var string
     */
    public $topology;

    /**
     * @var int
     */
    public $usedTime;

    /**
     * @var string
     */
    public $networkType;
    protected $_name = [
        'destinationEndpoint'     => 'DestinationEndpoint',
        'sourceEndpoint'          => 'SourceEndpoint',
        'clientToken'             => 'ClientToken',
        'destRegion'              => 'DestRegion',
        'ownerId'                 => 'OwnerId',
        'payType'                 => 'PayType',
        'period'                  => 'Period',
        'sourceRegion'            => 'SourceRegion',
        'synchronizationJobClass' => 'SynchronizationJobClass',
        'topology'                => 'Topology',
        'usedTime'                => 'UsedTime',
        'networkType'             => 'networkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toMap() : null;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->synchronizationJobClass) {
            $res['SynchronizationJobClass'] = $this->synchronizationJobClass;
        }
        if (null !== $this->topology) {
            $res['Topology'] = $this->topology;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSynchronizationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['SynchronizationJobClass'])) {
            $model->synchronizationJobClass = $map['SynchronizationJobClass'];
        }
        if (isset($map['Topology'])) {
            $model->topology = $map['Topology'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }

        return $model;
    }
}
