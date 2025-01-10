<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetErResponseBody\content;

use AlibabaCloud\Tea\Model;

class erRouteEntrys extends Model
{
    /**
     * @description Destination CIDR Block
     *
     * @example 10.0.0.0/9
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description Lingjun HUB Instance ID
     *
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description The ID of the route entry.
     *
     * @example er-rte-xnmsd2kl
     *
     * @var string
     */
    public $erRouteEntryId;

    /**
     * @description The time when the cluster was updated.
     *
     * @example 1623317089000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Next Hop Instance
     *
     * @example vcc-xxkmggkw
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description Next Hop Instance Type
     *
     * @example VCC
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group instance ID
     *
     * @example rg-acfmyoj5mg3w54y
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the tenant to which the resource belongs.
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $resourceTenantId;

    /**
     * @description Route type
     *
     * @example System
     *
     * @var string
     */
    public $routeType;

    /**
     * @description The status of the intervention entry. Valid value:
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example 1620939556166277
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'erId'                 => 'ErId',
        'erRouteEntryId'       => 'ErRouteEntryId',
        'gmtModified'          => 'GmtModified',
        'nextHopId'            => 'NextHopId',
        'nextHopType'          => 'NextHopType',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceTenantId'     => 'ResourceTenantId',
        'routeType'            => 'RouteType',
        'status'               => 'Status',
        'tenantId'             => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->erRouteEntryId) {
            $res['ErRouteEntryId'] = $this->erRouteEntryId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return erRouteEntrys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['ErRouteEntryId'])) {
            $model->erRouteEntryId = $map['ErRouteEntryId'];
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

        return $model;
    }
}
