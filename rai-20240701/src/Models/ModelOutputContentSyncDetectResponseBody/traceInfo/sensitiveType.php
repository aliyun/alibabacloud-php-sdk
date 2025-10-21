<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectResponseBody\traceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectResponseBody\traceInfo\sensitiveType\sensitiveTypeInfoList;

class sensitiveType extends Model
{
    /**
     * @var string
     */
    public $maskedContent;

    /**
     * @var int
     */
    public $riskResult;

    /**
     * @var sensitiveTypeInfoList[]
     */
    public $sensitiveTypeInfoList;
    protected $_name = [
        'maskedContent' => 'MaskedContent',
        'riskResult' => 'RiskResult',
        'sensitiveTypeInfoList' => 'SensitiveTypeInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->sensitiveTypeInfoList)) {
            Model::validateArray($this->sensitiveTypeInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maskedContent) {
            $res['MaskedContent'] = $this->maskedContent;
        }

        if (null !== $this->riskResult) {
            $res['RiskResult'] = $this->riskResult;
        }

        if (null !== $this->sensitiveTypeInfoList) {
            if (\is_array($this->sensitiveTypeInfoList)) {
                $res['SensitiveTypeInfoList'] = [];
                $n1 = 0;
                foreach ($this->sensitiveTypeInfoList as $item1) {
                    $res['SensitiveTypeInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MaskedContent'])) {
            $model->maskedContent = $map['MaskedContent'];
        }

        if (isset($map['RiskResult'])) {
            $model->riskResult = $map['RiskResult'];
        }

        if (isset($map['SensitiveTypeInfoList'])) {
            if (!empty($map['SensitiveTypeInfoList'])) {
                $model->sensitiveTypeInfoList = [];
                $n1 = 0;
                foreach ($map['SensitiveTypeInfoList'] as $item1) {
                    $model->sensitiveTypeInfoList[$n1] = sensitiveTypeInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
