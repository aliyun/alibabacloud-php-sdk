<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePolicyBasedRoutingsResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePolicyBasedRoutingsResponseBody\policyBasedRoutings\policyBasedRouting;
use AlibabaCloud\Tea\Model;

class policyBasedRoutings extends Model
{
    /**
     * @var policyBasedRouting[]
     */
    public $policyBasedRouting;
    protected $_name = [
        'policyBasedRouting' => 'PolicyBasedRouting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyBasedRouting) {
            $res['PolicyBasedRouting'] = [];
            if (null !== $this->policyBasedRouting && \is_array($this->policyBasedRouting)) {
                $n = 0;
                foreach ($this->policyBasedRouting as $item) {
                    $res['PolicyBasedRouting'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyBasedRoutings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyBasedRouting'])) {
            if (!empty($map['PolicyBasedRouting'])) {
                $model->policyBasedRouting = [];
                $n                         = 0;
                foreach ($map['PolicyBasedRouting'] as $item) {
                    $model->policyBasedRouting[$n++] = null !== $item ? policyBasedRouting::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
