<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntRiskQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntRiskQueryResponseBody\result\riskList;

class result extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var riskList[]
     */
    public $riskList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'bizCode' => 'BizCode',
        'riskList' => 'RiskList',
        'status' => 'Status',
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
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
