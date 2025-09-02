<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection;

class vpnConnections extends Model
{
    /**
     * @var vpnConnection[]
     */
    public $vpnConnection;
    protected $_name = [
        'vpnConnection' => 'VpnConnection',
    ];

    public function validate()
    {
        if (\is_array($this->vpnConnection)) {
            Model::validateArray($this->vpnConnection);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpnConnection) {
            if (\is_array($this->vpnConnection)) {
                $res['VpnConnection'] = [];
                $n1 = 0;
                foreach ($this->vpnConnection as $item1) {
                    $res['VpnConnection'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VpnConnection'])) {
            if (!empty($map['VpnConnection'])) {
                $model->vpnConnection = [];
                $n1 = 0;
                foreach ($map['VpnConnection'] as $item1) {
                    $model->vpnConnection[$n1] = vpnConnection::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
