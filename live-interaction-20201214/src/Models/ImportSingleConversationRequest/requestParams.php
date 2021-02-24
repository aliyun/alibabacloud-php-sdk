<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportSingleConversationRequest;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportSingleConversationRequest\requestParams\conversation;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RequestParamsUserConversationsValue;
use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 会话基础信息
     *
     * @var conversation
     */
    public $conversation;

    /**
     * @description 用户会话视图
     *
     * @var RequestParamsUserConversationsValue[]
     */
    public $userConversations;
    protected $_name = [
        'conversation'      => 'Conversation',
        'userConversations' => 'UserConversations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversation) {
            $res['Conversation'] = null !== $this->conversation ? $this->conversation->toMap() : null;
        }
        if (null !== $this->userConversations) {
            $res['UserConversations'] = [];
            if (null !== $this->userConversations && \is_array($this->userConversations)) {
                foreach ($this->userConversations as $key => $val) {
                    $res['UserConversations'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conversation'])) {
            $model->conversation = conversation::fromMap($map['Conversation']);
        }
        if (isset($map['UserConversations'])) {
            $model->userConversations = $map['UserConversations'];
        }

        return $model;
    }
}
