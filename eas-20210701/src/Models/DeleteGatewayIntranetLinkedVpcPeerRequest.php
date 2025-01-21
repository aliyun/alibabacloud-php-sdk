<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\DeleteGatewayIntranetLinkedVpcPeerRequest\peerVpcs;

class DeleteGatewayIntranetLinkedVpcPeerRequest extends Model
{
    /**
     * @var peerVpcs[]
     */
    public $peerVpcs;
    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'peerVpcs' => 'PeerVpcs',
        'vpcId'    => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->peerVpcs)) {
            Model::validateArray($this->peerVpcs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->peerVpcs) {
            if (\is_array($this->peerVpcs)) {
                $res['PeerVpcs'] = [];
                $n1              = 0;
                foreach ($this->peerVpcs as $item1) {
                    $res['PeerVpcs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['PeerVpcs'])) {
                $model->peerVpcs = [];
                $n1              = 0;
                foreach ($map['PeerVpcs'] as $item1) {
                    $model->peerVpcs[$n1++] = peerVpcs::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
