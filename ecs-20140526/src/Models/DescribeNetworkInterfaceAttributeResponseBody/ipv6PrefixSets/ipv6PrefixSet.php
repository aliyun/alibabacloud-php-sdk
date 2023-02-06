<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfaceAttributeResponseBody\ipv6PrefixSets;

use AlibabaCloud\Tea\Model;

class ipv6PrefixSet extends Model
{
    /**
     * @description > This parameter is in invitational preview and unavailable to general users.
     *
     * @example hide
     *
     * @var string
     */
    public $ipv6Prefix;
    protected $_name = [
        'ipv6Prefix' => 'Ipv6Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6Prefix) {
            $res['Ipv6Prefix'] = $this->ipv6Prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6PrefixSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6Prefix'])) {
            $model->ipv6Prefix = $map['Ipv6Prefix'];
        }

        return $model;
    }
}
