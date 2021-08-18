<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityOverallDataResponseBody\qualityOverallData;
use AlibabaCloud\Tea\Model;

class DescribeQualityOverallDataResponseBody extends Model
{
    /**
     * @description 概览数据列表
     *
     * @var qualityOverallData[]
     */
    public $qualityOverallData;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qualityOverallData' => 'QualityOverallData',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualityOverallData) {
            $res['QualityOverallData'] = [];
            if (null !== $this->qualityOverallData && \is_array($this->qualityOverallData)) {
                $n = 0;
                foreach ($this->qualityOverallData as $item) {
                    $res['QualityOverallData'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeQualityOverallDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualityOverallData'])) {
            if (!empty($map['QualityOverallData'])) {
                $model->qualityOverallData = [];
                $n                         = 0;
                foreach ($map['QualityOverallData'] as $item) {
                    $model->qualityOverallData[$n++] = null !== $item ? qualityOverallData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
