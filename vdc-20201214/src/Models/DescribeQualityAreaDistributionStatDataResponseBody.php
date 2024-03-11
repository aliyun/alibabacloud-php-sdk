<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityAreaDistributionStatDataResponseBody\qualityStatDataList;
use AlibabaCloud\Tea\Model;

class DescribeQualityAreaDistributionStatDataResponseBody extends Model
{
    /**
     * @var qualityStatDataList[]
     */
    public $qualityStatDataList;

    /**
     * @example 5295429E-9E9E-4F79-B814-70D71B8554EB
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
     * @return DescribeQualityAreaDistributionStatDataResponseBody
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
