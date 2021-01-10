<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionLogResponseBody;

use AlibabaCloud\Tea\Model;

class paginator extends Model
{
    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $pageCount;
    protected $_name = [
        'pageNum'   => 'PageNum',
        'pageSize'  => 'PageSize',
        'total'     => 'Total',
        'pageCount' => 'PageCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paginator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }

        return $model;
    }
}
