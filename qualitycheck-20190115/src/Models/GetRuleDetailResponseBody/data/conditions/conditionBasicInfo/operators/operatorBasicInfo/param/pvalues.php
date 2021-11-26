<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pvalues) {
            $res['Pvalues'] = $this->pvalues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pvalues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pvalues'])) {
            if (!empty($map['Pvalues'])) {
                $model->pvalues = $map['Pvalues'];
            }
        }

        return $model;
    }
}
