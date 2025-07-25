<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayIntranetLinkedVpcPeerResponseBody;

use AlibabaCloud\SDK\Eas\V20210701\Models\ListGatewayIntranetLinkedVpcPeerResponseBody\peerVpcList\peerVpcs;
use AlibabaCloud\Tea\Model;

class peerVpcList extends Model
{
    /**
     * @description The IDs of the VPC peers.
     *
     * @var peerVpcs[]
     */
    public $peerVpcs;

    /**
     * @description The VPC ID.
     *
     * @example vpc-2zetuli9ws0qgjd******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'peerVpcs' => 'PeerVpcs',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->peerVpcs) {
            $res['PeerVpcs'] = [];
            if (null !== $this->peerVpcs && \is_array($this->peerVpcs)) {
                $n = 0;
                foreach ($this->peerVpcs as $item) {
                    $res['PeerVpcs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return peerVpcList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeerVpcs'])) {
            if (!empty($map['PeerVpcs'])) {
                $model->peerVpcs = [];
                $n = 0;
                foreach ($map['PeerVpcs'] as $item) {
                    $model->peerVpcs[$n++] = null !== $item ? peerVpcs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
