<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDemandsRequest extends Model
{
    /**
     * @description The ID of the filing ticket. If this parameter is specified, other optional request parameters are ignored.
     *
     * @example ed-bp11n21kq00sl71p****
     *
     * @var string
     */
    public $demandId;

    /**
     * @description The status of the filing ticket or resource usage. Valid values:
     *
     *   Creating: The filing ticket is being created.
     *   Active: The filed resources are being supplied.
     *   Expired: The filing ticket expires.
     *   Finished: The filed resources are consumed.
     *   Refused: The filing request is denied. For reasons why the request is denied, see the `Comment` response parameter.
     *   Cancelled: The filing request is canceled.
     *
     * @example Active
     *
     * @var string[]
     */
    public $demandStatus;

    /**
     * @description The source of the filed instance. Default value: System. Valid values:
     *
     *   Custom: filed on your own.
     *   System: filed by Alibaba Cloud.
     *
     * @example Custom
     *
     * @var string
     */
    public $demandType;

    /**
     * @description Specifies whether to check the validity of the request without actually making the request. Default value: false. Valid values:
     *
     *   true: sends a check request, without querying the status of the filing ticket. The system checks whether your AccessKey pair is valid, whether RAM users are authorized, and whether the required parameters are set. If the check fails, the corresponding error is returned. If the check succeeds, the DryRunOperation error code is returned.
     *   false: sends an API request. If the request succeeds, a 2XX HTTP status code is returned and the status of the filing ticket is queried.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance type of the filed instance.
     *
     * @example ecs.g6.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The instance family of the filed instance.
     *
     * @example ecs.g6
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Pages start from page 1.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 100.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The zone ID. You can call the [DescribeZones](~~25610~~) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'demandId'             => 'DemandId',
        'demandStatus'         => 'DemandStatus',
        'demandType'           => 'DemandType',
        'dryRun'               => 'DryRun',
        'instanceChargeType'   => 'InstanceChargeType',
        'instanceType'         => 'InstanceType',
        'instanceTypeFamily'   => 'InstanceTypeFamily',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tag'                  => 'Tag',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demandId) {
            $res['DemandId'] = $this->demandId;
        }
        if (null !== $this->demandStatus) {
            $res['DemandStatus'] = $this->demandStatus;
        }
        if (null !== $this->demandType) {
            $res['DemandType'] = $this->demandType;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDemandsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DemandId'])) {
            $model->demandId = $map['DemandId'];
        }
        if (isset($map['DemandStatus'])) {
            if (!empty($map['DemandStatus'])) {
                $model->demandStatus = $map['DemandStatus'];
            }
        }
        if (isset($map['DemandType'])) {
            $model->demandType = $map['DemandType'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
