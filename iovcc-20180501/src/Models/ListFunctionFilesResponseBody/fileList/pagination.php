<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionFilesResponseBody\fileList;

use AlibabaCloud\Tea\Model;

class pagination extends Model
{
    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalPageCount;
    protected $_name = [
        'pageIndex'      => 'PageIndex',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
        'totalPageCount' => 'TotalPageCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalPageCount) {
            $res['TotalPageCount'] = $this->totalPageCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagination
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalPageCount'])) {
            $model->totalPageCount = $map['TotalPageCount'];
        }

        return $model;
    }
}
