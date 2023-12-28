<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityDistributionStatDataResponseBody\qualityStatDataList;
use AlibabaCloud\Tea\Model;

class DescribeQualityDistributionStatDataResponseBody extends Model
{
    /**
     * @var qualityStatDataList[]
     */
    public $qualityStatDataList;

    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qualityStatDataList' => 'QualityStatDataList',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualityStatDataList) {
            $res['QualityStatDataList'] = [];
            if (null !== $this->qualityStatDataList && \is_array($this->qualityStatDataList)) {
                $n = 0;
                foreach ($this->qualityStatDataList as $item) {
                    $res['QualityStatDataList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeQualityDistributionStatDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualityStatDataList'])) {
            if (!empty($map['QualityStatDataList'])) {
                $model->qualityStatDataList = [];
                $n                          = 0;
                foreach ($map['QualityStatDataList'] as $item) {
                    $model->qualityStatDataList[$n++] = null !== $item ? qualityStatDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
