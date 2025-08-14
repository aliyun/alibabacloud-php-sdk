<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeCfwRiskLevelSummaryResponseBody\riskList;

class DescribeCfwRiskLevelSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskList[]
     */
    public $riskList;
    protected $_name = [
        'requestId' => 'RequestId',
        'riskList' => 'RiskList',
    ];

    public function validate()
    {
        if (\is_array($this->riskList)) {
            Model::validateArray($this->riskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskList) {
            if (\is_array($this->riskList)) {
                $res['RiskList'] = [];
                $n1 = 0;
                foreach ($this->riskList as $item1) {
                    $res['RiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['RiskList'])) {
            if (!empty($map['RiskList'])) {
                $model->riskList = [];
                $n1 = 0;
                foreach ($map['RiskList'] as $item1) {
                    $model->riskList[$n1] = riskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
