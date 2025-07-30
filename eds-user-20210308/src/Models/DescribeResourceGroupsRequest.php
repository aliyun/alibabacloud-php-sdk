<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceGroupsRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $needContainResourceGroupWithOfficeSite;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example AliyunConsole
     *
     * @var string
     */
    public $platform;

    /**
     * @var string[]
     */
    public $resourceGroupIds;

    /**
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'needContainResourceGroupWithOfficeSite' => 'NeedContainResourceGroupWithOfficeSite',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'platform' => 'Platform',
        'resourceGroupIds' => 'ResourceGroupIds',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->needContainResourceGroupWithOfficeSite) {
            $res['NeedContainResourceGroupWithOfficeSite'] = $this->needContainResourceGroupWithOfficeSite;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->resourceGroupIds) {
            $res['ResourceGroupIds'] = $this->resourceGroupIds;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedContainResourceGroupWithOfficeSite'])) {
            $model->needContainResourceGroupWithOfficeSite = $map['NeedContainResourceGroupWithOfficeSite'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = $map['ResourceGroupIds'];
            }
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
