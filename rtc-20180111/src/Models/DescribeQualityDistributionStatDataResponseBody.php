<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityDistributionStatDataResponseBody\qualityStatDataList;

class DescribeQualityDistributionStatDataResponseBody extends Model
{
    /**
     * @var qualityStatDataList[]
     */
    public $qualityStatDataList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qualityStatDataList' => 'QualityStatDataList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->qualityStatDataList)) {
            Model::validateArray($this->qualityStatDataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualityStatDataList) {
            if (\is_array($this->qualityStatDataList)) {
                $res['QualityStatDataList'] = [];
                $n1 = 0;
                foreach ($this->qualityStatDataList as $item1) {
                    $res['QualityStatDataList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['QualityStatDataList'])) {
            if (!empty($map['QualityStatDataList'])) {
                $model->qualityStatDataList = [];
                $n1 = 0;
                foreach ($map['QualityStatDataList'] as $item1) {
                    $model->qualityStatDataList[$n1++] = qualityStatDataList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
