<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityOsSdkVersionDistributionStatDataResponseBody\qualityOsSdkVersionStatDataList;
use AlibabaCloud\Tea\Model;

class DescribeQualityOsSdkVersionDistributionStatDataResponseBody extends Model
{
    /**
     * @var qualityOsSdkVersionStatDataList[]
     */
    public $qualityOsSdkVersionStatDataList;

    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qualityOsSdkVersionStatDataList' => 'QualityOsSdkVersionStatDataList',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualityOsSdkVersionStatDataList) {
            $res['QualityOsSdkVersionStatDataList'] = [];
            if (null !== $this->qualityOsSdkVersionStatDataList && \is_array($this->qualityOsSdkVersionStatDataList)) {
                $n = 0;
                foreach ($this->qualityOsSdkVersionStatDataList as $item) {
                    $res['QualityOsSdkVersionStatDataList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeQualityOsSdkVersionDistributionStatDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualityOsSdkVersionStatDataList'])) {
            if (!empty($map['QualityOsSdkVersionStatDataList'])) {
                $model->qualityOsSdkVersionStatDataList = [];
                $n                                      = 0;
                foreach ($map['QualityOsSdkVersionStatDataList'] as $item) {
                    $model->qualityOsSdkVersionStatDataList[$n++] = null !== $item ? qualityOsSdkVersionStatDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
