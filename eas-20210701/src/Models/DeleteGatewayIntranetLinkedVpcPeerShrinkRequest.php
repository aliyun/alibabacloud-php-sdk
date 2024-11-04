<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewayIntranetLinkedVpcPeerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $peerVpcsShrink;

    /**
     * @example vpc-2zetuli9ws0qgjd******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'peerVpcsShrink' => 'PeerVpcs',
        'vpcId'          => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->peerVpcsShrink) {
            $res['PeerVpcs'] = $this->peerVpcsShrink;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGatewayIntranetLinkedVpcPeerShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeerVpcs'])) {
            $model->peerVpcsShrink = $map['PeerVpcs'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
