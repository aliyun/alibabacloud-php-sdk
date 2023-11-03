<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListContainerDefenseRuleResponseBody;

use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @description The number of entries returned on the current page.
     *
     * @example 9
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
     * @description The key of the last data entry.
     *
     * @example CAESGgo***jE2NDc4NjE=
     *
     * @var string
     */
    public $lastRowKey;

    /**
     * @description The query credential.
     *
     * @example B60***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 45
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count'       => 'Count',
        'currentPage' => 'CurrentPage',
        'lastRowKey'  => 'LastRowKey',
        'nextToken'   => 'NextToken',
        'pageSize'    => 'PageSize',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lastRowKey) {
            $res['LastRowKey'] = $this->lastRowKey;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return pageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['LastRowKey'])) {
            $model->lastRowKey = $map['LastRowKey'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
