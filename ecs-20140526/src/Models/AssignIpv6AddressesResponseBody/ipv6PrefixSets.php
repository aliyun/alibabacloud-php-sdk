<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AssignIpv6AddressesResponseBody;

use AlibabaCloud\Dara\Model;

class ipv6PrefixSets extends Model
{
    /**
     * @var string[]
     */
    public $ipv6Prefix;
    protected $_name = [
        'ipv6Prefix' => 'Ipv6Prefix',
    ];

    public function validate()
    {
        if (\is_array($this->ipv6Prefix)) {
            Model::validateArray($this->ipv6Prefix);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6Prefix) {
            if (\is_array($this->ipv6Prefix)) {
                $res['Ipv6Prefix'] = [];
                $n1 = 0;
                foreach ($this->ipv6Prefix as $item1) {
                    $res['Ipv6Prefix'][$n1] = $item1;
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
        if (isset($map['Ipv6Prefix'])) {
            if (!empty($map['Ipv6Prefix'])) {
                $model->ipv6Prefix = [];
                $n1 = 0;
                foreach ($map['Ipv6Prefix'] as $item1) {
                    $model->ipv6Prefix[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
