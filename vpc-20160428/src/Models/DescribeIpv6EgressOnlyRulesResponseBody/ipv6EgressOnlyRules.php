<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6EgressOnlyRulesResponseBody\ipv6EgressOnlyRules\ipv6EgressOnlyRule;

class ipv6EgressOnlyRules extends Model
{
    /**
     * @var ipv6EgressOnlyRule[]
     */
    public $ipv6EgressOnlyRule;
    protected $_name = [
        'ipv6EgressOnlyRule' => 'Ipv6EgressOnlyRule',
    ];

    public function validate()
    {
        if (\is_array($this->ipv6EgressOnlyRule)) {
            Model::validateArray($this->ipv6EgressOnlyRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6EgressOnlyRule) {
            if (\is_array($this->ipv6EgressOnlyRule)) {
                $res['Ipv6EgressOnlyRule'] = [];
                $n1 = 0;
                foreach ($this->ipv6EgressOnlyRule as $item1) {
                    $res['Ipv6EgressOnlyRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv6EgressOnlyRule'])) {
            if (!empty($map['Ipv6EgressOnlyRule'])) {
                $model->ipv6EgressOnlyRule = [];
                $n1 = 0;
                foreach ($map['Ipv6EgressOnlyRule'] as $item1) {
                    $model->ipv6EgressOnlyRule[$n1++] = ipv6EgressOnlyRule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
