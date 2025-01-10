<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccRouteEntryResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Destination CIDR Block
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The time when the agent was last modified.
     *
     * @example 1648085472000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The message that is returned.
     *
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description Next Hop Instance
     *
     * @example local
     *
     * @var string
     */
    public $nextHopId;

    /**
     * @description Next Hop Type
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
     * @example rg-aek2l4sq6l7u***
     *
     * @var string
     */
    public $resourceGroupId;

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
     * @example 1655449505171
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The ID of the Lingjun connection instance.
     *
     * @example vcc-cn-zvp2w222001
     *
     * @var string
     */
    public $vccId;

    /**
     * @description The ID of the route entry.
     *
     * @example vcc-rte-31ocvdhq
     *
     * @var string
     */
    public $vccRouteEntryId;
    protected $_name = [
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'gmtModified'          => 'GmtModified',
        'message'              => 'Message',
        'nextHopId'            => 'NextHopId',
        'nextHopType'          => 'NextHopType',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'routeType'            => 'RouteType',
        'status'               => 'Status',
        'tenantId'             => 'TenantId',
        'vccId'                => 'VccId',
        'vccRouteEntryId'      => 'VccRouteEntryId',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }
        if (null !== $this->vccRouteEntryId) {
            $res['VccRouteEntryId'] = $this->vccRouteEntryId;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }
        if (isset($map['VccRouteEntryId'])) {
            $model->vccRouteEntryId = $map['VccRouteEntryId'];
        }

        return $model;
    }
}
