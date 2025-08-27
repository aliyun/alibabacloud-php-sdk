<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardRelateQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardRelateQueryResponseBody\module\reserveBindEntityList;

class module extends Model
{
    /**
     * @var reserveBindEntityList[]
     */
    public $reserveBindEntityList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'reserveBindEntityList' => 'reserve_bind_entity_list',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->reserveBindEntityList)) {
            Model::validateArray($this->reserveBindEntityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reserveBindEntityList) {
            if (\is_array($this->reserveBindEntityList)) {
                $res['reserve_bind_entity_list'] = [];
                $n1 = 0;
                foreach ($this->reserveBindEntityList as $item1) {
                    $res['reserve_bind_entity_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['reserve_bind_entity_list'])) {
            if (!empty($map['reserve_bind_entity_list'])) {
                $model->reserveBindEntityList = [];
                $n1 = 0;
                foreach ($map['reserve_bind_entity_list'] as $item1) {
                    $model->reserveBindEntityList[$n1] = reserveBindEntityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
