<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListGroupsRequest extends Model
{
    /**
     * @example 89
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1426C575705AE8545E8360A6EFA3B***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $useNextToken;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'lang'         => 'Lang',
        'nextToken'    => 'NextToken',
        'pageSize'     => 'PageSize',
        'useNextToken' => 'UseNextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->useNextToken) {
            $res['UseNextToken'] = $this->useNextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['UseNextToken'])) {
            $model->useNextToken = $map['UseNextToken'];
        }

        return $model;
    }
}
