<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSyntheticDetailRequest\advancedFilters;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSyntheticDetailRequest\exactFilters;
use AlibabaCloud\Tea\Model;

class ListSyntheticDetailRequest extends Model
{
    /**
     * @var advancedFilters[]
     */
    public $advancedFilters;

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
     * @var exactFilters[]
     */
    public $exactFilters;

    /**
     * @var string[]
     */
    public $filters;

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
        'advancedFilters' => 'AdvancedFilters',
        'category'        => 'Category',
        'detail'          => 'Detail',
        'endTime'         => 'EndTime',
        'exactFilters'    => 'ExactFilters',
        'filters'         => 'Filters',
        'order'           => 'Order',
        'orderBy'         => 'OrderBy',
        'page'            => 'Page',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'startTime'       => 'StartTime',
        'syntheticType'   => 'SyntheticType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedFilters) {
            $res['AdvancedFilters'] = [];
            if (null !== $this->advancedFilters && \is_array($this->advancedFilters)) {
                $n = 0;
                foreach ($this->advancedFilters as $item) {
                    $res['AdvancedFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->exactFilters) {
            $res['ExactFilters'] = [];
            if (null !== $this->exactFilters && \is_array($this->exactFilters)) {
                $n = 0;
                foreach ($this->exactFilters as $item) {
                    $res['ExactFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->filters) {
            $res['Filters'] = $this->filters;
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
     * @return ListSyntheticDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedFilters'])) {
            if (!empty($map['AdvancedFilters'])) {
                $model->advancedFilters = [];
                $n                      = 0;
                foreach ($map['AdvancedFilters'] as $item) {
                    $model->advancedFilters[$n++] = null !== $item ? advancedFilters::fromMap($item) : $item;
                }
            }
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
            if (!empty($map['ExactFilters'])) {
                $model->exactFilters = [];
                $n                   = 0;
                foreach ($map['ExactFilters'] as $item) {
                    $model->exactFilters[$n++] = null !== $item ? exactFilters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Filters'])) {
            $model->filters = $map['Filters'];
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
