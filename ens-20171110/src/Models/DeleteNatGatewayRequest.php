<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteNatGatewayRequest extends Model
{
    /**
     * @var bool
     */
    public $forceDelete;

    /**
     * @description The ID of the NAT gateway that you want to delete.
     *
     * This parameter is required.
     *
     * @example nat-5t7nh1cfm6kxiszlttr38****
     *
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'forceDelete' => 'ForceDelete',
        'natGatewayId' => 'NatGatewayId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceDelete) {
            $res['ForceDelete'] = $this->forceDelete;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNatGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForceDelete'])) {
            $model->forceDelete = $map['ForceDelete'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        return $model;
    }
}
