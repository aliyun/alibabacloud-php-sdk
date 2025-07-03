<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageOsSdkVersionDistributionStatDataResponseBody\usageOsSdkVersionStatList;

class DescribeUsageOsSdkVersionDistributionStatDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var usageOsSdkVersionStatList[]
     */
    public $usageOsSdkVersionStatList;
    protected $_name = [
        'requestId' => 'RequestId',
        'usageOsSdkVersionStatList' => 'UsageOsSdkVersionStatList',
    ];

    public function validate()
    {
        if (\is_array($this->usageOsSdkVersionStatList)) {
            Model::validateArray($this->usageOsSdkVersionStatList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usageOsSdkVersionStatList) {
            if (\is_array($this->usageOsSdkVersionStatList)) {
                $res['UsageOsSdkVersionStatList'] = [];
                $n1 = 0;
                foreach ($this->usageOsSdkVersionStatList as $item1) {
                    $res['UsageOsSdkVersionStatList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['UsageOsSdkVersionStatList'])) {
            if (!empty($map['UsageOsSdkVersionStatList'])) {
                $model->usageOsSdkVersionStatList = [];
                $n1 = 0;
                foreach ($map['UsageOsSdkVersionStatList'] as $item1) {
                    $model->usageOsSdkVersionStatList[$n1] = usageOsSdkVersionStatList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
