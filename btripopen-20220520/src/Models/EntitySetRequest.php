<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntitySetRequest\entityDOList;

class EntitySetRequest extends Model
{
    /**
     * @var entityDOList[]
     */
    public $entityDOList;

    /**
     * @var string
     */
    public $thirdpartId;
    protected $_name = [
        'entityDOList' => 'entity_d_o_list',
        'thirdpartId' => 'thirdpart_id',
    ];

    public function validate()
    {
        if (\is_array($this->entityDOList)) {
            Model::validateArray($this->entityDOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityDOList) {
            if (\is_array($this->entityDOList)) {
                $res['entity_d_o_list'] = [];
                $n1 = 0;
                foreach ($this->entityDOList as $item1) {
                    $res['entity_d_o_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
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
        if (isset($map['entity_d_o_list'])) {
            if (!empty($map['entity_d_o_list'])) {
                $model->entityDOList = [];
                $n1 = 0;
                foreach ($map['entity_d_o_list'] as $item1) {
                    $model->entityDOList[$n1++] = entityDOList::fromMap($item1);
                }
            }
        }

        if (isset($map['thirdpart_id'])) {
            $model->thirdpartId = $map['thirdpart_id'];
        }

        return $model;
    }
}
