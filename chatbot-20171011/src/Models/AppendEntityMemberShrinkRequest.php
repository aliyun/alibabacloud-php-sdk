<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class AppendEntityMemberShrinkRequest extends Model
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
     * @var string
     */
    public $memberShrink;
    protected $_name = [
        'agentKey'     => 'AgentKey',
        'applyType'    => 'ApplyType',
        'entityId'     => 'EntityId',
        'memberShrink' => 'Member',
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
            $model->memberShrink = $map['Member'];
        }

        return $model;
    }
}
