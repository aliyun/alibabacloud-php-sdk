<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayIntranetLinkedVpcPeerResponseBody\peerVpcList;

class ListGatewayIntranetLinkedVpcPeerResponseBody extends Model
{
    /**
     * @var string
     */
    public $gatewayId;
    /**
     * @var peerVpcList[]
     */
    public $peerVpcList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gatewayId'   => 'GatewayId',
        'peerVpcList' => 'PeerVpcList',
        'requestId'   => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->peerVpcList)) {
            Model::validateArray($this->peerVpcList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->peerVpcList) {
            if (\is_array($this->peerVpcList)) {
                $res['PeerVpcList'] = [];
                $n1                 = 0;
                foreach ($this->peerVpcList as $item1) {
                    $res['PeerVpcList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['PeerVpcList'])) {
            if (!empty($map['PeerVpcList'])) {
                $model->peerVpcList = [];
                $n1                 = 0;
                foreach ($map['PeerVpcList'] as $item1) {
                    $model->peerVpcList[$n1++] = peerVpcList::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
