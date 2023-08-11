<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class ListTagKeysRequest extends Model
{
    /**
     * @description The ID of the resource group.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the resource. Valid value: **INSTANCE**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The page number of the returned page.
     *
     * @example test
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to **50**. Default value: **10**.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceType'    => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagKeysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
