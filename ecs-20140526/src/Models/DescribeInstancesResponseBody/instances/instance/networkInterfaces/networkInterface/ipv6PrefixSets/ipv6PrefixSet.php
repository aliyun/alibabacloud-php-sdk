<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces\networkInterface\ipv6PrefixSets;

use AlibabaCloud\Dara\Model;

class ipv6PrefixSet extends Model
{
    /**
     * @var string
     */
    public $ipv6Prefix;
    protected $_name = [
        'ipv6Prefix' => 'Ipv6Prefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6Prefix) {
            $res['Ipv6Prefix'] = $this->ipv6Prefix;
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
            $model->ipv6Prefix = $map['Ipv6Prefix'];
        }

        return $model;
    }
}
