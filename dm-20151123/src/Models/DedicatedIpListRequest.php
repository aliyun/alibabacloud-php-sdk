<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class DedicatedIpListRequest extends Model
{
    /**
     * @description IP search keyword
     *
     * @example xxx
     *
     * @var string
     */
    public $keyword;

    /**
     * @description Pagination index, starting from 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description Page size
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'keyword' => 'Keyword',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DedicatedIpListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
