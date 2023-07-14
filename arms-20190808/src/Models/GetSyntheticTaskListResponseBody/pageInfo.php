<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskListResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskListResponseBody\pageInfo\list_;
use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $hasNextPage;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasPreviousPage;

    /**
     * @example true
     *
     * @var bool
     */
    public $isFirstPage;

    /**
     * @example true
     *
     * @var bool
     */
    public $isLastPage;

    /**
     * @var list_[]
     */
    public $list;

    /**
     * @example 1
     *
     * @var string
     */
    public $navigateFirstPage;

    /**
     * @example 3
     *
     * @var string
     */
    public $navigateLastPage;

    /**
     * @example 1,2,3
     *
     * @var string
     */
    public $navigatePageNums;

    /**
     * @example 3
     *
     * @var string
     */
    public $nextPage;

    /**
     * @example 10
     *
     * @var string
     */
    public $pages;

    /**
     * @example 1
     *
     * @var string
     */
    public $prepage;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example 15
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'hasNextPage'       => 'HasNextPage',
        'hasPreviousPage'   => 'HasPreviousPage',
        'isFirstPage'       => 'IsFirstPage',
        'isLastPage'        => 'IsLastPage',
        'list'              => 'List',
        'navigateFirstPage' => 'NavigateFirstPage',
        'navigateLastPage'  => 'NavigateLastPage',
        'navigatePageNums'  => 'NavigatePageNums',
        'nextPage'          => 'NextPage',
        'pages'             => 'Pages',
        'prepage'           => 'Prepage',
        'size'              => 'Size',
        'total'             => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->navigateFirstPage) {
            $res['NavigateFirstPage'] = $this->navigateFirstPage;
        }
        if (null !== $this->navigateLastPage) {
            $res['NavigateLastPage'] = $this->navigateLastPage;
        }
        if (null !== $this->navigatePageNums) {
            $res['NavigatePageNums'] = $this->navigatePageNums;
        }
        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }
        if (null !== $this->pages) {
            $res['Pages'] = $this->pages;
        }
        if (null !== $this->prepage) {
            $res['Prepage'] = $this->prepage;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NavigateFirstPage'])) {
            $model->navigateFirstPage = $map['NavigateFirstPage'];
        }
        if (isset($map['NavigateLastPage'])) {
            $model->navigateLastPage = $map['NavigateLastPage'];
        }
        if (isset($map['NavigatePageNums'])) {
            $model->navigatePageNums = $map['NavigatePageNums'];
        }
        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }
        if (isset($map['Pages'])) {
            $model->pages = $map['Pages'];
        }
        if (isset($map['Prepage'])) {
            $model->prepage = $map['Prepage'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
