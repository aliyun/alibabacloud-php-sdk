<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListVccRouteEntriesRequest extends Model
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
     * @description Specifies whether to enable pagination query.
     *
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @description Filter 32 detailed CIDR blocks. Default value: true
     *
     * @example true
     *
     * @var bool
     */
    public $ignoreDetailedRouteEntry;

    /**
     * @description Next Hop Instance
     *
     * @example vcc-cn-jaj34d75h01
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
     * @description The page number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group instance ID
     *
     * @example rg-aek2l4sq6l7unhi
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
     * @description The status of the enterprise-level snapshot policy.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the Lingjun connection instance.
     *
     * This parameter is required.
     * @example vcc-cn-zvp2w222001
     *
     * @var string
     */
    public $vccId;

    /**
     * @description Lingjun CIDR block route entry instance ID
     *
     * @example vpd-rte-toekyqel
     *
     * @var string
     */
    public $vpdRouteEntryId;
    protected $_name = [
        'destinationCidrBlock'     => 'DestinationCidrBlock',
        'enablePage'               => 'EnablePage',
        'ignoreDetailedRouteEntry' => 'IgnoreDetailedRouteEntry',
        'nextHopId'                => 'NextHopId',
        'nextHopType'              => 'NextHopType',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'routeType'                => 'RouteType',
        'status'                   => 'Status',
        'vccId'                    => 'VccId',
        'vpdRouteEntryId'          => 'VpdRouteEntryId',
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
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }
        if (null !== $this->ignoreDetailedRouteEntry) {
            $res['IgnoreDetailedRouteEntry'] = $this->ignoreDetailedRouteEntry;
        }
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }
        if (null !== $this->vpdRouteEntryId) {
            $res['VpdRouteEntryId'] = $this->vpdRouteEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVccRouteEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['IgnoreDetailedRouteEntry'])) {
            $model->ignoreDetailedRouteEntry = $map['IgnoreDetailedRouteEntry'];
        }
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }
        if (isset($map['VpdRouteEntryId'])) {
            $model->vpdRouteEntryId = $map['VpdRouteEntryId'];
        }

        return $model;
    }
}
