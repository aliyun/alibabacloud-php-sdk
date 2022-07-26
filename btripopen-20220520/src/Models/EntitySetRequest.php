<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntitySetRequest\entityDOList;
use AlibabaCloud\Tea\Model;

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

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'entityDOList' => 'entity_d_o_list',
        'thirdpartId'  => 'thirdpart_id',
        'userId'       => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityDOList) {
            $res['entity_d_o_list'] = [];
            if (null !== $this->entityDOList && \is_array($this->entityDOList)) {
                $n = 0;
                foreach ($this->entityDOList as $item) {
                    $res['entity_d_o_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EntitySetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['entity_d_o_list'])) {
            if (!empty($map['entity_d_o_list'])) {
                $model->entityDOList = [];
                $n                   = 0;
                foreach ($map['entity_d_o_list'] as $item) {
                    $model->entityDOList[$n++] = null !== $item ? entityDOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['thirdpart_id'])) {
            $model->thirdpartId = $map['thirdpart_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
