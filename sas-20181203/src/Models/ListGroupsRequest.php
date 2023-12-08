<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListGroupsRequest extends Model
{
    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 89
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If the return value of NextToken is empty, no next query is to be sent. If a value of NextToken is returned, the value indicates the token that is used for the next query.
     *
     * @example 1426C575705AE8545E8360A6EFA3B***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries per page. Default value: 20. Maximum value: 2000.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether to use NextToken to query vulnerabilities. If you set this parameter to true, TotalCount is not returned. Valid values:
     *
     *   **true**
     *   **false**
     *
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
