<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant\metaData;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationRequest\assistant\metaData\customRuleConfig\customRules;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customRules) {
            $res['customRules'] = [];
            if (null !== $this->customRules && \is_array($this->customRules)) {
                $n = 0;
                foreach ($this->customRules as $item) {
                    $res['customRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customRuleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['customRules'])) {
            if (!empty($map['customRules'])) {
                $model->customRules = [];
                $n                  = 0;
                foreach ($map['customRules'] as $item) {
                    $model->customRules[$n++] = null !== $item ? customRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
