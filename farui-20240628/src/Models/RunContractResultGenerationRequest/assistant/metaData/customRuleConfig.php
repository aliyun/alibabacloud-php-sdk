<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant\metaData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant\metaData\customRuleConfig\customRules;

class customRuleConfig extends Model
{
    /**
     * @var customRules[]
     */
    public $customRules;
    protected $_name = [
        'customRules' => 'customRules',
    ];

    public function validate()
    {
        if (\is_array($this->customRules)) {
            Model::validateArray($this->customRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customRules) {
            if (\is_array($this->customRules)) {
                $res['customRules'] = [];
                $n1 = 0;
                foreach ($this->customRules as $item1) {
                    $res['customRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['customRules'])) {
            if (!empty($map['customRules'])) {
                $model->customRules = [];
                $n1 = 0;
                foreach ($map['customRules'] as $item1) {
                    $model->customRules[$n1] = customRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
