<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityDeleteRequest\entityDOList;
use AlibabaCloud\Tea\Model;

class EntityDeleteRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $delAll;

    /**
     * @var entityDOList[]
     */
    public $entityDOList;

    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var string
     */
    public $thirdpartId;
    protected $_name = [
        'delAll'       => 'del_all',
        'entityDOList' => 'entity_d_o_list',
        'thirdpartId'  => 'thirdpart_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delAll) {
            $res['del_all'] = $this->delAll;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EntityDeleteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['del_all'])) {
            $model->delAll = $map['del_all'];
        }
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

        return $model;
    }
}
