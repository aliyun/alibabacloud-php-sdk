<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitResponseBody\data\costUnitDtoList;

class data extends Model
{
    /**
     * @var costUnitDtoList[]
     */
    public $costUnitDtoList;
    protected $_name = [
        'costUnitDtoList' => 'CostUnitDtoList',
    ];

    public function validate()
    {
        if (\is_array($this->costUnitDtoList)) {
            Model::validateArray($this->costUnitDtoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costUnitDtoList) {
            if (\is_array($this->costUnitDtoList)) {
                $res['CostUnitDtoList'] = [];
                $n1 = 0;
                foreach ($this->costUnitDtoList as $item1) {
                    $res['CostUnitDtoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CostUnitDtoList'])) {
            if (!empty($map['CostUnitDtoList'])) {
                $model->costUnitDtoList = [];
                $n1 = 0;
                foreach ($map['CostUnitDtoList'] as $item1) {
                    $model->costUnitDtoList[$n1] = costUnitDtoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
