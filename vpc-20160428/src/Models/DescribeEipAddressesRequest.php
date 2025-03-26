<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesRequest\filter;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesRequest\tag;

class DescribeEipAddressesRequest extends Model
{
    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $associatedInstanceId;

    /**
     * @var string
     */
    public $associatedInstanceType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $eipAddress;

    /**
     * @var string
     */
    public $eipName;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var bool
     */
    public $includeReservationData;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

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
    public $publicIpAddressPoolId;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var bool
     */
    public $securityProtectionEnabled;

    /**
     * @var string
     */
    public $segmentInstanceId;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'filter' => 'Filter',
        'allocationId' => 'AllocationId',
        'associatedInstanceId' => 'AssociatedInstanceId',
        'associatedInstanceType' => 'AssociatedInstanceType',
        'chargeType' => 'ChargeType',
        'dryRun' => 'DryRun',
        'eipAddress' => 'EipAddress',
        'eipName' => 'EipName',
        'ISP' => 'ISP',
        'includeReservationData' => 'IncludeReservationData',
        'lockReason' => 'LockReason',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'publicIpAddressPoolId' => 'PublicIpAddressPoolId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityProtectionEnabled' => 'SecurityProtectionEnabled',
        'segmentInstanceId' => 'SegmentInstanceId',
        'serviceManaged' => 'ServiceManaged',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            if (\is_array($this->filter)) {
                $res['Filter'] = [];
                $n1 = 0;
                foreach ($this->filter as $item1) {
                    $res['Filter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }

        if (null !== $this->associatedInstanceId) {
            $res['AssociatedInstanceId'] = $this->associatedInstanceId;
        }

        if (null !== $this->associatedInstanceType) {
            $res['AssociatedInstanceType'] = $this->associatedInstanceType;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->eipAddress) {
            $res['EipAddress'] = $this->eipAddress;
        }

        if (null !== $this->eipName) {
            $res['EipName'] = $this->eipName;
        }

        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }

        if (null !== $this->includeReservationData) {
            $res['IncludeReservationData'] = $this->includeReservationData;
        }

        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
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

        if (null !== $this->publicIpAddressPoolId) {
            $res['PublicIpAddressPoolId'] = $this->publicIpAddressPoolId;
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

        if (null !== $this->securityProtectionEnabled) {
            $res['SecurityProtectionEnabled'] = $this->securityProtectionEnabled;
        }

        if (null !== $this->segmentInstanceId) {
            $res['SegmentInstanceId'] = $this->segmentInstanceId;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n1 = 0;
                foreach ($map['Filter'] as $item1) {
                    $model->filter[$n1++] = filter::fromMap($item1);
                }
            }
        }

        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }

        if (isset($map['AssociatedInstanceId'])) {
            $model->associatedInstanceId = $map['AssociatedInstanceId'];
        }

        if (isset($map['AssociatedInstanceType'])) {
            $model->associatedInstanceType = $map['AssociatedInstanceType'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EipAddress'])) {
            $model->eipAddress = $map['EipAddress'];
        }

        if (isset($map['EipName'])) {
            $model->eipName = $map['EipName'];
        }

        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }

        if (isset($map['IncludeReservationData'])) {
            $model->includeReservationData = $map['IncludeReservationData'];
        }

        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
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

        if (isset($map['PublicIpAddressPoolId'])) {
            $model->publicIpAddressPoolId = $map['PublicIpAddressPoolId'];
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

        if (isset($map['SecurityProtectionEnabled'])) {
            $model->securityProtectionEnabled = $map['SecurityProtectionEnabled'];
        }

        if (isset($map['SegmentInstanceId'])) {
            $model->segmentInstanceId = $map['SegmentInstanceId'];
        }

        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
