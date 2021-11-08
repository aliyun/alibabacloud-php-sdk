<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class RemoveEntityMemberShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $memberShrink;

    /**
     * @var string
     */
    public $removeType;
    protected $_name = [
        'entityId'     => 'EntityId',
        'memberShrink' => 'Member',
        'removeType'   => 'RemoveType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->memberShrink) {
            $res['Member'] = $this->memberShrink;
        }
        if (null !== $this->removeType) {
            $res['RemoveType'] = $this->removeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveEntityMemberShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Member'])) {
            $model->memberShrink = $map['Member'];
        }
        if (isset($map['RemoveType'])) {
            $model->removeType = $map['RemoveType'];
        }

        return $model;
    }
}
