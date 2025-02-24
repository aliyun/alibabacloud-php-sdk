<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class ListVccRouteEntriesRequest extends Model
{
    /**
     * @var string
     */
    public $destinationCidrBlock;
    /**
     * @var bool
     */
    public $enablePage;
    /**
     * @var bool
     */
    public $ignoreDetailedRouteEntry;
    /**
     * @var string
     */
    public $nextHopId;
    /**
     * @var string
     */
    public $nextHopType;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
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
    public $routeType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $vccId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
