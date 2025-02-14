<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRiskLevelsResponseBody\riskLevelList;

class DescribeRiskLevelsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var riskLevelList[]
     */
    public $riskLevelList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'riskLevelList' => 'RiskLevelList',
    ];

    public function validate()
    {
        if (\is_array($this->riskLevelList)) {
            Model::validateArray($this->riskLevelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskLevelList) {
            if (\is_array($this->riskLevelList)) {
                $res['RiskLevelList'] = [];
                $n1                   = 0;
                foreach ($this->riskLevelList as $item1) {
                    $res['RiskLevelList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['RiskLevelList'])) {
            if (!empty($map['RiskLevelList'])) {
                $model->riskLevelList = [];
                $n1                   = 0;
                foreach ($map['RiskLevelList'] as $item1) {
                    $model->riskLevelList[$n1++] = riskLevelList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
