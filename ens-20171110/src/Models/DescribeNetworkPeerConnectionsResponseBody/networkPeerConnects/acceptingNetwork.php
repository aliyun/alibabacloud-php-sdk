<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkPeerConnectionsResponseBody\networkPeerConnects;

use AlibabaCloud\Dara\Model;

class acceptingNetwork extends Model
{
    /**
     * @var string[]
     */
    public $ipv4Cidrs;

    /**
     * @var string
     */
    public $networkId;
    protected $_name = [
        'ipv4Cidrs' => 'Ipv4Cidrs',
        'networkId' => 'NetworkId',
    ];

    public function validate()
    {
        if (\is_array($this->ipv4Cidrs)) {
            Model::validateArray($this->ipv4Cidrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4Cidrs) {
            if (\is_array($this->ipv4Cidrs)) {
                $res['Ipv4Cidrs'] = [];
                $n1 = 0;
                foreach ($this->ipv4Cidrs as $item1) {
                    $res['Ipv4Cidrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
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
        if (isset($map['Ipv4Cidrs'])) {
            if (!empty($map['Ipv4Cidrs'])) {
                $model->ipv4Cidrs = [];
                $n1 = 0;
                foreach ($map['Ipv4Cidrs'] as $item1) {
                    $model->ipv4Cidrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        return $model;
    }
}
