<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateGatewayIntranetLinkedVpcPeerRequest;

use AlibabaCloud\Dara\Model;

class peerVpcs extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'region' => 'Region',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
