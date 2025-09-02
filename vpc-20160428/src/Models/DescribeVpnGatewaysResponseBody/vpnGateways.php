<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewaysResponseBody\vpnGateways\vpnGateway;

class vpnGateways extends Model
{
    /**
     * @var vpnGateway[]
     */
    public $vpnGateway;
    protected $_name = [
        'vpnGateway' => 'VpnGateway',
    ];

    public function validate()
    {
        if (\is_array($this->vpnGateway)) {
            Model::validateArray($this->vpnGateway);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpnGateway) {
            if (\is_array($this->vpnGateway)) {
                $res['VpnGateway'] = [];
                $n1 = 0;
                foreach ($this->vpnGateway as $item1) {
                    $res['VpnGateway'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VpnGateway'])) {
            if (!empty($map['VpnGateway'])) {
                $model->vpnGateway = [];
                $n1 = 0;
                foreach ($map['VpnGateway'] as $item1) {
                    $model->vpnGateway[$n1] = vpnGateway::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
