<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSyntheticDetailRequest\advancedFilters;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSyntheticDetailRequest\exactFilters;

class ListSyntheticDetailRequest extends Model
{
    /**
     * @var advancedFilters[]
     */
    public $advancedFilters;
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
     * @var exactFilters[]
     */
    public $exactFilters;
    /**
     * @var string[]
     */
    public $filters;
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
        if (\is_array($this->advancedFilters)) {
            Model::validateArray($this->advancedFilters);
        }
        if (\is_array($this->exactFilters)) {
            Model::validateArray($this->exactFilters);
        }
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedFilters) {
            if (\is_array($this->advancedFilters)) {
                $res['AdvancedFilters'] = [];
                $n1                     = 0;
                foreach ($this->advancedFilters as $item1) {
                    $res['AdvancedFilters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->exactFilters)) {
                $res['ExactFilters'] = [];
                $n1                  = 0;
                foreach ($this->exactFilters as $item1) {
                    $res['ExactFilters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                foreach ($this->filters as $key1 => $value1) {
                    $res['Filters'][$key1] = $value1;
                }
            }
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
            if (!empty($map['AdvancedFilters'])) {
                $model->advancedFilters = [];
                $n1                     = 0;
                foreach ($map['AdvancedFilters'] as $item1) {
                    $model->advancedFilters[$n1++] = advancedFilters::fromMap($item1);
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
                $n1                  = 0;
                foreach ($map['ExactFilters'] as $item1) {
                    $model->exactFilters[$n1++] = exactFilters::fromMap($item1);
                }
            }
        }

        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                foreach ($map['Filters'] as $key1 => $value1) {
                    $model->filters[$key1] = $value1;
                }
            }
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
