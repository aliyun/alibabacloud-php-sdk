<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AssignPrivateIpAddressesResponseBody\assignedPrivateIpAddressesSet;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4Prefixes) {
            $res['Ipv4Prefixes'] = $this->ipv4Prefixes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv4PrefixSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4Prefixes'])) {
            if (!empty($map['Ipv4Prefixes'])) {
                $model->ipv4Prefixes = $map['Ipv4Prefixes'];
            }
        }

        return $model;
    }
}
