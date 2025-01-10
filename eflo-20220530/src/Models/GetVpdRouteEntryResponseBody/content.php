<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdRouteEntryResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Destination CIDR block
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The time when the agent was last modified.
     *
     * @example 1678273219000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Next Hop Instance
     *
     * @example er-bmlqiym1
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description Next Hop Instance Type
     *
     * @example ER
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
     * @example rg-acfmv7mcq63uyhq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Route type
     *
     * @example BGP
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
     * @example 1655449505171
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description Lingjun CIDR block instance ID
     *
     * @example vpd-ze3na0wf
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description Lingjun CIDR block route entry ID
     *
     * @example vpd-rte-toekyqel
     *
     * @var string
     */
    public $vpdRouteEntryId;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'gmtModified'          => 'GmtModified',
        'nextHopId'            => 'NextHopId',
        'nextHopType'          => 'NextHopType',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'routeType'            => 'RouteType',
        'status'               => 'Status',
        'tenantId'             => 'TenantId',
        'vpdId'                => 'VpdId',
        'vpdRouteEntryId'      => 'VpdRouteEntryId',
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

    /**
     * @param array $map
     *
     * @return content
     */
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
