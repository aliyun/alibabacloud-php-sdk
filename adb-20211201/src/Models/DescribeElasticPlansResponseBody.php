<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeElasticPlansResponseBody\elasticPlans;
use AlibabaCloud\Tea\Model;

class DescribeElasticPlansResponseBody extends Model
{
    /**
     * @description The scaling plans.
     *
     * @var elasticPlans[]
     */
    public $elasticPlans;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example A5C433C2-001F-58E3-99F5-3274C14DF8BD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'elasticPlans' => 'ElasticPlans',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticPlans) {
            $res['ElasticPlans'] = [];
            if (null !== $this->elasticPlans && \is_array($this->elasticPlans)) {
                $n = 0;
                foreach ($this->elasticPlans as $item) {
                    $res['ElasticPlans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticPlansResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticPlans'])) {
            if (!empty($map['ElasticPlans'])) {
                $model->elasticPlans = [];
                $n                   = 0;
                foreach ($map['ElasticPlans'] as $item) {
                    $model->elasticPlans[$n++] = null !== $item ? elasticPlans::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
