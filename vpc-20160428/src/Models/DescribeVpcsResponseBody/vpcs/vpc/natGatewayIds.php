<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->natGatewayIds)) {
            Model::validateArray($this->natGatewayIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->natGatewayIds) {
            if (\is_array($this->natGatewayIds)) {
                $res['NatGatewayIds'] = [];
                $n1                   = 0;
                foreach ($this->natGatewayIds as $item1) {
                    $res['NatGatewayIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['NatGatewayIds'])) {
            if (!empty($map['NatGatewayIds'])) {
                $model->natGatewayIds = [];
                $n1                   = 0;
                foreach ($map['NatGatewayIds'] as $item1) {
                    $model->natGatewayIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
