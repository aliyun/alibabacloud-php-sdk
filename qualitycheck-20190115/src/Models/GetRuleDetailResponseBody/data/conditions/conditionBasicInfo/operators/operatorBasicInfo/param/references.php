<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\operators\operatorBasicInfo\param;

use AlibabaCloud\Dara\Model;

class references extends Model
{
    /**
     * @var string[]
     */
    public $reference;
    protected $_name = [
        'reference' => 'Reference',
    ];

    public function validate()
    {
        if (\is_array($this->reference)) {
            Model::validateArray($this->reference);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reference) {
            if (\is_array($this->reference)) {
                $res['Reference'] = [];
                $n1 = 0;
                foreach ($this->reference as $item1) {
                    $res['Reference'][$n1++] = $item1;
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
        if (isset($map['Reference'])) {
            if (!empty($map['Reference'])) {
                $model->reference = [];
                $n1 = 0;
                foreach ($map['Reference'] as $item1) {
                    $model->reference[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
