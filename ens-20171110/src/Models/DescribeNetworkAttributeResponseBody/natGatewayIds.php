<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class natGatewayIds extends Model
{
    /**
     * @var string[]
     */
    public $natGatewayId;
    protected $_name = [
        'natGatewayId' => 'NatGatewayId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGatewayIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatGatewayId'])) {
            if (!empty($map['NatGatewayId'])) {
                $model->natGatewayId = $map['NatGatewayId'];
            }
        }

        return $model;
    }
}
