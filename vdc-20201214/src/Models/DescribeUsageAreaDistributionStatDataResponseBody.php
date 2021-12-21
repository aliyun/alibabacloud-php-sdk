<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageAreaDistributionStatDataResponseBody\usageAreaStatList;
use AlibabaCloud\Tea\Model;

class DescribeUsageAreaDistributionStatDataResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 用量统计地域分布数据
     *
     * @var usageAreaStatList[]
     */
    public $usageAreaStatList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'usageAreaStatList' => 'UsageAreaStatList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->usageAreaStatList) {
            $res['UsageAreaStatList'] = [];
            if (null !== $this->usageAreaStatList && \is_array($this->usageAreaStatList)) {
                $n = 0;
                foreach ($this->usageAreaStatList as $item) {
                    $res['UsageAreaStatList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsageAreaDistributionStatDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsageAreaStatList'])) {
            if (!empty($map['UsageAreaStatList'])) {
                $model->usageAreaStatList = [];
                $n                        = 0;
                foreach ($map['UsageAreaStatList'] as $item) {
                    $model->usageAreaStatList[$n++] = null !== $item ? usageAreaStatList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
