<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\tunnelOptionsSpecification\tunnelOptions;

class tunnelOptionsSpecification extends Model
{
    /**
     * @var tunnelOptions[]
     */
    public $tunnelOptions;
    protected $_name = [
        'tunnelOptions' => 'TunnelOptions',
    ];

    public function validate()
    {
        if (\is_array($this->tunnelOptions)) {
            Model::validateArray($this->tunnelOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tunnelOptions) {
            if (\is_array($this->tunnelOptions)) {
                $res['TunnelOptions'] = [];
                $n1 = 0;
                foreach ($this->tunnelOptions as $item1) {
                    $res['TunnelOptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['TunnelOptions'])) {
            if (!empty($map['TunnelOptions'])) {
                $model->tunnelOptions = [];
                $n1 = 0;
                foreach ($map['TunnelOptions'] as $item1) {
                    $model->tunnelOptions[$n1] = tunnelOptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
