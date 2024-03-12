<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneGlobalReplyRequest\replyMessagList;
use AlibabaCloud\Tea\Model;

class InsertInterveneGlobalReplyRequest extends Model
{
    /**
     * @example xxx_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var replyMessagList[]
     */
    public $replyMessagList;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'replyMessagList' => 'ReplyMessagList',
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
        if (null !== $this->replyMessagList) {
            $res['ReplyMessagList'] = [];
            if (null !== $this->replyMessagList && \is_array($this->replyMessagList)) {
                $n = 0;
                foreach ($this->replyMessagList as $item) {
                    $res['ReplyMessagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertInterveneGlobalReplyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['ReplyMessagList'])) {
            if (!empty($map['ReplyMessagList'])) {
                $model->replyMessagList = [];
                $n                      = 0;
                foreach ($map['ReplyMessagList'] as $item) {
                    $model->replyMessagList[$n++] = null !== $item ? replyMessagList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
