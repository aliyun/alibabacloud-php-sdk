<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\AppendEntityMemberRequest\member;
use AlibabaCloud\Tea\Model;

class AppendEntityMemberRequest extends Model
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
     * @var member
     */
    public $member;
    protected $_name = [
        'entityId'  => 'EntityId',
        'applyType' => 'ApplyType',
        'member'    => 'Member',
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
        if (null !== $this->member) {
            $res['Member'] = null !== $this->member ? $this->member->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppendEntityMemberRequest
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
            $model->member = member::fromMap($map['Member']);
        }

        return $model;
    }
}
