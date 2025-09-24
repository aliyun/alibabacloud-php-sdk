<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitRequest\unitEntityList;

class ModifyCostUnitRequest extends Model
{
    /**
     * @var unitEntityList[]
     */
    public $unitEntityList;
    protected $_name = [
        'unitEntityList' => 'UnitEntityList',
    ];

    public function validate()
    {
        if (\is_array($this->unitEntityList)) {
            Model::validateArray($this->unitEntityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->unitEntityList) {
            if (\is_array($this->unitEntityList)) {
                $res['UnitEntityList'] = [];
                $n1 = 0;
                foreach ($this->unitEntityList as $item1) {
                    $res['UnitEntityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UnitEntityList'])) {
            if (!empty($map['UnitEntityList'])) {
                $model->unitEntityList = [];
                $n1 = 0;
                foreach ($map['UnitEntityList'] as $item1) {
                    $model->unitEntityList[$n1] = unitEntityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
