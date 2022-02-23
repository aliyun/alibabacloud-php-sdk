<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\AppendEntityMemberRequest\member;
use AlibabaCloud\Tea\Model;

class AppendEntityMemberRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $applyType;

    /**
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
