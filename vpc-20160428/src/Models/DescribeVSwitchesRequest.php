<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeVSwitchesRequest extends Model
{
    /**
     * @description The ID of the resource group to which the vSwitch belongs.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the request.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether to query the default vSwitch in the specified region. Valid values:
     *
     *   **true**: queries the default vSwitch in the specified region.
     *   **false**: does not query the default vSwitch in the specified region.
     *
     * If you do not specify this parameter, the system queries all vSwitches in the specified region by default.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The number of entries to return on each page. Maximum value: **50**. Default value: **10**.
     *
     * @example vtb-bp145q7glnuzdvzu2****
     *
     * @var string
     */
    public $routeTableId;

    /**
     * @description The name of the vSwitch.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example vsw-23dscddcffvf3****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the route table.
     *
     * @example vSwitch
     *
     * @var string
     */
    public $vSwitchName;

    /**
     * @description The page number of the returned page.
     *
     * @example 2546073170691****
     *
     * @var int
     */
    public $vSwitchOwnerId;

    /**
     * @description The region ID of the vSwitch. You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     *
     * >  You must set at least one of the **RegionId** and **VpcId** parameters.
     * @example vpc-25cdvfeq58pl****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Specifies whether to check the request without performing the operation. Valid values:
     *
     *   **true**: checks the request without performing the operation. The system checks the required parameters, request syntax, and limits. If the request fails check, an error message is returned. If the request passes the check, the `DryRunOperation` error code is returned.
     *   **false**: sends the request. If the request passes the precheck, an HTTP 2xx status code is returned and the operation is performed. This is the default value.
     *
     * @example cn-hangzhou-d
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dryRun'               => 'DryRun',
        'isDefault'            => 'IsDefault',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeTableId'         => 'RouteTableId',
        'vSwitchId'            => 'VSwitchId',
        'vSwitchName'          => 'VSwitchName',
        'vSwitchOwnerId'       => 'VSwitchOwnerId',
        'vpcId'                => 'VpcId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }
        if (null !== $this->vSwitchOwnerId) {
            $res['VSwitchOwnerId'] = $this->vSwitchOwnerId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVSwitchesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }
        if (isset($map['VSwitchOwnerId'])) {
            $model->vSwitchOwnerId = $map['VSwitchOwnerId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
