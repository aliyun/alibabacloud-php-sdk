<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityOverallDataResponseBody\qualityOverallData;

class DescribeQualityOverallDataResponseBody extends Model
{
    /**
     * @var qualityOverallData[]
     */
    public $qualityOverallData;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qualityOverallData' => 'QualityOverallData',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->qualityOverallData)) {
            Model::validateArray($this->qualityOverallData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualityOverallData) {
            if (\is_array($this->qualityOverallData)) {
                $res['QualityOverallData'] = [];
                $n1                        = 0;
                foreach ($this->qualityOverallData as $item1) {
                    $res['QualityOverallData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QualityOverallData'])) {
            if (!empty($map['QualityOverallData'])) {
                $model->qualityOverallData = [];
                $n1                        = 0;
                foreach ($map['QualityOverallData'] as $item1) {
                    $model->qualityOverallData[$n1++] = qualityOverallData::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
