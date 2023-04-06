<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthPackagesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListBandwidthPackagesRequest extends Model
{
    /**
     * @description The ID of the bandwidth plan.
     *
     * @example gbwp-bp1sgzldyj6b4q7cx****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **100**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2ry6mp2c****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the bandwidth plan. Valid values:
     *
     *   **init**: The bandwidth plan is being initialized.
     *   **active**: The bandwidth plan is available.
     *   **binded**: The bandwidth plan is associated.
     *   **binding**: The bandwidth plan is being associated.
     *   **unbinding**: The bandwidth plan is being disassociated.
     *   **updating**: The bandwidth plan is being updated.
     *   **finacialLocked**: The bandwidth plan is locked due to overdue payments.
     *   **locked**: The bandwidth plan is locked.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The tag of the bandwidth plan.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The type of the bandwidth plan. Valid values:
     *
     *   **Basic**: a basic bandwidth plan
     *   **CrossDomain**: a cross-border acceleration bandwidth plan
     *
     * If you call this operation on the China site (aliyun.com), you can set Type only to **Basic**.
     * @example Basic
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'state'              => 'State',
        'tag'                => 'Tag',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBandwidthPackagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
