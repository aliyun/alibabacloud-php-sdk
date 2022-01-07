<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class UpdateVpcEndpointZoneConnectionResourceAttributeRequest extends Model
{
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
    public $endpointId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceAllocateMode;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceReplaceMode;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'endpointId'           => 'EndpointId',
        'regionId'             => 'RegionId',
        'resourceAllocateMode' => 'ResourceAllocateMode',
        'resourceId'           => 'ResourceId',
        'resourceReplaceMode'  => 'ResourceReplaceMode',
        'resourceType'         => 'ResourceType',
        'serviceId'            => 'ServiceId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceAllocateMode) {
            $res['ResourceAllocateMode'] = $this->resourceAllocateMode;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceReplaceMode) {
            $res['ResourceReplaceMode'] = $this->resourceReplaceMode;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVpcEndpointZoneConnectionResourceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceAllocateMode'])) {
            $model->resourceAllocateMode = $map['ResourceAllocateMode'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceReplaceMode'])) {
            $model->resourceReplaceMode = $map['ResourceReplaceMode'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
