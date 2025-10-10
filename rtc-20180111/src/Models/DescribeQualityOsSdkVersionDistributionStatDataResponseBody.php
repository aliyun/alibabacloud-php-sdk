<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeQualityOsSdkVersionDistributionStatDataResponseBody\qualityOsSdkVersionStatDataList;

class DescribeQualityOsSdkVersionDistributionStatDataResponseBody extends Model
{
    /**
     * @var qualityOsSdkVersionStatDataList[]
     */
    public $qualityOsSdkVersionStatDataList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qualityOsSdkVersionStatDataList' => 'QualityOsSdkVersionStatDataList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->qualityOsSdkVersionStatDataList)) {
            Model::validateArray($this->qualityOsSdkVersionStatDataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualityOsSdkVersionStatDataList) {
            if (\is_array($this->qualityOsSdkVersionStatDataList)) {
                $res['QualityOsSdkVersionStatDataList'] = [];
                $n1 = 0;
                foreach ($this->qualityOsSdkVersionStatDataList as $item1) {
                    $res['QualityOsSdkVersionStatDataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['QualityOsSdkVersionStatDataList'])) {
            if (!empty($map['QualityOsSdkVersionStatDataList'])) {
                $model->qualityOsSdkVersionStatDataList = [];
                $n1 = 0;
                foreach ($map['QualityOsSdkVersionStatDataList'] as $item1) {
                    $model->qualityOsSdkVersionStatDataList[$n1] = qualityOsSdkVersionStatDataList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
