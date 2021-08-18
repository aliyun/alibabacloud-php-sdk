<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageDistributionStatDataResponseBody\usageStatList;
use AlibabaCloud\Tea\Model;

class DescribeUsageDistributionStatDataResponseBody extends Model
{
    /**
     * @description 用量统计数据列表
     *
     * @var usageStatList[]
     */
    public $usageStatList;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'usageStatList' => 'UsageStatList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usageStatList) {
            $res['UsageStatList'] = [];
            if (null !== $this->usageStatList && \is_array($this->usageStatList)) {
                $n = 0;
                foreach ($this->usageStatList as $item) {
                    $res['UsageStatList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsageDistributionStatDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsageStatList'])) {
            if (!empty($map['UsageStatList'])) {
                $model->usageStatList = [];
                $n                    = 0;
                foreach ($map['UsageStatList'] as $item) {
                    $model->usageStatList[$n++] = null !== $item ? usageStatList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
