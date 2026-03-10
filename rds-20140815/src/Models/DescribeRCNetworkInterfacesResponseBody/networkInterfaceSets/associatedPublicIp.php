<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCNetworkInterfacesResponseBody\networkInterfaceSets;

use AlibabaCloud\Dara\Model;

class associatedPublicIp extends Model
{
    /**
     * @var string
     */
    public $publicIpAddress;
    protected $_name = [
        'publicIpAddress' => 'PublicIpAddress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
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
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }

        return $model;
    }
}
