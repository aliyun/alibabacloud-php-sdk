<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayIntranetLinkedVpcPeerResponseBody\peerVpcList;
use AlibabaCloud\Tea\Model;

class ListGatewayIntranetLinkedVpcPeerResponseBody extends Model
{
    /**
     * @description The ID of the private gateway.
     *
     * @example gw-1uhcqmsc7x22******
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description The list of VPC peers.
     *
     * @var peerVpcList[]
     */
    public $peerVpcList;

    /**
     * @description The ID of the request.
     *
     * @example 40325405-579C-4D82****
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->peerVpcList) {
            $res['PeerVpcList'] = [];
            if (null !== $this->peerVpcList && \is_array($this->peerVpcList)) {
                $n = 0;
                foreach ($this->peerVpcList as $item) {
                    $res['PeerVpcList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGatewayIntranetLinkedVpcPeerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['PeerVpcList'])) {
            if (!empty($map['PeerVpcList'])) {
                $model->peerVpcList = [];
                $n                  = 0;
                foreach ($map['PeerVpcList'] as $item) {
                    $model->peerVpcList[$n++] = null !== $item ? peerVpcList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
