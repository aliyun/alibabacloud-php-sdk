<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckItemResultResponseBody;

use AlibabaCloud\Tea\Model;

class pageContentResource extends Model
{
    /**
     * @var string
     */
    public $contentResource;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
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
