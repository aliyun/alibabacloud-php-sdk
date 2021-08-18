<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisFactorDistributionStatResponseBody\statList;
use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisFactorDistributionStatResponseBody extends Model
{
    /**
     * @description 影响因素分布统计数据
     *
     * @var statList[]
     */
    public $statList;

    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'statList'  => 'StatList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statList) {
            $res['StatList'] = [];
            if (null !== $this->statList && \is_array($this->statList)) {
                $n = 0;
                foreach ($this->statList as $item) {
                    $res['StatList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeFaultDiagnosisFactorDistributionStatResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StatList'])) {
            if (!empty($map['StatList'])) {
                $model->statList = [];
                $n               = 0;
                foreach ($map['StatList'] as $item) {
                    $model->statList[$n++] = null !== $item ? statList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
