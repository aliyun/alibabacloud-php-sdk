<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway;

use AlibabaCloud\Dara\Model;

class snatTableIds extends Model
{
    /**
     * @var string[]
     */
    public $snatTableId;
    protected $_name = [
        'snatTableId' => 'SnatTableId',
    ];

    public function validate()
    {
        if (\is_array($this->snatTableId)) {
            Model::validateArray($this->snatTableId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snatTableId) {
            if (\is_array($this->snatTableId)) {
                $res['SnatTableId'] = [];
                $n1 = 0;
                foreach ($this->snatTableId as $item1) {
                    $res['SnatTableId'][$n1++] = $item1;
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
        if (isset($map['SnatTableId'])) {
            if (!empty($map['SnatTableId'])) {
                $model->snatTableId = [];
                $n1 = 0;
                foreach ($map['SnatTableId'] as $item1) {
                    $model->snatTableId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
