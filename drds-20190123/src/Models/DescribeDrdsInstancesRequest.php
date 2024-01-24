<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDrdsInstancesRequest extends Model
{
    /**
     * @description The description of the instances.
     *
     * @example drds_test
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether the instances that you want to query expire.
     *
     * @example false
     *
     * @var bool
     */
    public $expired;

    /**
     * @description Specifies whether hybrid queries are supported.
     *
     * @example FALSE
     *
     * @var bool
     */
    public $mix;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of instances returned on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The version of the service.
     *
     * @example V1
     *
     * @var string
     */
    public $productVersion;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instances you want to query belong. The value of this parameter can be NULL.
     *
     * @example NULL
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The type of the instances that you want to query. Valid values:
     *
     *   **0**: shared instances
     *   **1**: dedicated instances
     *
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description'     => 'Description',
        'expired'         => 'Expired',
        'mix'             => 'Mix',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'productVersion'  => 'ProductVersion',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tag'             => 'Tag',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->mix) {
            $res['Mix'] = $this->mix;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return DescribeDrdsInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Mix'])) {
            $model->mix = $map['Mix'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
