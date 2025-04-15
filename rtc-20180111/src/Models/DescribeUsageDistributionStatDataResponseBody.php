<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageDistributionStatDataResponseBody\usageStatList;

class DescribeUsageDistributionStatDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var usageStatList[]
     */
    public $usageStatList;
    protected $_name = [
        'requestId' => 'RequestId',
        'usageStatList' => 'UsageStatList',
    ];

    public function validate()
    {
        if (\is_array($this->usageStatList)) {
            Model::validateArray($this->usageStatList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usageStatList) {
            if (\is_array($this->usageStatList)) {
                $res['UsageStatList'] = [];
                $n1 = 0;
                foreach ($this->usageStatList as $item1) {
                    $res['UsageStatList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['UsageStatList'])) {
            if (!empty($map['UsageStatList'])) {
                $model->usageStatList = [];
                $n1 = 0;
                foreach ($map['UsageStatList'] as $item1) {
                    $model->usageStatList[$n1++] = usageStatList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
