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
     * @var string
     */
    public $thirdpartId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'entityDOListShrink' => 'entity_d_o_list',
        'thirdpartId'        => 'thirdpart_id',
        'userId'             => 'user_id',
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
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
