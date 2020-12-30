<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePbrRulesResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePbrRulesResponseBody\pbrRules\pbrRule;
use AlibabaCloud\Tea\Model;

class pbrRules extends Model
{
    /**
     * @var pbrRule[]
     */
    public $pbrRule;
    protected $_name = [
        'pbrRule' => 'PbrRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pbrRule) {
            $res['PbrRule'] = [];
            if (null !== $this->pbrRule && \is_array($this->pbrRule)) {
                $n = 0;
                foreach ($this->pbrRule as $item) {
                    $res['PbrRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pbrRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PbrRule'])) {
            if (!empty($map['PbrRule'])) {
                $model->pbrRule = [];
                $n              = 0;
                foreach ($map['PbrRule'] as $item) {
                    $model->pbrRule[$n++] = null !== $item ? pbrRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
