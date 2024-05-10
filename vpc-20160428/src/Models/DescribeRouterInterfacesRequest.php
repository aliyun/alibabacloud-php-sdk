<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesRequest\filter;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesRequest\tags;
use AlibabaCloud\Tea\Model;

class DescribeRouterInterfacesRequest extends Model
{
    /**
     * @description The filter information.
     *
     * @var filter[]
     */
    public $filter;

    /**
     * @description Specifies whether renewal data is included. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $includeReservationData;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the router interface.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource Group ID.
     *
     * For more information about resource groups, please refer to [What is a Resource Group?](https://help.aliyun.com/document_detail/94475.html)
     * @example rg-acfmxazb4ph6aiy****
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
     * @description The tags of the resource.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'filter'                 => 'Filter',
        'includeReservationData' => 'IncludeReservationData',
        'ownerId'                => 'OwnerId',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'tags'                   => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->includeReservationData) {
            $res['IncludeReservationData'] = $this->includeReservationData;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouterInterfacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IncludeReservationData'])) {
            $model->includeReservationData = $map['IncludeReservationData'];
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
