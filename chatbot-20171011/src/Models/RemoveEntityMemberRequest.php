<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\RemoveEntityMemberRequest\member;
use AlibabaCloud\Tea\Model;

class RemoveEntityMemberRequest extends Model
{
    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $removeType;

    /**
     * @var member
     */
    public $member;
    protected $_name = [
        'entityId'   => 'EntityId',
        'removeType' => 'RemoveType',
        'member'     => 'Member',
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
        if (null !== $this->removeType) {
            $res['RemoveType'] = $this->removeType;
        }
        if (null !== $this->member) {
            $res['Member'] = null !== $this->member ? $this->member->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveEntityMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['RemoveType'])) {
            $model->removeType = $map['RemoveType'];
        }
        if (isset($map['Member'])) {
            $model->member = member::fromMap($map['Member']);
        }

        return $model;
    }
}
