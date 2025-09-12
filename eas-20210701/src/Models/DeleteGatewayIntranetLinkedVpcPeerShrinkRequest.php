<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DeleteGatewayIntranetLinkedVpcPeerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $peerVpcsShrink;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'peerVpcsShrink' => 'PeerVpcs',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
