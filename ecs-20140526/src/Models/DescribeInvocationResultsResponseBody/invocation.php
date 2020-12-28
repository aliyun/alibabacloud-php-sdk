<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponseBody\invocation\invocationResults;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var invocationResults[]
     */
    public $invocationResults;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageSize'          => 'PageSize',
        'pageNumber'        => 'PageNumber',
        'invocationResults' => 'InvocationResults',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->invocationResults) {
            $res['InvocationResults'] = [];
            if (null !== $this->invocationResults && \is_array($this->invocationResults)) {
                $n = 0;
                foreach ($this->invocationResults as $item) {
                    $res['InvocationResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['InvocationResults'])) {
            if (!empty($map['InvocationResults'])) {
                $model->invocationResults = [];
                $n                        = 0;
                foreach ($map['InvocationResults'] as $item) {
                    $model->invocationResults[$n++] = null !== $item ? invocationResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
