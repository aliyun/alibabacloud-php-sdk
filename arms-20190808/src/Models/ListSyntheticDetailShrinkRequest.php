<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ListSyntheticDetailShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $advancedFiltersShrink;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $detail;

    /**
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
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $syntheticType;
    protected $_name = [
        'advancedFiltersShrink' => 'AdvancedFilters',
        'category' => 'Category',
        'detail' => 'Detail',
        'endTime' => 'EndTime',
        'exactFiltersShrink' => 'ExactFilters',
        'filtersShrink' => 'Filters',
        'order' => 'Order',
        'orderBy' => 'OrderBy',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'syntheticType' => 'SyntheticType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
