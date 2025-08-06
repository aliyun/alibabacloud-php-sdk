<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway;

class natGateways extends Model
{
    /**
     * @var natGateway[]
     */
    public $natGateway;
    protected $_name = [
        'natGateway' => 'NatGateway',
    ];

    public function validate()
    {
        if (\is_array($this->natGateway)) {
            Model::validateArray($this->natGateway);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->natGateway) {
            if (\is_array($this->natGateway)) {
                $res['NatGateway'] = [];
                $n1 = 0;
                foreach ($this->natGateway as $item1) {
                    $res['NatGateway'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NatGateway'])) {
            if (!empty($map['NatGateway'])) {
                $model->natGateway = [];
                $n1 = 0;
                foreach ($map['NatGateway'] as $item1) {
                    $model->natGateway[$n1] = natGateway::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
