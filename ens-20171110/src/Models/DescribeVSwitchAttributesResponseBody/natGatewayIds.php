<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchAttributesResponseBody;

use AlibabaCloud\Dara\Model;

class natGatewayIds extends Model
{
    /**
     * @var string[]
     */
    public $natGatewayId;
    protected $_name = [
        'natGatewayId' => 'NatGatewayId',
    ];

    public function validate()
    {
        if (\is_array($this->natGatewayId)) {
            Model::validateArray($this->natGatewayId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->natGatewayId) {
            if (\is_array($this->natGatewayId)) {
                $res['NatGatewayId'] = [];
                $n1 = 0;
                foreach ($this->natGatewayId as $item1) {
                    $res['NatGatewayId'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['NatGatewayId'])) {
            if (!empty($map['NatGatewayId'])) {
                $model->natGatewayId = [];
                $n1 = 0;
                foreach ($map['NatGatewayId'] as $item1) {
                    $model->natGatewayId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
