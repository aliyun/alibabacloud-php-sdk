<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackPaidTrafficResponse\packPaidTraffics;
use AlibabaCloud\Tea\Model;

class DescribePackPaidTrafficResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var packPaidTraffics[]
     */
    public $packPaidTraffics;
    protected $_name = [
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
        'packPaidTraffics' => 'PackPaidTraffics',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('packPaidTraffics', $this->packPaidTraffics, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
     * @return DescribePackPaidTrafficResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
