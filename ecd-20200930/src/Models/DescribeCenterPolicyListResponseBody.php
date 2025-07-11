<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups;
use AlibabaCloud\Tea\Model;

class DescribeCenterPolicyListResponseBody extends Model
{
    /**
     * @description The cloud computer policies.
     *
     * @var describePolicyGroups[]
     */
    public $describePolicyGroups;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'describePolicyGroups' => 'DescribePolicyGroups',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->describePolicyGroups) {
            $res['DescribePolicyGroups'] = [];
            if (null !== $this->describePolicyGroups && \is_array($this->describePolicyGroups)) {
                $n = 0;
                foreach ($this->describePolicyGroups as $item) {
                    $res['DescribePolicyGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCenterPolicyListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribePolicyGroups'])) {
            if (!empty($map['DescribePolicyGroups'])) {
                $model->describePolicyGroups = [];
                $n = 0;
                foreach ($map['DescribePolicyGroups'] as $item) {
                    $model->describePolicyGroups[$n++] = null !== $item ? describePolicyGroups::fromMap($item) : $item;
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
