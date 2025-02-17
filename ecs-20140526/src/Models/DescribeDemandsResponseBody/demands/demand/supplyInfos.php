<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponseBody\demands\demand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponseBody\demands\demand\supplyInfos\supplyInfo;

class supplyInfos extends Model
{
    /**
     * @var supplyInfo[]
     */
    public $supplyInfo;
    protected $_name = [
        'supplyInfo' => 'SupplyInfo',
    ];

    public function validate()
    {
        if (\is_array($this->supplyInfo)) {
            Model::validateArray($this->supplyInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supplyInfo) {
            if (\is_array($this->supplyInfo)) {
                $res['SupplyInfo'] = [];
                $n1                = 0;
                foreach ($this->supplyInfo as $item1) {
                    $res['SupplyInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupplyInfo'])) {
            if (!empty($map['SupplyInfo'])) {
                $model->supplyInfo = [];
                $n1                = 0;
                foreach ($map['SupplyInfo'] as $item1) {
                    $model->supplyInfo[$n1++] = supplyInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
