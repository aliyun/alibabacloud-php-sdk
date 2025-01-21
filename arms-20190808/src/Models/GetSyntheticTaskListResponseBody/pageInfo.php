<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskListResponseBody\pageInfo\list_;

class pageInfo extends Model
{
    /**
     * @var string
     */
    public $hasNextPage;
    /**
     * @var bool
     */
    public $hasPreviousPage;
    /**
     * @var bool
     */
    public $isFirstPage;
    /**
     * @var bool
     */
    public $isLastPage;
    /**
     * @var list_[]
     */
    public $list;
    /**
     * @var string
     */
    public $navigateFirstPage;
    /**
     * @var string
     */
    public $navigateLastPage;
    /**
     * @var string
     */
    public $navigatePageNums;
    /**
     * @var string
     */
    public $nextPage;
    /**
     * @var string
     */
    public $pages;
    /**
     * @var string
     */
    public $prepage;
    /**
     * @var int
     */
    public $size;
    /**
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
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->list)) {
                $res['List'] = [];
                $n1          = 0;
                foreach ($this->list as $item1) {
                    $res['List'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1          = 0;
                foreach ($map['List'] as $item1) {
                    $model->list[$n1++] = list_::fromMap($item1);
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
