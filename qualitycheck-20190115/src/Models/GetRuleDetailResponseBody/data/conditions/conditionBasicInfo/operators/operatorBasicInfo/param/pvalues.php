<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Dara\Model;

class pvalues extends Model
{
    /**
     * @var string[]
     */
    public $pvalues;
    protected $_name = [
        'pvalues' => 'Pvalues',
    ];

    public function validate()
    {
        if (\is_array($this->pvalues)) {
            Model::validateArray($this->pvalues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pvalues) {
            if (\is_array($this->pvalues)) {
                $res['Pvalues'] = [];
                $n1 = 0;
                foreach ($this->pvalues as $item1) {
                    $res['Pvalues'][$n1] = $item1;
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
        if (isset($map['Pvalues'])) {
            if (!empty($map['Pvalues'])) {
                $model->pvalues = [];
                $n1 = 0;
                foreach ($map['Pvalues'] as $item1) {
                    $model->pvalues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
