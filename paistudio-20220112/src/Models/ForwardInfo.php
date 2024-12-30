<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ForwardInfo extends Model
{
    /**
     * @var string
     */
    public $eipAllocationId;

    /**
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'eipAllocationId' => 'EipAllocationId',
        'natGatewayId'    => 'NatGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipAllocationId) {
            $res['EipAllocationId'] = $this->eipAllocationId;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ForwardInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipAllocationId'])) {
            $model->eipAllocationId = $map['EipAllocationId'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        return $model;
    }
}
