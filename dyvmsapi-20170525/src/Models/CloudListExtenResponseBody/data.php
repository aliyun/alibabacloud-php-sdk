<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListExtenResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListExtenResponseBody\data\list_;

class data extends Model
{
    /**
     * @var string
     */
    public $endRow;

    /**
     * @var string
     */
    public $firstPage;

    /**
     * @var int
     */
    public $hasNextPage;

    /**
     * @var int
     */
    public $hasPreviousPage;

    /**
     * @var int
     */
    public $isFirstPage;

    /**
     * @var int
     */
    public $isLastPage;

    /**
     * @var string
     */
    public $lastPage;

    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var string
     */
    public $navigatePages;

    /**
     * @var string[]
     */
    public $navigatepageNums;

    /**
     * @var string
     */
    public $nextPage;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $pageNum;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pages;

    /**
     * @var string
     */
    public $prePage;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $startRow;

    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'endRow' => 'EndRow',
        'firstPage' => 'FirstPage',
        'hasNextPage' => 'HasNextPage',
        'hasPreviousPage' => 'HasPreviousPage',
        'isFirstPage' => 'IsFirstPage',
        'isLastPage' => 'IsLastPage',
        'lastPage' => 'LastPage',
        'list' => 'List',
        'navigatePages' => 'NavigatePages',
        'navigatepageNums' => 'NavigatepageNums',
        'nextPage' => 'NextPage',
        'orderBy' => 'OrderBy',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'pages' => 'Pages',
        'prePage' => 'PrePage',
        'size' => 'Size',
        'startRow' => 'StartRow',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
        }
        if (\is_array($this->navigatepageNums)) {
            Model::validateArray($this->navigatepageNums);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endRow) {
            $res['EndRow'] = $this->endRow;
        }

        if (null !== $this->firstPage) {
            $res['FirstPage'] = $this->firstPage;
        }

        if (null !== $this->hasNextPage) {
            $res['HasNextPage'] = $this->hasNextPage;
        }

        if (null !== $this->hasPreviousPage) {
            $res['HasPreviousPage'] = $this->hasPreviousPage;
        }

        if (null !== $this->isFirstPage) {
            $res['IsFirstPage'] = $this->isFirstPage;
        }

        if (null !== $this->isLastPage) {
            $res['IsLastPage'] = $this->isLastPage;
        }

        if (null !== $this->lastPage) {
            $res['LastPage'] = $this->lastPage;
        }

        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['List'] = [];
                $n1 = 0;
                foreach ($this->list as $item1) {
                    $res['List'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->navigatePages) {
            $res['NavigatePages'] = $this->navigatePages;
        }

        if (null !== $this->navigatepageNums) {
            if (\is_array($this->navigatepageNums)) {
                $res['NavigatepageNums'] = [];
                $n1 = 0;
                foreach ($this->navigatepageNums as $item1) {
                    $res['NavigatepageNums'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pages) {
            $res['Pages'] = $this->pages;
        }

        if (null !== $this->prePage) {
            $res['PrePage'] = $this->prePage;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->startRow) {
            $res['StartRow'] = $this->startRow;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['EndRow'])) {
            $model->endRow = $map['EndRow'];
        }

        if (isset($map['FirstPage'])) {
            $model->firstPage = $map['FirstPage'];
        }

        if (isset($map['HasNextPage'])) {
            $model->hasNextPage = $map['HasNextPage'];
        }

        if (isset($map['HasPreviousPage'])) {
            $model->hasPreviousPage = $map['HasPreviousPage'];
        }

        if (isset($map['IsFirstPage'])) {
            $model->isFirstPage = $map['IsFirstPage'];
        }

        if (isset($map['IsLastPage'])) {
            $model->isLastPage = $map['IsLastPage'];
        }

        if (isset($map['LastPage'])) {
            $model->lastPage = $map['LastPage'];
        }

        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n1 = 0;
                foreach ($map['List'] as $item1) {
                    $model->list[$n1] = list_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NavigatePages'])) {
            $model->navigatePages = $map['NavigatePages'];
        }

        if (isset($map['NavigatepageNums'])) {
            if (!empty($map['NavigatepageNums'])) {
                $model->navigatepageNums = [];
                $n1 = 0;
                foreach ($map['NavigatepageNums'] as $item1) {
                    $model->navigatepageNums[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Pages'])) {
            $model->pages = $map['Pages'];
        }

        if (isset($map['PrePage'])) {
            $model->prePage = $map['PrePage'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['StartRow'])) {
            $model->startRow = $map['StartRow'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
