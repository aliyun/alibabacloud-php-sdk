<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersRequest\featureFilter;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersRequest\tag;
use AlibabaCloud\Tea\Model;

class ListTransitRoutersRequest extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-j3jzhw1zpau2km****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The field that is used to enable or disable a feature of the transit router.
     *
     * @var featureFilter[]
     */
    public $featureFilter;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region where the transit router is deployed.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example ap-southeast-2
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
     * @description The status of the transit router. Valid values:
     *
     *   **Creating**: The transit router is being created.
     *   **Active**: The transit router is available.
     *   **Modifying**: The transit router is being modified
     *   **Deleting**: The transit router is being deleted.
     *   **Upgrading**: The transit router is being upgraded.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The information about the tags.
     *
     * You can specify at most 20 tags in each call.
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the transit router.
     *
     * @example tr-uf654ttymmljlvh2x****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The name of the Enterprise Edition transit router.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
     * @example testname
     *
     * @var string
     */
    public $transitRouterName;

    /**
     * @description The edition of the transit router. Valid values:
     *
     *   **Enterprise**: Enhance Edition
     *   **Basic**: Basic Edition
     *
     * @example Enterprise
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cenId'                => 'CenId',
        'featureFilter'        => 'FeatureFilter',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'status'               => 'Status',
        'tag'                  => 'Tag',
        'transitRouterId'      => 'TransitRouterId',
        'transitRouterName'    => 'TransitRouterName',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->featureFilter) {
            $res['FeatureFilter'] = [];
            if (null !== $this->featureFilter && \is_array($this->featureFilter)) {
                $n = 0;
                foreach ($this->featureFilter as $item) {
                    $res['FeatureFilter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterName) {
            $res['TransitRouterName'] = $this->transitRouterName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRoutersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['FeatureFilter'])) {
            if (!empty($map['FeatureFilter'])) {
                $model->featureFilter = [];
                $n                    = 0;
                foreach ($map['FeatureFilter'] as $item) {
                    $model->featureFilter[$n++] = null !== $item ? featureFilter::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterName'])) {
            $model->transitRouterName = $map['TransitRouterName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
