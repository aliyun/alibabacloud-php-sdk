<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces\associateNetworkInterface\IPv4Sets;

use AlibabaCloud\Dara\Model;

class IPv4Set extends Model
{
    /**
     * @var string
     */
    public $IPv4Address;
    /**
     * @var bool
     */
    public $primary;
    protected $_name = [
        'IPv4Address' => 'IPv4Address',
        'primary'     => 'Primary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IPv4Address) {
            $res['IPv4Address'] = $this->IPv4Address;
        }

        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
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
        if (isset($map['IPv4Address'])) {
            $model->IPv4Address = $map['IPv4Address'];
        }

        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }

        return $model;
    }
}
