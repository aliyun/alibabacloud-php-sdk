<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway;

use AlibabaCloud\Dara\Model;

class fullNatTableIds extends Model
{
    /**
     * @var string[]
     */
    public $fullNatTableId;
    protected $_name = [
        'fullNatTableId' => 'FullNatTableId',
    ];

    public function validate()
    {
        if (\is_array($this->fullNatTableId)) {
            Model::validateArray($this->fullNatTableId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullNatTableId) {
            if (\is_array($this->fullNatTableId)) {
                $res['FullNatTableId'] = [];
                $n1 = 0;
                foreach ($this->fullNatTableId as $item1) {
                    $res['FullNatTableId'][$n1++] = $item1;
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
        if (isset($map['FullNatTableId'])) {
            if (!empty($map['FullNatTableId'])) {
                $model->fullNatTableId = [];
                $n1 = 0;
                foreach ($map['FullNatTableId'] as $item1) {
                    $model->fullNatTableId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
