<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListSyntheticDetailShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $advancedFiltersShrink;

    /**
     * @example SYNTHETIC
     *
     * @var string
     */
    public $category;

    /**
     * @example ICMP_LIST
     *
     * @var string
     */
    public $detail;

    /**
     * @example 1684480557772
     *
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $exactFiltersShrink;

    /**
     * @var string
     */
    public $filtersShrink;

    /**
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @example timestamp
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 20
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
     * @example 1684110343127
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $syntheticType;
    protected $_name = [
        'advancedFiltersShrink' => 'AdvancedFilters',
        'category'              => 'Category',
        'detail'                => 'Detail',
        'endTime'               => 'EndTime',
        'exactFiltersShrink'    => 'ExactFilters',
        'filtersShrink'         => 'Filters',
        'order'                 => 'Order',
        'orderBy'               => 'OrderBy',
        'page'                  => 'Page',
        'pageSize'              => 'PageSize',
        'regionId'              => 'RegionId',
        'startTime'             => 'StartTime',
        'syntheticType'         => 'SyntheticType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedFiltersShrink) {
            $res['AdvancedFilters'] = $this->advancedFiltersShrink;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->exactFiltersShrink) {
            $res['ExactFilters'] = $this->exactFiltersShrink;
        }
        if (null !== $this->filtersShrink) {
            $res['Filters'] = $this->filtersShrink;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->syntheticType) {
            $res['SyntheticType'] = $this->syntheticType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSyntheticDetailShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedFilters'])) {
            $model->advancedFiltersShrink = $map['AdvancedFilters'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExactFilters'])) {
            $model->exactFiltersShrink = $map['ExactFilters'];
        }
        if (isset($map['Filters'])) {
            $model->filtersShrink = $map['Filters'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SyntheticType'])) {
            $model->syntheticType = $map['SyntheticType'];
        }

        return $model;
    }
}
