<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageAreaDistributionStatDataResponseBody\usageAreaStatList;

class DescribeUsageAreaDistributionStatDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var usageAreaStatList[]
     */
    public $usageAreaStatList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'usageAreaStatList' => 'UsageAreaStatList',
    ];

    public function validate()
    {
        if (\is_array($this->usageAreaStatList)) {
            Model::validateArray($this->usageAreaStatList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usageAreaStatList) {
            if (\is_array($this->usageAreaStatList)) {
                $res['UsageAreaStatList'] = [];
                $n1                       = 0;
                foreach ($this->usageAreaStatList as $item1) {
                    $res['UsageAreaStatList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UsageAreaStatList'])) {
            if (!empty($map['UsageAreaStatList'])) {
                $model->usageAreaStatList = [];
                $n1                       = 0;
                foreach ($map['UsageAreaStatList'] as $item1) {
                    $model->usageAreaStatList[$n1++] = usageAreaStatList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
