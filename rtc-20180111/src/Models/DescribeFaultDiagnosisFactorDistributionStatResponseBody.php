<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisFactorDistributionStatResponseBody\statList;

class DescribeFaultDiagnosisFactorDistributionStatResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var statList[]
     */
    public $statList;
    protected $_name = [
        'requestId' => 'RequestId',
        'statList' => 'StatList',
    ];

    public function validate()
    {
        if (\is_array($this->statList)) {
            Model::validateArray($this->statList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statList) {
            if (\is_array($this->statList)) {
                $res['StatList'] = [];
                $n1 = 0;
                foreach ($this->statList as $item1) {
                    $res['StatList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['StatList'])) {
            if (!empty($map['StatList'])) {
                $model->statList = [];
                $n1 = 0;
                foreach ($map['StatList'] as $item1) {
                    $model->statList[$n1] = statList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
