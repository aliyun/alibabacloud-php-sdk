<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\AppendEntityMemberRequest\member;
use AlibabaCloud\Tea\Model;

class AppendEntityMemberRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example memberName
     *
     * @var string
     */
    public $applyType;

    /**
     * @example 62899
     *
     * @var int
     */
    public $entityId;

    /**
     * @var member
     */
    public $member;
    protected $_name = [
        'agentKey'  => 'AgentKey',
        'applyType' => 'ApplyType',
        'entityId'  => 'EntityId',
        'member'    => 'Member',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->applyType) {
            $res['ApplyType'] = $this->applyType;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['ApplyType'])) {
            $model->applyType = $map['ApplyType'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Member'])) {
            $model->member = member::fromMap($map['Member']);
        }

        return $model;
    }
}
