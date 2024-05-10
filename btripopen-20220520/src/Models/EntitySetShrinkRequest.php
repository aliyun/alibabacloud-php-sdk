<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class EntitySetShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $entityDOListShrink;

    /**
     * @description This parameter is required.
     *
     * @example 340049
     *
     * @var string
     */
    public $thirdpartId;
    protected $_name = [
        'entityDOListShrink' => 'entity_d_o_list',
        'thirdpartId'        => 'thirdpart_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityDOListShrink) {
            $res['entity_d_o_list'] = $this->entityDOListShrink;
        }
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EntitySetShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['entity_d_o_list'])) {
            $model->entityDOListShrink = $map['entity_d_o_list'];
        }
        if (isset($map['thirdpart_id'])) {
            $model->thirdpartId = $map['thirdpart_id'];
        }

        return $model;
    }
}
