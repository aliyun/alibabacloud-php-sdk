<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageOsSdkVersionDistributionStatDataResponseBody\usageOsSdkVersionStatList;
use AlibabaCloud\Tea\Model;

class DescribeUsageOsSdkVersionDistributionStatDataResponseBody extends Model
{
    /**
     * @example 579EA10B-8B89-449E-88E0-D362C76EAC62
     *
     * @var string
     */
    public $requestId;

    /**
     * @var usageOsSdkVersionStatList[]
     */
    public $usageOsSdkVersionStatList;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'usageOsSdkVersionStatList' => 'UsageOsSdkVersionStatList',
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
        if (null !== $this->usageOsSdkVersionStatList) {
            $res['UsageOsSdkVersionStatList'] = [];
            if (null !== $this->usageOsSdkVersionStatList && \is_array($this->usageOsSdkVersionStatList)) {
                $n = 0;
                foreach ($this->usageOsSdkVersionStatList as $item) {
                    $res['UsageOsSdkVersionStatList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUsageOsSdkVersionDistributionStatDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsageOsSdkVersionStatList'])) {
            if (!empty($map['UsageOsSdkVersionStatList'])) {
                $model->usageOsSdkVersionStatList = [];
                $n                                = 0;
                foreach ($map['UsageOsSdkVersionStatList'] as $item) {
                    $model->usageOsSdkVersionStatList[$n++] = null !== $item ? usageOsSdkVersionStatList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
