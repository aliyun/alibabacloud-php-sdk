<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesRequest\filter;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListServicesRequest extends Model
{
    /**
     * @description The filter.
     *
     * @var filter[]
     */
    public $filter;

    /**
     * @description Keyword fuzzy query.
     *
     * @example name
     *
     * @var string
     */
    public $fuzzyKeyword;

    /**
     * @description Whether it is used. Optional values:
     * - true: already in use.
     * @example false
     *
     * @var bool
     */
    public $inUsed;

    /**
     * @description The number of entries page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example BBBAAfu+XtuBE55iRLHEYYuojI4=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Service ordering type.
     *
     * @example UpdateTime
     *
     * @var string
     */
    public $orderByType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Service access type.
     *
     * @example All
     *
     * @var string
     */
    public $serviceAccessType;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'filter' => 'Filter',
        'fuzzyKeyword' => 'FuzzyKeyword',
        'inUsed' => 'InUsed',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderByType' => 'OrderByType',
        'regionId' => 'RegionId',
        'serviceAccessType' => 'ServiceAccessType',
        'tag' => 'Tag',
    ];

    public function validate() {}

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
        if (null !== $this->fuzzyKeyword) {
            $res['FuzzyKeyword'] = $this->fuzzyKeyword;
        }
        if (null !== $this->inUsed) {
            $res['InUsed'] = $this->inUsed;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderByType) {
            $res['OrderByType'] = $this->orderByType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceAccessType) {
            $res['ServiceAccessType'] = $this->serviceAccessType;
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
     * @return ListServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FuzzyKeyword'])) {
            $model->fuzzyKeyword = $map['FuzzyKeyword'];
        }
        if (isset($map['InUsed'])) {
            $model->inUsed = $map['InUsed'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderByType'])) {
            $model->orderByType = $map['OrderByType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceAccessType'])) {
            $model->serviceAccessType = $map['ServiceAccessType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
