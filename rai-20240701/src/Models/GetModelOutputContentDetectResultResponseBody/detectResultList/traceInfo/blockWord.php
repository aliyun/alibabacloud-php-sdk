<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetModelOutputContentDetectResultResponseBody\detectResultList\traceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\GetModelOutputContentDetectResultResponseBody\detectResultList\traceInfo\blockWord\blockWordGroupInfoList;

class blockWord extends Model
{
    /**
     * @var blockWordGroupInfoList[]
     */
    public $blockWordGroupInfoList;

    /**
     * @var int
     */
    public $riskResult;
    protected $_name = [
        'blockWordGroupInfoList' => 'BlockWordGroupInfoList',
        'riskResult' => 'RiskResult',
    ];

    public function validate()
    {
        if (\is_array($this->blockWordGroupInfoList)) {
            Model::validateArray($this->blockWordGroupInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockWordGroupInfoList) {
            if (\is_array($this->blockWordGroupInfoList)) {
                $res['BlockWordGroupInfoList'] = [];
                $n1 = 0;
                foreach ($this->blockWordGroupInfoList as $item1) {
                    $res['BlockWordGroupInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskResult) {
            $res['RiskResult'] = $this->riskResult;
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
        if (isset($map['BlockWordGroupInfoList'])) {
            if (!empty($map['BlockWordGroupInfoList'])) {
                $model->blockWordGroupInfoList = [];
                $n1 = 0;
                foreach ($map['BlockWordGroupInfoList'] as $item1) {
                    $model->blockWordGroupInfoList[$n1] = blockWordGroupInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskResult'])) {
            $model->riskResult = $map['RiskResult'];
        }

        return $model;
    }
}
