<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRiskLevelsResponseBody\riskLevelList;
use AlibabaCloud\Tea\Model;

class DescribeRiskLevelsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 136082B3-B21F-5E9D-B68E-991FFD205D24
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of sensitivity levels.
     *
     * @var riskLevelList[]
     */
    public $riskLevelList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'riskLevelList' => 'RiskLevelList',
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
        if (null !== $this->riskLevelList) {
            $res['RiskLevelList'] = [];
            if (null !== $this->riskLevelList && \is_array($this->riskLevelList)) {
                $n = 0;
                foreach ($this->riskLevelList as $item) {
                    $res['RiskLevelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiskLevelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskLevelList'])) {
            if (!empty($map['RiskLevelList'])) {
                $model->riskLevelList = [];
                $n                    = 0;
                foreach ($map['RiskLevelList'] as $item) {
                    $model->riskLevelList[$n++] = null !== $item ? riskLevelList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
