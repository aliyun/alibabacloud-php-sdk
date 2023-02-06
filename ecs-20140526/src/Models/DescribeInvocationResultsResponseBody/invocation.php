<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @description The execution results.
     *
     * @var invocationResults
     */
    public $invocationResults;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of the commands.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'invocationResults' => 'InvocationResults',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocationResults) {
            $res['InvocationResults'] = null !== $this->invocationResults ? $this->invocationResults->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
     * @return invocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvocationResults'])) {
            $model->invocationResults = invocationResults::fromMap($map['InvocationResults']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
