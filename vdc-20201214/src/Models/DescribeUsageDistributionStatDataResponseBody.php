<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeUsageDistributionStatDataResponseBody\usageStatList;
use AlibabaCloud\Tea\Model;

class DescribeUsageDistributionStatDataResponseBody extends Model
{
    /**
     * @example AAF6805E-D9DF-43E4-B94A-396A7EF69A0A
     *
     * @var string
     */
    public $requestId;

    /**
     * @var usageStatList[]
     */
    public $usageStatList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'usageStatList' => 'UsageStatList',
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
        if (null !== $this->usageStatList) {
            $res['UsageStatList'] = [];
            if (null !== $this->usageStatList && \is_array($this->usageStatList)) {
                $n = 0;
                foreach ($this->usageStatList as $item) {
                    $res['UsageStatList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsageStatList'])) {
            if (!empty($map['UsageStatList'])) {
                $model->usageStatList = [];
                $n                    = 0;
                foreach ($map['UsageStatList'] as $item) {
                    $model->usageStatList[$n++] = null !== $item ? usageStatList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
