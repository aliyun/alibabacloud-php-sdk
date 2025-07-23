<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class ListLicensesRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 12
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryStr;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'queryStr' => 'QueryStr',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryStr) {
            $res['QueryStr'] = $this->queryStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLicensesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryStr'])) {
            $model->queryStr = $map['QueryStr'];
        }

        return $model;
    }
}
