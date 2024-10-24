<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewayAssociateNetworkInterfacesResponseBody\associateNetworkInterfaces\associateNetworkInterface\IPv4Sets;

use AlibabaCloud\Tea\Model;

class IPv4Set extends Model
{
    /**
     * @example ``172.17.**.**``
     *
     * @var string
     */
    public $IPv4Address;

    /**
     * @example true
     *
     * @var bool
     */
    public $primary;
    protected $_name = [
        'IPv4Address' => 'IPv4Address',
        'primary'     => 'Primary',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return IPv4Set
     */
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
