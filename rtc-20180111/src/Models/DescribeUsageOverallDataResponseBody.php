<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUsageOverallDataResponseBody\usageOverallData;

class DescribeUsageOverallDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var usageOverallData[]
     */
    public $usageOverallData;
    protected $_name = [
        'requestId'        => 'RequestId',
        'usageOverallData' => 'UsageOverallData',
    ];

    public function validate()
    {
        if (\is_array($this->usageOverallData)) {
            Model::validateArray($this->usageOverallData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usageOverallData) {
            if (\is_array($this->usageOverallData)) {
                $res['UsageOverallData'] = [];
                $n1                      = 0;
                foreach ($this->usageOverallData as $item1) {
                    $res['UsageOverallData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['UsageOverallData'])) {
            if (!empty($map['UsageOverallData'])) {
                $model->usageOverallData = [];
                $n1                      = 0;
                foreach ($map['UsageOverallData'] as $item1) {
                    $model->usageOverallData[$n1++] = usageOverallData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
