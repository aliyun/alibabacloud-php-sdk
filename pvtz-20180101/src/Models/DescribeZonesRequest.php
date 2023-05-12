<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesRequest\resourceTag;
use AlibabaCloud\Tea\Model;

class DescribeZonesRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $queryRegionId;

    /**
     * @description VPC ID。
     *
     * @example vpc-xxxxx
     *
     * @var string
     */
    public $queryVpcId;

    /**
     * @example rg-xxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourceTag[]
     */
    public $resourceTag;

    /**
     * @example LIKE
     *
     * @var string
     */
    public $searchMode;

    /**
     * @example BLINK
     *
     * @var string[]
     */
    public $zoneTag;

    /**
     * @example CLOUD_PRODUCT_ZONE
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'keyword'         => 'Keyword',
        'lang'            => 'Lang',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'queryRegionId'   => 'QueryRegionId',
        'queryVpcId'      => 'QueryVpcId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceTag'     => 'ResourceTag',
        'searchMode'      => 'SearchMode',
        'zoneTag'         => 'ZoneTag',
        'zoneType'        => 'ZoneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryRegionId) {
            $res['QueryRegionId'] = $this->queryRegionId;
        }
        if (null !== $this->queryVpcId) {
            $res['QueryVpcId'] = $this->queryVpcId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceTag) {
            $res['ResourceTag'] = [];
            if (null !== $this->resourceTag && \is_array($this->resourceTag)) {
                $n = 0;
                foreach ($this->resourceTag as $item) {
                    $res['ResourceTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }
        if (null !== $this->zoneTag) {
            $res['ZoneTag'] = $this->zoneTag;
        }
        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeZonesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryRegionId'])) {
            $model->queryRegionId = $map['QueryRegionId'];
        }
        if (isset($map['QueryVpcId'])) {
            $model->queryVpcId = $map['QueryVpcId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceTag'])) {
            if (!empty($map['ResourceTag'])) {
                $model->resourceTag = [];
                $n                  = 0;
                foreach ($map['ResourceTag'] as $item) {
                    $model->resourceTag[$n++] = null !== $item ? resourceTag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }
        if (isset($map['ZoneTag'])) {
            if (!empty($map['ZoneTag'])) {
                $model->zoneTag = $map['ZoneTag'];
            }
        }
        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
