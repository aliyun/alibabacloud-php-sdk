<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCNetworkInterfacesResponseBody\networkInterfaceSets;

use AlibabaCloud\Dara\Model;

class ipv6Sets extends Model
{
    /**
     * @var string
     */
    public $ipv6Address;
    protected $_name = [
        'ipv6Address' => 'Ipv6Address',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
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
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }

        return $model;
    }
}
