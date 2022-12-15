<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class ListDbfsRequest extends Model
{
    /**
     * @example FsName
     *
     * @var string
     */
    public $filterKey;

    /**
     * @example dbfs-test-01
     *
     * @var string
     */
    public $filterValue;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example SizeG
     *
     * @var string
     */
    public $sortKey;

    /**
     * @example desc
     *
     * @var string
     */
    public $sortType;

    /**
     * @example [{"TagKey":"k1","TagValue":"v1"},{"TagKey":"k2","TagValue":"v2"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'filterKey'   => 'FilterKey',
        'filterValue' => 'FilterValue',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'sortKey'     => 'SortKey',
        'sortType'    => 'SortType',
        'tags'        => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
        }
        if (null !== $this->filterValue) {
            $res['FilterValue'] = $this->filterValue;
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
        if (null !== $this->sortKey) {
            $res['SortKey'] = $this->sortKey;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDbfsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterKey'])) {
            $model->filterKey = $map['FilterKey'];
        }
        if (isset($map['FilterValue'])) {
            $model->filterValue = $map['FilterValue'];
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
        if (isset($map['SortKey'])) {
            $model->sortKey = $map['SortKey'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
