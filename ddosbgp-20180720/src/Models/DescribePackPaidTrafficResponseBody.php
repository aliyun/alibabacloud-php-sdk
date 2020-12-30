<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackPaidTrafficResponseBody\packPaidTraffics;
use AlibabaCloud\Tea\Model;

class DescribePackPaidTrafficResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var packPaidTraffics[]
     */
    public $packPaidTraffics;
    protected $_name = [
        'totalCount'       => 'TotalCount',
        'requestId'        => 'RequestId',
        'packPaidTraffics' => 'PackPaidTraffics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->packPaidTraffics) {
            $res['PackPaidTraffics'] = [];
            if (null !== $this->packPaidTraffics && \is_array($this->packPaidTraffics)) {
                $n = 0;
                foreach ($this->packPaidTraffics as $item) {
                    $res['PackPaidTraffics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePackPaidTrafficResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PackPaidTraffics'])) {
            if (!empty($map['PackPaidTraffics'])) {
                $model->packPaidTraffics = [];
                $n                       = 0;
                foreach ($map['PackPaidTraffics'] as $item) {
                    $model->packPaidTraffics[$n++] = null !== $item ? packPaidTraffics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
