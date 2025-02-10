<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Dara\Model;

class UpdateVpcEndpointServiceResourceAttributeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoAllocatedEnabled;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoAllocatedEnabled' => 'AutoAllocatedEnabled',
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'regionId'             => 'RegionId',
        'resourceId'           => 'ResourceId',
        'serviceId'            => 'ServiceId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoAllocatedEnabled) {
            $res['AutoAllocatedEnabled'] = $this->autoAllocatedEnabled;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
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
        if (isset($map['AutoAllocatedEnabled'])) {
            $model->autoAllocatedEnabled = $map['AutoAllocatedEnabled'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
