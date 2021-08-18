<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOverallDataResponseBody\usageOverallData;
use AlibabaCloud\Tea\Model;

class DescribeUsageOverallDataResponseBody extends Model
{
    /**
     * @description 用量概览数据列表
     *
     * @var usageOverallData[]
     */
    public $usageOverallData;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'usageOverallData' => 'UsageOverallData',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usageOverallData) {
            $res['UsageOverallData'] = [];
            if (null !== $this->usageOverallData && \is_array($this->usageOverallData)) {
                $n = 0;
                foreach ($this->usageOverallData as $item) {
                    $res['UsageOverallData'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeUsageOverallDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsageOverallData'])) {
            if (!empty($map['UsageOverallData'])) {
                $model->usageOverallData = [];
                $n                       = 0;
                foreach ($map['UsageOverallData'] as $item) {
                    $model->usageOverallData[$n++] = null !== $item ? usageOverallData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
