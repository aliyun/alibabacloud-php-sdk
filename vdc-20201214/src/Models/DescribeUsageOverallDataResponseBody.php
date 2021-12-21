<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOverallDataResponseBody\usageOverallData;
use AlibabaCloud\Tea\Model;

class DescribeUsageOverallDataResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 用量概览数据列表
     *
     * @var usageOverallData[]
     */
    public $usageOverallData;
    protected $_name = [
        'requestId'        => 'RequestId',
        'usageOverallData' => 'UsageOverallData',
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
        if (null !== $this->usageOverallData) {
            $res['UsageOverallData'] = [];
            if (null !== $this->usageOverallData && \is_array($this->usageOverallData)) {
                $n = 0;
                foreach ($this->usageOverallData as $item) {
                    $res['UsageOverallData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsageOverallDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsageOverallData'])) {
            if (!empty($map['UsageOverallData'])) {
                $model->usageOverallData = [];
                $n                       = 0;
                foreach ($map['UsageOverallData'] as $item) {
                    $model->usageOverallData[$n++] = null !== $item ? usageOverallData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
