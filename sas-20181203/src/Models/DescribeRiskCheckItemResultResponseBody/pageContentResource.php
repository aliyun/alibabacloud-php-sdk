<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckItemResultResponseBody;

use AlibabaCloud\Tea\Model;

class pageContentResource extends Model
{
    /**
     * @description The data of the affected assets on each page in a dynamic table.
     *
     * @var mixed[]
     */
    public $contentResource;

    /**
     * @description The number of entries returned on the current page.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The total number of pages returned.
     *
     * @example 3
     *
     * @var int
     */
    public $pageCount;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'contentResource' => 'ContentResource',
        'count'           => 'Count',
        'currentPage'     => 'CurrentPage',
        'pageCount'       => 'PageCount',
        'pageSize'        => 'PageSize',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentResource) {
            $res['ContentResource'] = $this->contentResource;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageContentResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentResource'])) {
            $model->contentResource = $map['ContentResource'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
