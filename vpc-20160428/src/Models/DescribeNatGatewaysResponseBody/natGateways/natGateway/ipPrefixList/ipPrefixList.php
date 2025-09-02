<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\ipPrefixList;

use AlibabaCloud\Dara\Model;

class ipPrefixList extends Model
{
    /**
     * @var string
     */
    public $ipPrefix;
    protected $_name = [
        'ipPrefix' => 'IpPrefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipPrefix) {
            $res['IpPrefix'] = $this->ipPrefix;
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
        if (isset($map['IpPrefix'])) {
            $model->ipPrefix = $map['IpPrefix'];
        }

        return $model;
    }
}
