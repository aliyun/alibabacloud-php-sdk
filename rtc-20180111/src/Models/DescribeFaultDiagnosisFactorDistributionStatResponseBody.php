<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisFactorDistributionStatResponseBody\statList;
use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisFactorDistributionStatResponseBody extends Model
{
    /**
     * @example 231470C1-ACFB-4C9F-844F-4CFE1E3804C5
     *
     * @var string
     */
    public $requestId;

    /**
     * @var statList[]
     */
    public $statList;
    protected $_name = [
        'requestId' => 'RequestId',
        'statList'  => 'StatList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statList) {
            $res['StatList'] = [];
            if (null !== $this->statList && \is_array($this->statList)) {
                $n = 0;
                foreach ($this->statList as $item) {
                    $res['StatList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaultDiagnosisFactorDistributionStatResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatList'])) {
            if (!empty($map['StatList'])) {
                $model->statList = [];
                $n               = 0;
                foreach ($map['StatList'] as $item) {
                    $model->statList[$n++] = null !== $item ? statList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
