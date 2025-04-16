<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponseBody\assignedPrivateIpAddressesSet;

use AlibabaCloud\Dara\Model;

class ipv4PrefixSet extends Model
{
    /**
     * @var string[]
     */
    public $ipv4Prefixes;
    protected $_name = [
        'ipv4Prefixes' => 'Ipv4Prefixes',
    ];

    public function validate()
    {
        if (\is_array($this->ipv4Prefixes)) {
            Model::validateArray($this->ipv4Prefixes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4Prefixes) {
            if (\is_array($this->ipv4Prefixes)) {
                $res['Ipv4Prefixes'] = [];
                $n1 = 0;
                foreach ($this->ipv4Prefixes as $item1) {
                    $res['Ipv4Prefixes'][$n1++] = $item1;
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
        if (isset($map['Ipv4Prefixes'])) {
            if (!empty($map['Ipv4Prefixes'])) {
                $model->ipv4Prefixes = [];
                $n1 = 0;
                foreach ($map['Ipv4Prefixes'] as $item1) {
                    $model->ipv4Prefixes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
