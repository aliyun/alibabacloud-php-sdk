<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoResponseBody\usageInfoList;

class DescribeCreditUsageInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var usageInfoList[]
     */
    public $usageInfoList;
    protected $_name = [
        'requestId' => 'RequestId',
        'usageInfoList' => 'UsageInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->usageInfoList)) {
            Model::validateArray($this->usageInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usageInfoList) {
            if (\is_array($this->usageInfoList)) {
                $res['UsageInfoList'] = [];
                $n1 = 0;
                foreach ($this->usageInfoList as $item1) {
                    $res['UsageInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['UsageInfoList'])) {
            if (!empty($map['UsageInfoList'])) {
                $model->usageInfoList = [];
                $n1 = 0;
                foreach ($map['UsageInfoList'] as $item1) {
                    $model->usageInfoList[$n1] = usageInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
