<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class InsertInterveneGlobalReplyShrinkRequest extends Model
{
    /**
     * @example xxx_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $replyMessagListShrink;
    protected $_name = [
        'agentKey'              => 'AgentKey',
        'replyMessagListShrink' => 'ReplyMessagList',
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
        if (null !== $this->replyMessagListShrink) {
            $res['ReplyMessagList'] = $this->replyMessagListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertInterveneGlobalReplyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['ReplyMessagList'])) {
            $model->replyMessagListShrink = $map['ReplyMessagList'];
        }

        return $model;
    }
}
