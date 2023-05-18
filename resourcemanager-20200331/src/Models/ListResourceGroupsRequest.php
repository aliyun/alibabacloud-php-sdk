<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourceGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class ListResourceGroupsRequest extends Model
{
    /**
     * @description The display name of the resource group. This parameter specifies a filter condition for the query. Fuzzy match is supported.
     *
     * The display name can be a maximum of 50 characters in length.
     * @example my-project
     *
     * @var string
     */
    public $displayName;

    /**
     * @description Specifies whether to return the information of tags. Valid values:
     *
     *   false (default value)
     *   true
     *
     * >  If you configure the Tag parameter, the system returns the information of tags regardless of the setting of the `IncludeTags` parameter.
     * @example false
     *
     * @var bool
     */
    public $includeTags;

    /**
     * @description The identifier of the resource group. This parameter specifies a filter condition for the query. Fuzzy match is supported.
     *
     * The identifier can be a maximum of 50 characters in length and can contain letters, digits, and hyphens (-).
     * @example my-project
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Valid values: 1 to 100. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group. This parameter specifies a filter condition for the query.
     *
     * >  This parameter is incorporated into the `ResourceGroupIds` parameter. If you configure both the `ResourceGroupId` and `ResourceGroupIds` parameters, the value of the `ResourceGroupIds` parameter prevails.
     * @example rg-9gLOoK****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The IDs of the resource groups. This parameter specifies a filter condition for the query.
     *
     * >  If you configure both the `ResourceGroupId` and `ResourceGroupIds` parameters, the value of the `ResourceGroupIds` parameter prevails.
     * @var string[]
     */
    public $resourceGroupIds;

    /**
     * @description The status of the resource group. This parameter specifies a filter condition for the query. Valid values:
     *
     *   Creating: The resource group is being created.
     *   OK: The resource group is created.
     *   PendingDelete: The resource group is waiting to be deleted.
     *
     * @example OK
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag. This parameter specifies a filter condition for the query.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'displayName'      => 'DisplayName',
        'includeTags'      => 'IncludeTags',
        'name'             => 'Name',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'resourceGroupId'  => 'ResourceGroupId',
        'resourceGroupIds' => 'ResourceGroupIds',
        'status'           => 'Status',
        'tag'              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->includeTags) {
            $res['IncludeTags'] = $this->includeTags;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceGroupIds) {
            $res['ResourceGroupIds'] = $this->resourceGroupIds;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['IncludeTags'])) {
            $model->includeTags = $map['IncludeTags'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = $map['ResourceGroupIds'];
            }
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

        return $model;
    }
}
