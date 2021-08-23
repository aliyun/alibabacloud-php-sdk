<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class AppendEntityMemberShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $applyType;

    /**
     * @var string
     */
    public $memberShrink;
    protected $_name = [
        'entityId'     => 'EntityId',
        'applyType'    => 'ApplyType',
        'memberShrink' => 'Member',
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
        if (null !== $this->applyType) {
            $res['ApplyType'] = $this->applyType;
        }
        if (null !== $this->memberShrink) {
            $res['Member'] = $this->memberShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppendEntityMemberShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ApplyType'])) {
            $model->applyType = $map['ApplyType'];
        }
        if (isset($map['Member'])) {
            $model->memberShrink = $map['Member'];
        }

        return $model;
    }
}
