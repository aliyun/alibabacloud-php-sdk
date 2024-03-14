<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeCfwRiskLevelSummaryResponseBody\riskList;
use AlibabaCloud\Tea\Model;

class DescribeCfwRiskLevelSummaryResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example F1F30435-FA0A-52DA-A5DE-C16FD6C171DA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of risks.
     *
     * @var riskList[]
     */
    public $riskList;
    protected $_name = [
        'requestId' => 'RequestId',
        'riskList'  => 'RiskList',
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
        if (null !== $this->riskList) {
            $res['RiskList'] = [];
            if (null !== $this->riskList && \is_array($this->riskList)) {
                $n = 0;
                foreach ($this->riskList as $item) {
                    $res['RiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCfwRiskLevelSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskList'])) {
            if (!empty($map['RiskList'])) {
                $model->riskList = [];
                $n               = 0;
                foreach ($map['RiskList'] as $item) {
                    $model->riskList[$n++] = null !== $item ? riskList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
