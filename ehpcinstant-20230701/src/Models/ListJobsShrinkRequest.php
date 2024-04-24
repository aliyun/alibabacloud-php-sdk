<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Tea\Model;

class ListJobsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $filterShrink;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 50
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortByShrink;
    protected $_name = [
        'filterShrink' => 'Filter',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'sortByShrink' => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterShrink) {
            $res['Filter'] = $this->filterShrink;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortByShrink) {
            $res['SortBy'] = $this->sortByShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            $model->filterShrink = $map['Filter'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortByShrink = $map['SortBy'];
        }

        return $model;
    }
}
