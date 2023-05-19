<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafPoliciesResponseBody\policies;
use AlibabaCloud\Tea\Model;

class DescribeDcdnWafPoliciesResponseBody extends Model
{
    /**
     * @description The page number of the returned page. Valid values: **1** to **100000**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of protection policies returned per page. Valid values: an integer from **1** to **500**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The information about protection policies.
     *
     * @var policies[]
     */
    public $policies;

    /**
     * @description The ID of the request.
     *
     * @example 153ca2cd-3c01-44be-2e83-64dbc6c88630
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of protection policies.
     *
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'policies'   => 'Policies',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policies) {
            $res['Policies'] = [];
            if (null !== $this->policies && \is_array($this->policies)) {
                $n = 0;
                foreach ($this->policies as $item) {
                    $res['Policies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeDcdnWafPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n               = 0;
                foreach ($map['Policies'] as $item) {
                    $model->policies[$n++] = null !== $item ? policies::fromMap($item) : $item;
                }
            }
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
