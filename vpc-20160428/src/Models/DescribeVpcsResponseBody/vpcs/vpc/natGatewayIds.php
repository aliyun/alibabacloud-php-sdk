<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc;

use AlibabaCloud\Tea\Model;

class natGatewayIds extends Model
{
    /**
     * @var string[]
     */
    public $natGatewayIds;
    protected $_name = [
        'natGatewayIds' => 'NatGatewayIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natGatewayIds) {
            $res['NatGatewayIds'] = $this->natGatewayIds;
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
        if (isset($map['NatGatewayIds'])) {
            if (!empty($map['NatGatewayIds'])) {
                $model->natGatewayIds = $map['NatGatewayIds'];
            }
        }

        return $model;
    }
}
