<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantSagVbrRulesResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantSagVbrRulesResponseBody\grantRules\grantRule;
use AlibabaCloud\Tea\Model;

class grantRules extends Model
{
    /**
     * @var grantRule[]
     */
    public $grantRule;
    protected $_name = [
        'grantRule' => 'GrantRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantRule) {
            $res['GrantRule'] = [];
            if (null !== $this->grantRule && \is_array($this->grantRule)) {
                $n = 0;
                foreach ($this->grantRule as $item) {
                    $res['GrantRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return grantRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantRule'])) {
            if (!empty($map['GrantRule'])) {
                $model->grantRule = [];
                $n                = 0;
                foreach ($map['GrantRule'] as $item) {
                    $model->grantRule[$n++] = null !== $item ? grantRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
