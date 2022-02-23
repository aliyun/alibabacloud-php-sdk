<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\RemoveEntityMemberRequest\member;
use AlibabaCloud\Tea\Model;

class RemoveEntityMemberRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var member
     */
    public $member;

    /**
     * @var string
     */
    public $removeType;
    protected $_name = [
        'agentKey'   => 'AgentKey',
        'entityId'   => 'EntityId',
        'member'     => 'Member',
        'removeType' => 'RemoveType',
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
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->member) {
            $res['Member'] = null !== $this->member ? $this->member->toMap() : null;
        }
        if (null !== $this->removeType) {
            $res['RemoveType'] = $this->removeType;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Member'])) {
            $model->member = member::fromMap($map['Member']);
        }
        if (isset($map['RemoveType'])) {
            $model->removeType = $map['RemoveType'];
        }

        return $model;
    }
}
