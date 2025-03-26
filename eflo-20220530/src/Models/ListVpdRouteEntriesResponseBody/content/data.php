<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdRouteEntriesResponseBody\content;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $nextHopId;

    /**
     * @var string
     */
    public $nextHopType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceTenantId;

    /**
     * @var string
     */
    public $routeType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $vpdId;

    /**
     * @var string
     */
    public $vpdRouteEntryId;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'gmtModified' => 'GmtModified',
        'nextHopId' => 'NextHopId',
        'nextHopType' => 'NextHopType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceTenantId' => 'ResourceTenantId',
        'routeType' => 'RouteType',
        'status' => 'Status',
        'tenantId' => 'TenantId',
        'vpdId' => 'VpdId',
        'vpdRouteEntryId' => 'VpdRouteEntryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }

        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceTenantId) {
            $res['ResourceTenantId'] = $this->resourceTenantId;
        }

        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        if (null !== $this->vpdRouteEntryId) {
            $res['VpdRouteEntryId'] = $this->vpdRouteEntryId;
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
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }

        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceTenantId'])) {
            $model->resourceTenantId = $map['ResourceTenantId'];
        }

        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        if (isset($map['VpdRouteEntryId'])) {
            $model->vpdRouteEntryId = $map['VpdRouteEntryId'];
        }

        return $model;
    }
}
