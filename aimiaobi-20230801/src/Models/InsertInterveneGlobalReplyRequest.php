<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneGlobalReplyRequest\replyMessagList;

class InsertInterveneGlobalReplyRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var replyMessagList[]
     */
    public $replyMessagList;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'replyMessagList' => 'ReplyMessagList',
    ];

    public function validate()
    {
        if (\is_array($this->replyMessagList)) {
            Model::validateArray($this->replyMessagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->replyMessagList) {
            if (\is_array($this->replyMessagList)) {
                $res['ReplyMessagList'] = [];
                $n1 = 0;
                foreach ($this->replyMessagList as $item1) {
                    $res['ReplyMessagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['ReplyMessagList'])) {
            if (!empty($map['ReplyMessagList'])) {
                $model->replyMessagList = [];
                $n1 = 0;
                foreach ($map['ReplyMessagList'] as $item1) {
                    $model->replyMessagList[$n1] = replyMessagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
