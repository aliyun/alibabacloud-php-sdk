<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataResponseBody\baSuccessDataWithRiskList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataResponseBody\baSuccessDataWithRiskList\riskList\riskDetailList;

class riskList extends Model
{
    /**
     * @var string
     */
    public $deadLine;

    /**
     * @var riskDetailList[]
     */
    public $riskDetailList;
    protected $_name = [
        'deadLine' => 'DeadLine',
        'riskDetailList' => 'RiskDetailList',
    ];

    public function validate()
    {
        if (\is_array($this->riskDetailList)) {
            Model::validateArray($this->riskDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deadLine) {
            $res['DeadLine'] = $this->deadLine;
        }

        if (null !== $this->riskDetailList) {
            if (\is_array($this->riskDetailList)) {
                $res['RiskDetailList'] = [];
                $n1 = 0;
                foreach ($this->riskDetailList as $item1) {
                    $res['RiskDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeadLine'])) {
            $model->deadLine = $map['DeadLine'];
        }

        if (isset($map['RiskDetailList'])) {
            if (!empty($map['RiskDetailList'])) {
                $model->riskDetailList = [];
                $n1 = 0;
                foreach ($map['RiskDetailList'] as $item1) {
                    $model->riskDetailList[$n1] = riskDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
