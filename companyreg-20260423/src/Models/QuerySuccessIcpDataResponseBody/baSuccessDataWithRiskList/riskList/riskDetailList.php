<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20260423\Models\QuerySuccessIcpDataResponseBody\baSuccessDataWithRiskList\riskList;

use AlibabaCloud\Dara\Model;

class riskDetailList extends Model
{
    /**
     * @var string[]
     */
    public $rectifySuggestList;

    /**
     * @var string
     */
    public $riskSource;
    protected $_name = [
        'rectifySuggestList' => 'RectifySuggestList',
        'riskSource' => 'RiskSource',
    ];

    public function validate()
    {
        if (\is_array($this->rectifySuggestList)) {
            Model::validateArray($this->rectifySuggestList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rectifySuggestList) {
            if (\is_array($this->rectifySuggestList)) {
                $res['RectifySuggestList'] = [];
                $n1 = 0;
                foreach ($this->rectifySuggestList as $item1) {
                    $res['RectifySuggestList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskSource) {
            $res['RiskSource'] = $this->riskSource;
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
        if (isset($map['RectifySuggestList'])) {
            if (!empty($map['RectifySuggestList'])) {
                $model->rectifySuggestList = [];
                $n1 = 0;
                foreach ($map['RectifySuggestList'] as $item1) {
                    $model->rectifySuggestList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskSource'])) {
            $model->riskSource = $map['RiskSource'];
        }

        return $model;
    }
}
