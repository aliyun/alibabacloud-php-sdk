<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\ipv4PrefixSets;

use AlibabaCloud\Dara\Model;

class ipv4PrefixSet extends Model
{
    /**
     * @var string
     */
    public $ipv4Prefix;
    protected $_name = [
        'ipv4Prefix' => 'Ipv4Prefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4Prefix) {
            $res['Ipv4Prefix'] = $this->ipv4Prefix;
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
        if (isset($map['Ipv4Prefix'])) {
            $model->ipv4Prefix = $map['Ipv4Prefix'];
        }

        return $model;
    }
}
