<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesRequest\resourceTag;
use AlibabaCloud\Tea\Model;

class DescribeZonesRequest extends Model
{
    /**
     * @description The keyword of the zone name. The value is not case-sensitive. You can set SearchMode to LIKE or EXACT. The default value of SearchMode is LIKE.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: **1 to 100**. Default value: **20**.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the virtual private cloud (VPC) associated with the zone.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $queryRegionId;

    /**
     * @description The ID of the VPC associated with the zone.
     *
     * @example vpc-f8zvrvr1payllgz38****
     *
     * @var string
     */
    public $queryVpcId;

    /**
     * @description The ID of the resource group to which the zone belongs.
     *
     * @example rg-aekz2qj7awz****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags added to the zone.
     *
     * @var resourceTag[]
     */
    public $resourceTag;

    /**
     * @description The search mode. The value of Keyword is the search scope. Valid values:
     *
     *   **LIKE** (default): fuzzy search
     *   **EXACT**: exact search
     *
     * Default value: **LIKE**.
     * @example LIKE
     *
     * @var string
     */
    public $searchMode;

    /**
     * @description The types of cloud services.
     *
     * @example BLINK
     *
     * @var string[]
     */
    public $zoneTag;

    /**
     * @description The zone type. Valid values:
     *
     *   **AUTH_ZONE**: authoritative zone
     *   **CLOUD_PRODUCT_ZONE**: authoritative zone for cloud services
     *
     * Default value: **AUTH_ZONE**.
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
